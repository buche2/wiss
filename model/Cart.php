<?php

namespace wiss\model;

use wiss\model\CartItem;

class Cart{

  public $items;

  public function __construct(){
    $this->items = [];
  }

  public function getItems(){
    return $this->items;
  }

  public function addItem($product){
    foreach($this->items as $item){
      if($item->compare($product->id)){
        $item->increment();
        return;
      }
    }
    $this->items[] = new CartItem($product);
  }

}


 ?>
