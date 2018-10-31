<?php

namespace wiss\controller;

use wiss\controller\AbstractController;
use wiss\database\PDOConnection;

class AuthController extends AbstractController{

  public $title = 'Auth';

  public function __construct(){

  }

  public function index(){
    $this->title = "Registration";

    if(isset($_POST['username'])){
      $pdo = new PDOConnection();

    }else{
      $content = parent::loadView('registration');
    }

    parent::display($content);
  }

  public function login(){
    $title = "Login";
    $content = parent::loadView('index');
    parent::display($content);
  }

}
