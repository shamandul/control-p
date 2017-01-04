<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Carbon\Carbon;

class Suffer extends Model
{
  use Notifiable;

  protected $fillable = [
      'user_id','falta_id','dateStart', 'dateEnd',
  ];
  protected $dates =[
    'datStart', 'dateEnd',
  ];
}
