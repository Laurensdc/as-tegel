<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use Auth;
use App\Product;
use DateTime;
use DateTimeZone;
use Mail;

class OrderplaceController extends Controller
{

	public function __construct()
	{
	    $this->middleware('auth');
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

        // Mail to Chris
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
                $message->to('chriswolfcarius@yahoo.com.sg')->subject('Bestelling van ' . $user->lastname . ' ' . $user->firstname);
        });


        Session::forget('orderitems');
        Session::forget('dop');

        // Mail to user
 	  	Mail::send('mail.orderconfirm_user',
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
                $message->to('' . $user->email, $user->lastname . ' ' . $user->firstname)->subject('Uw bestelling bij AS-Tegel');
        });

        // Redirect and confirm
    	return view('mail.orderconfirm',
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
