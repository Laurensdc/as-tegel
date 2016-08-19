<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Categorie;
use App\Subcategorie;
use DB;

use Session;

class ProductenController extends Controller
{
    function overview() {
    	$categories = Categorie::orderBy(\DB::raw('-`volgorde`'), 'desc')->get();
    	$allsubcategories = Subcategorie::all();

    	return view('categorie_overview', [
    		"title" => "Producten overzicht", // Tab title
    		"headermenu_active" => "producten", 	// Active title in menu
    		"catmenu_active" => " ",		// Active category filter

	   		"allcategories" => $categories,			// Pass to build menu
    		"allsubcategories" => $allsubcategories,	// Pass to build menu

    		"categories" => $categories,
            "subcategories" => $allsubcategories
    		]);
    }

    function categorieDetail($cat, $subcat, $showtoast=false) {
        //	$categorie = Categorie::where('cat_linknaam', $cat)->first();
        // 	$subcategories = $categorie->subcategories;	// Subcats for this category
	   	
	   	$subcategories = Subcategorie::where('subcat_linknaam', $subcat)->first();
        $subcategorie = $subcategories["naam"];

	   	//$producten = $subcategories->products;
        $producten = $subcategories->products()->orderBy('groepering')->get();

	   	$allcategories = Categorie::orderBy(\DB::raw('-`volgorde`'), 'desc')->get();
    	$allsubcategories = Subcategorie::all();

        $hoofdcategorie = Categorie::where('cat_linknaam', $cat)->first();
        $hoofdcategorie = $hoofdcategorie["naam"];
   

    	return view('products',
    		[
    		"title" =>  $subcategorie . " &ndash; " . $hoofdcategorie, 
    		"headermenu_active" => "producten",// Active title in menu
    		"catmenu_active" => $cat,

    		"allcategories" => $allcategories,			// Pass to build menu
    		"allsubcategories" => $allsubcategories,	// Pass to build menu

            "hoofdcategorie" => $hoofdcategorie,        // For title
            "subcategorie" => $subcategorie,            // For page title

    		"producten" => $producten,
            "showtoast" => $showtoast

    		]);
    }

    function bestelProduct($cat, $subcat, Request $request) {
        Session::push('orderitems', [$request['prod_id'], $request['vierkantemeter']]);    
        return $this->categorieDetail($cat, $subcat, true);

    }


}
