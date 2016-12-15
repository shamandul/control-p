<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
  protected $fillable = [
      'dateStart', 'dateEnd', 'maxDay', 'Enjoyed', 'comment'
  ];
}
