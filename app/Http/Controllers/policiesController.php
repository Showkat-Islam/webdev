<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class policiesController extends Controller
{
  public function policies(){
    return view('policies');
}
}
