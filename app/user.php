<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class user extends Authenticatable
{
 use notifiable;
    protected $table = 'user';
    protected $fillable = ['full_name','email','password'];

    protected $hidden = ['password','remember_token'];
}
