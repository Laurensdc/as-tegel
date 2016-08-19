<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use Session;
use Auth;
use DateTime;
use DateTimeZone;
use Mail;

class OrderController extends Controller
{
    function overview() {
    	$items = Session::get('orderitems');

    	if(sizeof($items) > 0) {

    	$producten = array();
    	$vierkantemeters = array();
    	$prijzen = array();
        $sessionIndexes = array();
        $eenheden = array();

    	foreach($items as $n=>$i) {
    		$prod = Product::find($i[0]);
    		array_push($producten, $prod);
    		array_push($vierkantemeters, $i[1]);
            array_push($sessionIndexes, $n);
    		if(Auth::check() && Auth::user()->role == 'handelaar') {
    			array_push($prijzen, $prod->prijs_handelaar * $i[1]);

    		} 
    		//else array_push($prijzen, $prod->prijs_particulier * $i[1]);
    	}

    	$totaleprijs = 0;
    	foreach($prijzen as $p) {
    		$totaleprijs += $p;
    	}


    	return view('order',
    	 [
    	 "items" => $items,
    	 "producten" => $producten,
    	 "vierkantemeters" => $vierkantemeters,
    	 "prijzen" => $prijzen,
    	 "totaleprijs" => $totaleprijs,
         "sessionIndexes" => $sessionIndexes,
    	 ]);

    	}

    	else return view('order');
    }

    function deleteOrder() {
    	Session::flush();
    	return redirect()->route('producten');
    }

    function deleteOne($id) {
        $sess = Session::get('orderitems');
        unset($sess[$id]);
        Session::set('orderitems', $sess);

        return $this->overview();
    }

    function toggledop() {
        if(Auth::check() && Auth::user()->role == 'handelaar') {
            if(Session::get('dop') == true) Session::put('dop', false);
            else Session::put('dop', true);
        }

        return $this->overview();
    }

}
