<?php

namespace wiss\helper;

class Request{

  public static function isPost(){
    return (count($_POST) == 0)? false: true;
  }

  public static function getPost(){
    return $_POST;
  }

  public static function getGet(){
    return $_GET;
  }


}
