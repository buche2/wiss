<?php

namespace wiss\model;

use wiss\database\PDOConnection;

class AbstractModel{

  protected $pdo;
  protected $table;
  protected $class;

  public function __construct(){
    $this->pdo = new PDOConnection();
    $this->table = str_replace("Model", "", implode("",array_slice(explode("\\", get_called_class()),2)));
    $this->class = get_called_class();
  }

  public function fetchAll(){
    $prepared = $this->pdo->prepare("select * from " . $this->table );
    $prepared->execute();
    $result = $prepared->fetchAll(\PDO::FETCH_ASSOC);
    return $this->intoVariables($result);
  }

  protected function intoVariables($array){
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
