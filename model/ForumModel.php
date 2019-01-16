<?php

namespace wiss\model;

use wiss\model\AbstractModel;

class ForumModel extends AbstractModel{

  public $id;
  public $user_id;
  public $forum_id;
  public $title;
  public $category;
  public $content;
  public $entry_date;
  public $children = [];

  public function __construct(){
    parent::__construct();
    $this->ignoreFields[] = 'children';
  }

}
