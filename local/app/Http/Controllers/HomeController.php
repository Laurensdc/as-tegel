<?php

namespace App\Http\Controllers;

use App;
use App\Http\Requests;
use Cookie;
use Illuminate\Http\Request;
use Session;
use Redirect;
use Auth;

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
        $motd = App\Motd::all()->first();

        return view('home', [
            "title" => "Home",
            "headermenu_active" => "home",
            "featuredproducts" => $featuredproducts,
            "subcategories" => $subcategories,
            "categories" => $categories,
            "motd" => $motd
            ]);
    }

    function contact() {
        return view('contact', ["title" => "Contact", "headermenu_active" => "contact"]);
    }

    function about() {
        return view('about', ["title" => trans('cont.about'), "headermenu_active" => trans('cont.about') ]);
    }

    function lang($ln, Request $request) {
        return Redirect::back()->withCookie(cookie('ln', $ln));
    }

    function ce() {
        return view('ce', ["title" => "EP norm", "headermenu_active" => "ce"]);
    }

    function prijslijst() {
        $producten = App\Product::all();
        $categories = App\Categorie::all();
        $subcategories = App\Subcategorie::all();

        return view('prijslijst', [
            "title" => "Prijslijst",
            "headermenu_active" => "prijslijst",
            "producten" => $producten,
            "categories" => $categories,
            "subcategories" => $subcategories,
            ]);
    }

}
