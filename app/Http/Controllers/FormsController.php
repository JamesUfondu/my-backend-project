<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
  public function form1(){
    return view('pages.form_component');
  }
  public function form2(){
    return view('pages.form_validation');
  }

}
