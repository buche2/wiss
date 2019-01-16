<?php

namespace Wiss\Controller;

use wiss\controller\AbstractController;

class BestellungController extends AbstractController{

  public $title = 'bestellung';

  public function __construct(){

  }

  public function index(){
    $this->title = "bestellung";
    $content = parent::loadView('bestellung');
    parent::display($content);
  }

}
