<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\User;
use App\Product;
use App\Subcategorie;
use Mail;
use DB;

class AdminController extends Controller
{


    function mainPanel() {
    	return view('admin.home');

    }

    function userOverview() {
    	$users = User::orderBy('lastname')->get();

    	return view('admin.users', [
    		'users' => $users
    		]);
    }

    function userDetail($id) {
    	$user = User::find($id);

    	return view('admin.useredit', [
    		'user' => $user
    		]);
    }

    function userEdit($id, Request $request) {
    	// Make changes to user
    	$user = User::find($id);

    	$user->firstname = $request['firstname'];
    	$user->lastname = $request['lastname'];
    	$user->role = $request['role'];
    	$user->telnr = $request['telnr'];
    	$user->email = $request['email'];
    	$user->save();

    	return redirect()->route('admin_useroverview');
    }

    function makeHandelaar($email) {
    	$user = User::where('email', $email)->first();
    	$user->role = 'handelaar';
    	$user->save();

    	/*
    	$data = array (
    		'achternaam' => $user->lastname,
    		'voornaam' => $user->firstname

    	);

    	$mailadres = $user->email;
    	$vollenaam = $user->lastname . ' ' . $user->firstname;
		*/

    	/* THIS WONT WORK and i DONT know WHY!
		Mail::send('mail.handelaar_goedgekeurd', ['user' => $user], function($m) use ($user)
		{
		    $m->from('mailer@as-tegel.be', 'As-Tegel');
		    $m->to($user->email)->subject('Uw aanvraag voor handelaar is goedgekeurd');
			// $m->to('laurensdc@gmail.com')->subject('Uw aanvraag voor handelaar is goedgekeurd'); // THIS DOES WORK 
		});

		*/

       	return redirect()->route('admin_useroverview');
    }


    function productOverview() {
        $producten = Product::orderBy('naam')->get();

        return view('admin.producten', [
            'producten' => $producten

            ]);

    }

    function productOverviewOrderby($val) {
        $producten = Product::orderBy($val)->get();

        return view('admin.producten', [
            'producten' => $producten

            ]);

    }

    function productDetail($id) {
        $product = Product::find($id);
        $subcategories = Subcategorie::all();

        return view('admin.productedit', [
            'p' => $product,
            'subcategories' => $subcategories
            ]);
    }

    function productEdit($id, Request $r) {
        // Make changes to product
        $p = Product::find($id);
        
        $p->naam = $r['naam'];
        $p->afmetingen = $r['afmetingen'];
        $p->prijs_particulier = $r['prijs_particulier'];
        $p->prijs_handelaar = $r['prijs_handelaar'];
        $p->invoorraad = $r['invoorraad'];
        $p->beschrijving = $r['beschrijving'];
        $p->coverfoto = $r['foto'];
        $p->subcategorie_id = $r['subcategorie_id'];

        $p->save();

        return redirect()->route('admin_productoverview');

    }

}
