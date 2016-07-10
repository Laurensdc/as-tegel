<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomepageController extends Controller
{
    // Not in use ?
    public function index()
    {
        return view('home');
    }
}
