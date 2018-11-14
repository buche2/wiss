<?php

namespace Wiss\Controller;

use wiss\controller\AbstractController;

class IndexController extends AbstractController{

  public $title = 'WissForum';

  public function __construct(){

  }

  public function index(){
    $content = parent::loadView('index');
    parent::display($content);
  }

  public function login(){
    $this->title = "Login";
    $content = parent::loadView('index');
    parent::display($content);
  }

}
