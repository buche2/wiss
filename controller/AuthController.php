<?php

namespace wiss\controller;

use wiss\controller\AbstractController;
use wiss\model\UserModel;
use wiss\helper\Session;

class AuthController extends AbstractController{

  public $title = 'Auth';

  public function __construct(){

  }

  public function index(){
    $this->title = "Registration";

    if(isset($_POST['username'])){
      
      $content = parent::loadView('registration');
    }else{



      $content = parent::loadView('registration');
    }


    parent::display($content);
  }

  public function login(){
    $title = "Login";
    $content = parent::loadView('login');
    parent::display($content);
  }

}
