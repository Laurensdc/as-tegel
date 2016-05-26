<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategorie extends Model
{
    public function categorie()
    {
        return $this->belongsTo('App\Categorie');
    }

    public function products() 
    {
    	return $this->hasMany('App\Product');
    }
}
