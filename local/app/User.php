<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    protected $fillable = [
        'firstname', 'lastname', 'email', 'password', 'role', 'telnr', 'btwnr'
    ];

        protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
	{
	    return ($this->role=='admin');
	}

}
