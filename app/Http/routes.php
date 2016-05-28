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
Route::get('/home', 'HomeController@homePage');

Route::get('/producten', ['as' => 'producten', 'uses' => 'ProductenController@overview']);
Route::get('/producten/{cat}', ['uses' => 'ProductenController@categorieFilter']);
Route::get('/producten/{cat}/{subcat}', ['uses' => 'ProductenController@categorieDetail']);
Route::post('/producten/{cat}/{subcat}', ['uses' => 'ProductenController@bestelProduct']);

Route::get('/order', ['uses' => 'OrderController@overview', 'as' => 'order']);
Route::get('/deleteorder', ['uses' => 'OrderController@deleteorder']);


Route::auth();

Route::get('/admin', ['middleware' => ['auth', 'admin'], 'uses' => 'AdminController@mainPanel', 'as' => 'admin']);

Route::get('/unauthorized', function() {
	return view('admin.unauthorized');
});

