<?php

namespace wiss\controller;

use wiss\controller\AbstractController;
use wiss\model\ForumModel;
use wiss\helper\Request;

class ForumController extends AbstractController{

  public $title = 'Forum';

  public function __construct(){

  }

  public function index(){
    $this->title = "WissForum";

    $entry = new ForumModel();

    $this->entries = $entry->fetchAll();

    $content = parent::loadView('forum');
    parent::display($content);
  }


  public function add(){
    $this->title = "Neuer Eintrag";
    
    $entry = new ForumModel();

    $this->entries = $entry->where(Request::getGet());

    $content = parent::loadView('eintrag');
    parent::display($content);
  }

}