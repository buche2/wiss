<?php

namespace wiss\helper;

class Session{

  public static function has($key){
    return isset($_SESSION[$key]);
  }

  public static function get($key){
    return unserialize($_SESSION[$key]);
  }

  public static function save($key, $value){
    $_SESSION[$key] = serialize($value);
  }

  public static function delete(){
    session_destroy();
  }

}
