<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    protected $fillable = [
    'firstname', 'lastname', 'email', 'password', 'role', 'telnr'
    ];

        protected $hidden = [
        'password', 'remember_token',
    ];

}
