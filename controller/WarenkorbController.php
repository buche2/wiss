<?php

namespace wiss\controller;

use wiss\controller\AbstractController;

class WarenkorbController extends AbstractController{

  public $title = 'Warenkorb';

  public function __construct(){

  }

  public function index(){
    $this->title = "Warenkorb";
    $content = parent::loadView('warenkorb');
    parent::display($content);
  }

}
