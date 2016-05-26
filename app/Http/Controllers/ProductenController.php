<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProductenController extends Controller
{
    function overview() {
    	return view('categorie_overview', ["title" => "Producten", "page" => "producten", "categorie" => "alles"]);
    }

    function categorieFilter($cat) {
    	return view('producten_overview', 
    		["title" => $cat . " - Producten", "page" => "producten", "catdisplayname" => "Vietnamese Natuursteen",
    		 "categorie" => $cat]);

    }


}
