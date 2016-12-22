<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PdfController extends Controller
{
    public function crearPdf(){
      $users = User::all();
      $pdf = \PDF::loadView('pdf.reporte_users', ['datos' => $users]);
      return $pdf->stream('crearPdf');
    }

}
