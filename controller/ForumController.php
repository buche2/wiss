<?php

namespace wiss\controller;

use wiss\controller\AbstractController;
use wiss\model\ForumModel;
use wiss\model\UserModel;
use wiss\helper\Request;
use wiss\helper\Session;

class ForumController extends AbstractController{

  public $title = 'Forum';

  public function __construct(){

  }

  public function index(){
    $this->title = "WissForum";

    $entry = new ForumModel();

    $this->entries = $entry->fetchAll([new UserModel()]);

    if(!is_array($this->entries))
      $this->entries = [$this->entries];

    $content = parent::loadView('forum');
    parent::display($content);
  }


  public function add(){
    $this->title = "Neuer Eintrag";

    if(Request::isPost()){
      $entry = new ForumModel();
      $_POST['user_id'] = Session::get("auth")->id;
      $_POST['entry_date'] = (new \DateTime())->format('Y-m-d');
      $entry->intoVariables([Request::getPost()]);

      if($entry->save())
        return header('Location: ?page=forum');
      else
        $content = parent::loadView('eintrag');
    
    } 
    else {
      $content = parent::loadView('eintrag');
    }
    parent::display($content);
  
  }

}