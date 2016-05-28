<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use Session;
use Auth;

class OrderController extends Controller
{
    function overview() {
    	$items = Session::get('orderitems');

    	$producten = array();
    	$vierkantemeters = array();
    	$prijzen = array();

    	foreach($items as $i) {
    		$prod = Product::find($i[0]);
    		array_push($producten, $prod);
    		array_push($vierkantemeters, $i[1]);
    		if(Auth::check() && Auth::user()->role == 'handelaar') {
    			array_push($prijzen, $prod->prijs_handelaar * $i[1]);
    		} 
    		else array_push($prijzen, $prod->prijs_particulier * $i[1]);
    	}

    	return view('order',
    	 [
    	 "items" => $items,
    	 "producten" => $producten,
    	 "vierkantemeters" => $vierkantemeters,
    	 "prijzen" => $prijzen

    	 ]);
    }

    function deleteOrder() {
    	Session::flush();
    	return redirect()->route('producten');
    }

    function placeOrder() {

    }
}
