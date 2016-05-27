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
    	$allsubcategories = Subcategorie::all();

    	return view('categorie_overview', [
    		"title" => "Producten overzicht", // Tab title
    		"headermenu_active" => "producten", 	// Active title in menu
    		"catmenu_active" => " ",		// Active category filter

	   		"allcategories" => $categories,			// Pass to build menu
    		"allsubcategories" => $allsubcategories,	// Pass to build menu


    		"categories" => $categories
    		]);
    }

    function categorieFilter($cat) {
		// Join tables
	  	// 	$subcategories = Subcategorie::orderBy('categories.naam')
	    //	->join('categories', 'categories.id', '=', 'subcategories.categorie_id')
	    //	->where('categories.cat_linknaam', $cat)
	    //	->select('subcategories.*', 'categories.naam as catnaam')
	    //	->get();

	    // AND THEN AFTER 2 HOURS OF TRYING THE NEXT LINE WITHOUT SUCCESS AND WRITING THIS WHOLE JOIN QUERY, IT WORKS:
    	$categorie = Categorie::where('cat_linknaam', $cat)->first();
    	$subcategories = $categorie->subcategories;

    	$allcategories = Categorie::all();
    	$allsubcategories = Subcategorie::all();

    	$hoofdcategorie = $categorie["naam"];

    	return view('overview_voor_categorie', 
    		[
    		"title" => "Vietnamese Natuursteen",	// Tab title
    		"headermenu_active" => "producten",  // Active title in menu
    		"catmenu_active" => $cat, 	// Active left menu

    		"allcategories" => $allcategories,			// Pass to build menu
    		"allsubcategories" => $allsubcategories,	// Pass to build menu

    		"subcategories" => $subcategories,
    		"hoofdcategorie" => $hoofdcategorie,
 			"hoofdcategorielink" => $cat


    		 ]);

    }

    function categorieDetail($cat, $subcat) {

	   //	$categorie = Categorie::where('cat_linknaam', $cat)->first();
	  // 	$subcategories = $categorie->subcategories;	// Subcats for this category
	   	
	   	$subcategories = Subcategorie::where('subcat_linknaam', $subcat)->first();
        $subcategorie = $subcategories["naam"];

	   	$producten = $subcategories->products;

	   	$allcategories = Categorie::all();
    	$allsubcategories = Subcategorie::all();

        $hoofdcategorie = Categorie::where('cat_linknaam', $cat)->first();
        $hoofdcategorie = $hoofdcategorie["naam"];
   

    	return view('categorie_detail',
    		[
    		"title" =>  $subcategorie . " &ndash; " . $hoofdcategorie, 
    		"headermenu_active" => "producten",// Active title in menu
    		"catmenu_active" => $cat,

    		"allcategories" => $allcategories,			// Pass to build menu
    		"allsubcategories" => $allsubcategories,	// Pass to build menu

            "hoofdcategorie" => $hoofdcategorie,        // For title
            "subcategorie" => $subcategorie,            // For page title

    		"producten" => $producten


    		]);
    }


}
