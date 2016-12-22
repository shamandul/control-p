<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PdfController extends Controller
{
    public function crearPdf(){
      // $data= $datos;
      // $date = date('Y-m-d');
      // $invoice = "2222";
      // $view =  \View::make($vista, compact('data', 'date'))->render();
      // $pdf = \App::make('dompdf.wrapper');
      // $pdf->loadHTML($view, $datos);
      // return $pdf->stream('reporteUsers');
      $users = User::all();
      $pdf = \PDF::loadView('pdf.reporte_users', ['datos' => $users]);
      return $pdf->stream('crearPdf');
      // $pdf = \PDF::loadView('pdf.reporte_users');
      // return $pdf->download('pruebapdf.pdf');
    }
    public function reporteUsers(){
      $vista = 'pdf.reporte_users';
      $datos = User::all();
      crearPdf($datos, $vista);
    }
}
