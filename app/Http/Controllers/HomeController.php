<?php

namespace App\Http\Controllers;

use App;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
  //  {
       // $this->middleware('auth');
   // }

    //
    function homePage() {
        return view('home', ["title" => "Home", "headermenu_active" => "home"]);

    }

}
