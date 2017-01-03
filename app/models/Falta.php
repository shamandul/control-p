<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Falta extends Model
{
  use Notifiable;

  protected $fillable = [
      'tipo', 'factor', 'num_faltas','comentario',
  ];
  public function users(){
    return $this->belongsToMany('App\User', 'suffers')
    ->withPivot('dateStart','dateEnd')
    ->withTimestamps();
  }
}
