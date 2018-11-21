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
      }
    }

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


  public function fetchOne($pk='id'){
    $reflectionClass = new \ReflectionClass($this->class);
    if($reflectionClass->hasProperty($pk)){
      if($reflectionClass->getProperty($pk)->getValue($this)){
        $prepared = $this->pdo->prepare("select * from " . $this->table . " where $pk = ?;" );
        $prepared->execute([$reflectionClass->getProperty($pk)->getValue($this)]);
        $result = $prepared->fetchAll(\PDO::FETCH_ASSOC);
        return $this->intoVariables($result)[0];
      }
    }
    return null;
  }

  public function fetchAll(){
    $prepared = $this->pdo->prepare("select * from " . $this->table );
    $prepared->execute();
    $result = $prepared->fetchAll(\PDO::FETCH_ASSOC);
    return $this->intoVariables($result);
  }

  public function intoVariables($array){
    $resultSet = array();
    $reflectionClass = new \ReflectionClass($this->class);
    foreach($array as $children){
      $obj = new $this->class;
      foreach($children as $key => $value){
        if($reflectionClass->hasProperty($key)){
          $property = $reflectionClass->getProperty($key);
          $property->setAccessible(true);
          $property->setValue($obj, $value);
        }
      }
      $resultSet[] = $obj;
    }
    return $resultSet;
  }

}
