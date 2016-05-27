<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@homePage']);

Route::get('/producten', ['as' => 'producten', 'uses' => 'ProductenController@overview']);
Route::get('/producten/{cat}', ['uses' => 'ProductenController@categorieFilter']);
Route::get('/producten/{cat}/{subcat}', ['uses' => 'ProductenController@categorieDetail']);



Route::auth();

Route::get('/home', 'HomeController@homePage');


