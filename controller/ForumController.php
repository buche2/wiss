<?php

namespace wiss\controller;

use wiss\controller\AbstractController;

class ForumController extends AbstractController{

  public $title = 'Forum';

  public function __construct(){

  }

  public function index(){
    $this->title = "WissForum";
    $content = parent::loadView('forum');
    parent::display($content);
  }

  public function add(){
    $this->title = "Neuer Eintrag";
    $content = parent::loadView('eintrag');
    parent::display($content);
  }

}
