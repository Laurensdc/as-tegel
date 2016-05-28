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
    	 "totaleprijs" => $totaleprijs

    	 ]);
    }

    function deleteOrder() {
    	Session::flush();
    	return redirect()->route('producten');
    }

    function placeOrder() {
    	$items = Session::get('orderitems');

    	$user = Auth::user();

    	$producten = array();
    	$subcategorie = array();
    	$categorie = array();
    	$vierkantemeters = array();
    	$prijzen = array();

    	foreach($items as $i) {
    		$prod = Product::find($i[0]);
    		$subcat = $prod->subcategorie;
    		array_push($subcategorie, $subcat->naam);
    		array_push($categorie, $subcat->categorie->naam);
    		array_push($producten, $prod);
    		array_push($vierkantemeters, $i[1]);
    		if(Auth::check() && Auth::user()->role == 'handelaar') {
    			array_push($prijzen, $prod->prijs_handelaar * $i[1]);
    		} 
    		else array_push($prijzen, $prod->prijs_particulier * $i[1]);
    	}

    	$totaleprijs = 0;
    	foreach($prijzen as $p) {
    		$totaleprijs += $p;
    	}

		$date = new DateTime();
		$date->setTimezone(new DateTimeZone('Europe/Berlin'));

		$fdate = $date->format('d-m-Y H:i:s'); // same format as NOW()

 	  	Mail::send('mail.order',
             [  
	    	 "items" => $items,
	    	 "producten" => $producten,
	    	 "subcategorie" => $subcategorie,
	    	 "categorie" => $categorie,
	    	 "vierkantemeters" => $vierkantemeters,
	    	 "prijzen" => $prijzen,
	    	 "totaleprijs" => $totaleprijs,
	    	 "user" => $user,
	    	 "date" => $fdate

             ], function($message) use ($user)
            {
                $message->to('laurensdc@gmail.com', 'Laurens De Cock')->subject('Bestelling van ' . $user->lastname . ' ' . $user->firstname);
            });


            // Redirect and confirm
    	return view('mail.order',
    	 [
    	 "items" => $items,
    	 "producten" => $producten,
    	 "subcategorie" => $subcategorie,
    	 "categorie" => $categorie,
    	 "vierkantemeters" => $vierkantemeters,
    	 "prijzen" => $prijzen,
    	 "totaleprijs" => $totaleprijs,
    	 "user" => $user,
    	 "date" => $fdate

    	 ]);
    }
}
