<?php

class IndexController extends AbstractController{

  public function __construct(){

  }

  public function index(){
    $title = "WissForum";
    $content = parent::loadView('index');
    parent::display($content);
  }

  public function login(){
    $title = "Login";
    $content = parent::loadView('index');
    parent::display($content);
  }

}
