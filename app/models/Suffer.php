<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Suffer extends Model
{
  use Notifiable;

  protected $fillable = [
      'user_id','falta_id','dateStart', 'dateEnd',
  ];
}
