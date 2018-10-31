<?php

namespace wiss\controller;

abstract class AbstractController{

  protected function loadView($file){
    ob_start();
    include 'view/'.$file.'.php';
    return ob_get_clean();
  }

  public abstract function index();

  public function display($content){
      include 'layout/default.php';
  }

}
