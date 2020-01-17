<?php namespace App\Controllers;

use App\Controllers\BaseController;

class Roberto extends BaseController{
  public function index(){
    return view('welcome_roberto');
  }
}