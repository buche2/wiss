<?php

namespace wiss\helper;

class Request{

  public static function isPost(){
    return (count($_POST) == 0)? false: true;
  }

  public static function hasAttribute($attr){
    if(isset($_POST[$attr]) || isset($_GET[$attr]))
      return true;
    return false;
  }

  public static function get($attr){
    if(isset($_POST[$attr]))
      return $_POST[$attr];
    else if(isset($_GET[$attr]))
      return $_GET[$attr];
    return false;
  }

  public static function getPost($attr=null){
    if($attr){
      return $_POST[$attr];
    }
    return $_POST;
  }

  public static function getGet($attr=null){
    if($attr){
      return $_GET[$attr];
    }
    return $_GET;
  }


}
