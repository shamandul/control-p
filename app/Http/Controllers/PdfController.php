<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class PdfController extends Controller
{
    public function crearPdf($datos, $vista){
      $data=['datos' => $datos];
      $date = date('Y-m-d');
      $invoice = "2222";
      $view =  \View::make($vista, compact('data', 'date'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view, $datos);
      return $pdf->stream('reporteUsers');
      // $users = User::all();
      // $pdf = \PDF::loadView('pdf.reporte_users', $users);
      // return $pdf->stream();
    }
    public function reporteUsers(){
      $vista = 'pdf.reporte_users';
      $datos = User::all();
      $this->crearPdf($datos, $vista);
    }
}
