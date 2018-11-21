<?php

namespace Wiss\Controller;

use wiss\controller\AbstractController;

class DetailController extends AbstractController{

  public $title = 'Detail';

  public function __construct(){

  }

  public function index(){
    $this->title = "Detail";
    $content = parent::loadView('Detail');
    parent::display($content);
  }

}
