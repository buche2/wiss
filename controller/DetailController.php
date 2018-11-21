<?php

namespace Wiss\Controller;

use wiss\controller\AbstractController;

class DetailController extends AbstractController{

  public $title = 'detail';

  public function __construct(){

  }

  public function index(){
    $this->title = "detail";
    $content = parent::loadView('detail');
    parent::display($content);
  }

}
