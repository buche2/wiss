<?php

  define('BASE_PATH', realpath(dirname(__FILE__)));
  function my_autoloader($class)
  {
    $filename = BASE_PATH . '/controller/' . str_replace('\\', '/', $class) . '.php';
    include($filename);
  }
  spl_autoload_register('my_autoloader');


  $controller = "index";

  if(isset($_GET['page']) && !empty($_GET['page'])){
    $controller = $_GET['page'];
  }
  $controller = ucfirst($controller);

  $controllerObjName = $controller."Controller";
  $controllerObj = new $controllerObjName();

  if(isset($_GET['action']) && !empty($_GET['action'])){
    $action = $_GET['action'];
    $controllerObj->$action();
  }else{
    $controllerObj->index();
  }
