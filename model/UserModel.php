<?php

namespace wiss\model;

use wiss\model\AbstractModel;

class UserModel extends AbstractModel{

  public $id;
  public $lastname;
  public $firstname;
  public $gender;
  public $email;
  public $username;
  public $password;
  public $birthdate;
  public $private = 0;

}
