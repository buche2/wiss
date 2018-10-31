<?php

namespace wiss\controller;

use wiss\controller\AbstractController;
use wiss\model\UserModel;

class AuthController extends AbstractController{

  public $title = 'Auth';

  public function __construct(){

  }

  public function index(){
    $this->title = "Registration";

    if(isset($_POST['username'])){
      $user = new UserModel();

      $this->users = $user->fetchAll();

      $_SESSION['user'] = $this->users[0];
      $content = parent::loadView('registration');
    }else{
      if(isset($_SESSION['user']))
        $this->users = array($_SESSION['user']);
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
