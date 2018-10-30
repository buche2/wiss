<?php

class AuthController extends AbstractController{

  public $title = 'Auth';

  public function __construct(){

  }

  public function index(){
    $this->title = "Registration";
    $content = parent::loadView('registration');
    parent::display($content);
  }

  public function login(){
    $title = "Login";
    $content = parent::loadView('index');
    parent::display($content);
  }

}
