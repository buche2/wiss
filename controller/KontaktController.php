<?php

namespace wiss\controller;

use wiss\controller\AbstractController;
use wiss\database\PDOConnection;

class KontaktController extends AbstractController{

  public $title = 'Kontakt';

  public function __construct(){

  }

  public function index(){
    $this->title = "Kontakt";
    $content = parent::loadView('kontakt');
    parent::display($content);
  }

}
