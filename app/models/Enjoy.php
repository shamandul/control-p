<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Enjoy extends Model
{
  use Notifiable;
 //cambiar
  protected $fillable = [
      'tipo', 'factor', 'num_faltas','comentario',
  ];
}
