<?php

namespace wiss\controller;

use wiss\controller\AbstractController;
use wiss\model\UserModel;
use wiss\helper\Session;
use wiss\helper\Request;

class AuthController extends AbstractController{

  public $title = 'Auth';

  public function __construct(){

  }

  public function index(){
    $this->title = "Registration";

    if(Request::isPost()){
      $usermodel = new UserModel();
      $_POST['birthdate'] = (new \DateTime($_POST['birthdate']))->format('Y-m-d');
      $usermodel->intoVariables([Request::getPost()]);
      if($usermodel->save())
        $content = parent::loadView('index');
      else
        $content = parent::loadView('registration');
    }else{



      $content = parent::loadView('registration');
    }


    parent::display($content);
  }

  public function login(){
    $title = "Login";

    $content = parent::loadView('login');

    if(Request::isPost()){
      $usermodel = new UserModel();
      $usermodel->intoVariables([Request::getPost()]);
      $usermodel->where(Request::getPost());
      if($usermodel->id){
        Session::save('auth',$usermodel);
        $content = parent::loadView('index');
      }
    }

    parent::display($content);
  }

}
