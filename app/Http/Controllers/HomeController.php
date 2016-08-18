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
        $featuredproducts = App\Product::where('inpromo', 1)->get();
        $subcategories = App\Subcategorie::all();
        $categories = App\Categorie::all();

        return view('home', [
            "title" => "Home", 
            "headermenu_active" => "home",
            "featuredproducts" => $featuredproducts,
            "subcategories" => $subcategories,
            "categories" => $categories,
            ]);
    }

    function contact() {
        return view('contact', ["title" => "Contact", "headermenu_active" => "contact"]);
    }

    function lang($ln, Request $request) {     
        return Redirect::back()->withCookie(cookie('ln', $ln));
    }

}
