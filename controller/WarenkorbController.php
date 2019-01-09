<?php

namespace wiss\controller;

use wiss\controller\AbstractController;

use wiss\model\ProductModel;
use wiss\helper\Session;
use wiss\helper\Request;
use wiss\model\Cart;

class WarenkorbController extends AbstractController{

  public $title = 'Warenkorb';

  public function __construct(){

  }

  public function index(){
    $this->title = "Warenkorb";
    $this->cart = Session::get('warenkorb');
    $content = parent::loadView('warenkorb');
    parent::display($content);
  }

  public function add(){
    $id = Request::getGet()['id'];
    $product = new ProductModel();
    $product->id = $id;
    $product->fetchOne();

    if(!Session::has('warenkorb')){
      Session::save('warenkorb', new Cart());
    }
    $cart = Session::get('warenkorb');
    $cart->addItem($product);

    Session::save('warenkorb', $cart);
    var_dump(Session::get('warenkorb'));
  }

}
