<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Categorie;
use App\Subcategorie;

class ProductenController extends Controller
{
    function overview() {
    	$categories = Categorie::all();

    	return view('categorie_overview', [
    		"title" => "Producten overzicht", // Tab title
    		"headermenu_active" => "producten", 	// Active title in menu
    		"catmenu_active" => " ",		// Active category filter
    		"categories" => $categories
    		]);
    }

    function categorieFilter($cat) {
		// Join tables
    	$subcategories = Subcategorie::orderBy('categories.naam')
    	->join('categories', 'categories.id', '=', 'subcategories.categorie_id')
    	->where('categories.cat_linknaam', $cat)
    	->select('subcategories.*', 'categories.naam as catnaam')
    	->get();

    	$hoofdcategorie = $subcategories[0]["catnaam"];


    	return view('overview_voor_categorie', 
    		[
    		"title" => "Vietnamese Natuursteen",	// Tab title
    		"headermenu_active" => "producten",  // Active title in menu
    		"catmenu_active" => $cat, 	// Active left menu
    		"subcategories" => $subcategories,
    		"hoofdcategorie" => $hoofdcategorie,
 			"hoofdcategorielink" => $cat
    		 ]);

    }

    function productDetail($cat) {
    	return view('product_detail',
    		[
    		"title" => "test", 
    		"headermenu_active" => "producten",// Active title in menu
    		"catmenu_active" => $cat


    		]);
    }


}
