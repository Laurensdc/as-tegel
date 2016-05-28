<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\User;
use Mail;

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

    	// do changes to user
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

    	/* THIS WONT WORK and i DONT know WHY!!!!!!!! 
		Mail::send('mail.handelaar_goedgekeurd', ['user' => $user], function($m) use ($user)
		{
		    $m->from('mailer@as-tegel.be', 'As-Tegel');
		    $m->to($user->email)->subject('Uw aanvraag voor handelaar is goedgekeurd');
			// $m->to('laurensdc@gmail.com')->subject('Uw aanvraag voor handelaar is goedgekeurd'); // THIS DOES WORK !! Why?!?!?
		});

		*/

       	return redirect()->route('admin_useroverview');

    }



}
