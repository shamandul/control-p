<?php

namespace App\Http\Controllers\Database;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Falta;

class DefaultController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function insertar(Request $request){
    if ($request->isMethod('post')) {
      $falta = new Falta;
      $falta->tipo = $request->tipo;
      $falta->factor = $request->factor;
      $falta->num_faltas = $request->num_faltas;
      $falta->comentario = $request->comentario;

      $falta->save(); 
    }
    return view('defaults.defaults_insert');
  }
}
