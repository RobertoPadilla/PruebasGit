<?php namespace App\Controllers;


use App\Controllers\BaseController;


class Header extends BaseController{
  public function index(){
    return view('Header');
  }
}