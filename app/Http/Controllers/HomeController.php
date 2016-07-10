<?php

namespace App\Http\Controllers;

use App;
use App\Http\Requests;
use Cookie;
use Illuminate\Http\Request;
use Session;
use Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    function homePage() {
        return view('home', ["title" => "Home", "headermenu_active" => "home"]);
    }

    function contact() {
        return view('contact', ["title" => "Contact", "headermenu_active" => "contact"]);
    }

    function lang($ln, Request $request) {     
        return Redirect::back()->withCookie(cookie('ln', $ln));
    }

}
