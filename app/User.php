<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'role',
    ];
    public static function boot(){
      parent::boot();
      static::creating(function ($user){
        $user->token = str_random(200);
      });
    }
    public function confirmEmail(){
      $this->active = true;
      $this->token = str_random(200);
      $this->save();
    }
    public function admin(){
      return $this->role ==='admin';
    }
    public function supervisor(){
      return $this->role ==='supervisor';
    }
    public function faltas(){
      return $this->belongsToMany('App\models\Falta', 'suffers')
      ->withPivot('dateStart','dateEnd')
      ->withTimestamps();
    }
}
