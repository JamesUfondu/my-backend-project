<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function profile(){
    return view('pages.profile');
  }
  public function login(){
    return view('pages.login');
  }
  public function contact(){
    return view('pages.contact');
  }
  public function blank(){
    return view('pages.blank');
  }
  public function error(){
    return view('pages.404');
  }
}
