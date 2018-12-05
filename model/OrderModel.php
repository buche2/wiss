<?php

namespace wiss\model;

use wiss\model\AbstractModel;

class OrderModel extends AbstractModel{

  public $id;
  public $product_id;
  public $user_id;
  public $order_date;
  public $state;

}
