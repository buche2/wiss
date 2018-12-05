<?php

namespace Wiss\Controller;

use wiss\controller\AbstractController;
use wiss\model\ProductModel;

class ShopController extends AbstractController{

  public $title = 'Shop';

  public function __construct(){

  }

  public function index(){
    $this->title = "Shop";

    $product = new ProductModel();

    $this->products = $product->fetchAll();

    $content = parent::loadView('shop');
    parent::display($content);
  }

}
