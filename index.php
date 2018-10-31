<?php
namespace wiss;

session_start();

  function my_autoloader($class)
  {
    $clsArr = explode("\\",$class);
    if(count($clsArr) > 3){
      $clsArr = array_slice($clsArr, 2);
      $class = implode("\\", $clsArr);
    }
    $filename = BASE_PATH . '/../' . str_replace('\\', '/', $class) . '.php';
    include($filename);
  }
  spl_autoload_register('wiss\my_autoloader');


  define('BASE_PATH', realpath(dirname(__FILE__)));

  $controller = "index";

  if(isset($_GET['page']) && !empty($_GET['page'])){
    $controller = $_GET['page'];
  }
  $controller = ucfirst($controller);

  $controllerObjName = '\\wiss\\controller\\'.$controller."Controller";
  $controllerObj = new $controllerObjName();

  if(isset($_GET['action']) && !empty($_GET['action'])){
    $action = $_GET['action'];
    $controllerObj->$action();
  }else{
    $controllerObj->index();
  }
