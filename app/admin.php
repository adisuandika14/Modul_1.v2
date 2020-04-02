<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class admin extends Authenticatable
{
    protected $guard = 'admin';
    protected $table = 'admins';

     /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
    protected $fillable = [
        'username', 'password',
    ];
     /**
      * The attributes that should be hidden for arrays.
      *
      * @var array
      */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
