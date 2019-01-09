<?php

namespace Wiss\Controller;

use wiss\controller\AbstractController;
use wiss\helper\Session;
use wiss\helper\Request;
use wiss\model\ProductModel;
use wiss\model\ForumModel;

class SearchController extends AbstractController{

  public $title = 'Search';

  public function __construct(){

  }

  public function index(){
  	$product = new ProductModel();
  	$this->products = $product->where(['name'=> '%'.Request::getGet()['search'].'%', 'product_ldesc'=> '%'.Request::getGet()['search'].'%'],'or');

  	$this->products = (is_array($this->products))?$this->products:[$this->products];

  	$entry = new ForumModel();
  	$this->entries = $entry->where(['title' => '%'.Request::getGet()['search'].'%', 'category' => '%'.Request::getGet()['search'].'%', 'content' => '%'.Request::getGet()['search'].'%'],'or');

  	$this->entries = (is_array($this->entries))?$this->entries:[$this->entries];

    $content = parent::loadView('search');
    parent::display($content);
  }

}