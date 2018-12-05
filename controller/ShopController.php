<?php

namespace Wiss\Controller;

use wiss\controller\AbstractController;
use wiss\model\ProductModel;
use wiss\helper\Request;

class ShopController extends AbstractController{

  public $title = 'Shop';

  public function __construct(){

  }

  public function detail(){
    $this->title = "Detail";

    $product = new ProductModel();

    $this->product = $product->where(Request::getGet());

    $content = parent::loadView('detail');
    parent::display($content);
  }



  public function index(){
    $this->title = "Shop";

    $product = new ProductModel();

    $this->products = $product->fetchAll();

    $content = parent::loadView('shop');
    parent::display($content);
  }

}
