<?php

namespace wiss\model;

use wiss\database\PDOConnection;

class AbstractModel{

  protected $pdo;
  protected $table;
  protected $class;
  protected $ignoreFields = ['pdo', 'class', 'table', 'ignoreFields'];

  public function getPdo(){
    return $this->pdo;
  }

  public function getTableName(){
    return $this->table;
  }

  public function getClass(){
    return $this->class;
  }

  public function __sleep(){
    return array_diff(array_keys(get_object_vars($this)), $this->ignoreFields);
  }

  public function __wakeup(){
    $this->connection();
  }

  private function connection(){
      $this->pdo = new PDOConnection();
      $this->table = str_replace("Model", "", implode("",array_slice(explode("\\", get_called_class()),2)));
      $this->class = get_called_class();
  }

  public function __construct(){
    $this->connection();
  }

  public function save($pk='id'){
    $reflectionClass = new \ReflectionClass($this->class);
    if($reflectionClass->hasProperty($pk)){
      if($reflectionClass->getProperty($pk)->getValue($this)){
        $variables = implode(" = ? , ",array_diff(array_keys(get_object_vars($this)), $this->ignoreFields)) . ' = ?';

        $prepared = $this->pdo->prepare("update " . $this->table . " set " . $variables . " where $pk = ?;");
        $values = [];
        foreach(array_diff(array_keys(get_object_vars($this)), $this->ignoreFields) as $property){
          if($reflectionClass->hasProperty($property)){
            $values[] = $reflectionClass->getProperty($property)->getValue($this);
          }
        }
        $values[] = $reflectionClass->getProperty($pk)->getValue($this);

        $prepared->execute($values);
        return true;
      }else{
        $ignore = $this->ignoreFields;
        $ignore[] = $pk;
        $variables = implode(",",array_diff(array_keys(get_object_vars($this)), $ignore));

        $values = [];
        $countvalues = [];
        foreach(array_diff(array_keys(get_object_vars($this)), $ignore) as $property){
          if($reflectionClass->hasProperty($property)){
            $values[] = $reflectionClass->getProperty($property)->getValue($this);
            $countvalues[] = "?";
          }
        }
        $countvalues = implode(",", $countvalues);

        $prepared = $this->pdo->prepare("insert into " . $this->table . " ($variables) values ($countvalues);");

        $prepared->execute($values);
        return true;
      }
    }
    return false;
  }

  public function delete($pk='id'){
    $reflectionClass = new \ReflectionClass($this->class);
    if($reflectionClass->hasProperty($pk)){
      if($reflectionClass->getProperty($pk)->getValue($this)){
        $prepared = $this->pdo->prepare("delete from " . $this->table . " where $pk = ?;" );
        $prepared->execute([$reflectionClass->getProperty($pk)->getValue($this)]);
        return true;
      }
    }
    return false;
  }

  /**
   * @param $where is get or post array which is used in where from select
   */
  public function where($where, $condition='and'){
    $reflectionClass = new \ReflectionClass($this->class);

    $query = 'select * from ' . $this->table . ' where ';
    $values = [];

    foreach($where as $key => $value){
      if($reflectionClass->hasProperty($key)){
        if(count($values)){
            $query .= ' '.$condition.' ';
        }
        $query .= $key . ' like ? ';
        $values[] = $value;
      }
    }

    $prepared = $this->pdo->prepare($query);
    $prepared->execute($values);

    $result = $prepared->fetchAll(\PDO::FETCH_ASSOC);

    return $this->intoVariables($result);
  }



  public function fetchOne($pk='id'){
    $reflectionClass = new \ReflectionClass($this->class);
    if($reflectionClass->hasProperty($pk)){
      if($reflectionClass->getProperty($pk)->getValue($this)){
        $prepared = $this->pdo->prepare("select * from " . $this->table . " where $pk = ?;" );
        $prepared->execute([$reflectionClass->getProperty($pk)->getValue($this)]);
        $result = $prepared->fetchAll(\PDO::FETCH_ASSOC);
        $tmp = $this->intoVariables($result);
        if(is_array($tmp))
          return $tmp[0];
        return $tmp;
      }
    }
    return null;
  }

  /*
  public function fetchAll(){
    $prepared = $this->pdo->prepare("select * from " . $this->table );
    $prepared->execute();
    $result = $prepared->fetchAll(\PDO::FETCH_ASSOC);
    return $this->intoVariables($result);
  }
  */

  public function fetchAll($joinObjectsArray=[],$where=[]){
    $reflectionClass = new \ReflectionClass($this->class);

    $attributes = [$this->table => ['*']];

    $joins = '';
    foreach($joinObjectsArray as $joinObject){
      if($reflectionClass->hasProperty(strtolower($joinObject->getTableName()."_id"))){
        $joins .= ' left join ' . $joinObject->getTableName() . ' on ' . $this->table . '.'.
          strtolower($joinObject->getTableName()."_id") . ' = ' . $joinObject->getTableName() . '.id ';

          $attributes[$joinObject->getTableName()] = [];

          $fields = array_diff(array_keys(get_object_vars($joinObject)), $this->ignoreFields);
          foreach($fields as $field){
            $attributes[$joinObject->getTableName()][$joinObject->getTableName().$field] = $field;
          }
      }
    }

    $attributesString = '';
    $counter = 0;
    foreach($attributes as $table => $attribute){
      foreach($attribute as $key => $single){
        if($counter++ > 0)
          $attributesString .= ',';
        if(!is_numeric($key)){
          $attributesString .= $table . '.' . $single . ' as ' . $key;
        } else {
          $attributesString .= $table . '.' . $single;
        }
      }
    }

    $query = "select ".$attributesString." from " . $this->table . $joins;

    $query .= (count($where))?' where ': '';

    $values = [];

    foreach($where as $key => $value){
      if($reflectionClass->hasProperty($key)){
        if(count($values)){
            $query .= ' and ';
        }
        $query .= $this->table.'.'.$key . ' = ? ';
        $values[] = $value;
      }
    }

    $prepared = $this->pdo->prepare($query);
    $prepared->execute($values);


    $result = $prepared->fetchAll(\PDO::FETCH_ASSOC);

    return $this->intoVariables($result, $joinObjectsArray);
  }

  public function intoVariables($array, $joinObjectsArray=[]){
    $resultSet = array();
    $reflectionClass = new \ReflectionClass($this->class);
    foreach($array as $children){
      $obj = new $this->class;

      $tableNames = [];
      if(count($joinObjectsArray)){
        foreach($joinObjectsArray as $joinObject){
          $className = $joinObject->getClass();
          if(count($array) == 1){
            $this->{strtolower($joinObject->getTableName())} = new $className;
          }else{
            $obj->{strtolower($joinObject->getTableName())} = new $className;
          }
          $tableNames[] = strtolower($joinObject->getTableName());
        }
      }
      foreach($children as $key => $value){
        if($reflectionClass->hasProperty($key)){
          $property = $reflectionClass->getProperty($key);
          $property->setAccessible(true);
          if(count($array) == 1){
            $property->setValue($this, $value);
          }else{
            $property->setValue($obj, $value);
          }
        }else if(count($tableNames)) {
          foreach($joinObjectsArray as $joinObject){
            if( strpos( $key, $joinObject->getTableName() ) !== false) {
              if(count($array) == 1){
                $tmpReflecionClass = new \ReflectionClass($this->{strtolower($joinObject->getTableName())});
              }else{
                $tmpReflecionClass = new \ReflectionClass($obj->{strtolower($joinObject->getTableName())});
              }
              $attribute = str_replace($joinObject->getTableName(), '', $key);
              if($tmpReflecionClass->hasProperty($attribute)){
                $property = $tmpReflecionClass->getProperty($attribute);
                $property->setAccessible(true);
                if(count($array) == 1){
                  $property->setValue($this->{strtolower($joinObject->getTableName())}, $value);
                }else{
                  $property->setValue($obj->{strtolower($joinObject->getTableName())}, $value);
                }
                break;
              }
            }
          }
        }
      }
      if(count($array) == 1){
        return $this;
      }
      $resultSet[] = $obj;
    }
    return $resultSet;
  }

}
