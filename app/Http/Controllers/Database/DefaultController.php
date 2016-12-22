<?php

namespace App\Http\Controllers\Database;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DefaultController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function insertar(Request $request){
    if ($request->isMethod('post')) {
      
    }
    return view('defaults.defaults_insert');
  }
}
