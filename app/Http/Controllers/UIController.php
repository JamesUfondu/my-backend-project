<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UIController extends Controller
{
  public function element(){
    return view('pages.general');
  }
  public function button(){
    return view('pages.buttons');
  }
  public function grids(){
    return view('pages.grids');
  }
}
