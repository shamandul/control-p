<?php

namespace App\Http\Controllers\Database;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Falta;
use Redirect;

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
  public function modificarGet($seleccion){

    $falta = Falta::find($seleccion);
    return view('defaults.faltas_modificar',['falta'=>$falta]);
  }
  public function modificarPut($id, Request $request){

    $falta = Falta::find($id);
    $falta->tipo = $request->tipo;
    $falta->factor = $request->factor;
    $falta->num_faltas = $request->num_faltas;
    $falta->comentario = $request->comentario;
    $falta->save();
    return view('defaults.faltas_mostrar');
  }
  public function show(){
    $falta = Falta::all();

    return view('defaults.faltas_mostrar', ['datos'=> $falta]);
  }
}
