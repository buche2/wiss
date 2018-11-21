<?php

namespace Wiss\Controller;

use wiss\controller\AbstractController;

class ShopController extends AbstractController{

  public $title = 'Shop';

  public function __construct(){

  }

  public function index(){
    $this->title = "Shop";
    $content = parent::loadView('Shop');
    parent::display($content);
  }

}