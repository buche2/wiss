<?php

namespace wiss\model;

class CartItem{

  public $product;
  public $count;

  public function __construct($product){
    $this->product = $product;
    $this->count = 1;
  }

  public function compare($id){
    return $id == $this->product->id;
  }

  public function getProduct(){
    return $this->product;
  }
  public function getCount(){
    return $this->count;
  }

  public function amount(){
    return $this->count * $this->product->price;
  }

  public function increment(){
    $this->count += 1;
  }


}

 ?>
