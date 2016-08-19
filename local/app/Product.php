<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function subcategorie() {
    	 return $this->belongsTo('App\Subcategorie'); 
    }


}
