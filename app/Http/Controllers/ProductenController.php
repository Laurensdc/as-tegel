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
    	return view('overview_voor_categorie', 
    		[
    		"title" => "Vietnamese Natuursteen" . " - Producten",
    		"page" => "producten", 
    		"catdisplayname" => "Vietnamese Natuursteen",
    		"categorie" => $cat

    		 ]);

    }

    function productDetail($cat) {
    	return view('product_detail',
    		[
    		"title" => "test", 
    		"page" => "test",
    		"catdisplayname" => "Vietnamese Natuursteen",
    		"categorie" => $cat

    		]);
    }


}
