<?php
namespace App\controller;

class ViewsController extends AppController{

  // 共通レイアウト読み込み
public function initialize() :void{
  parent::initialize();
  $this->viewBuilder()->setLayout('views');
}


  public function index(){
  }

  public function about(){
  }

  public function company(){
  }

  public function qaIndex(){
  }

  public function recruit(){
  }

  public function access(){
  }
}
