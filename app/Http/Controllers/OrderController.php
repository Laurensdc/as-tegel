<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use Session;

class OrderController extends Controller
{
    function overview() {
    	$items = Session::get('orderitems');

    	$producten = array();
    	$vierkantemeters = array();

    	foreach($items as $i) {
    		array_push($producten, Product::find($i[0]));
    		array_push($vierkantemeters, $i[1]);
    	}

    	return view('order',
    	 [
    	 "items" => $items,
    	 "producten" => $producten,
    	 "vierkantemeters" => $vierkantemeters

    	 ]);
    }

    function deleteOrder() {
    	Session::flush();
    	return view('order');
    }

    function placeOrder() {

    }
}
