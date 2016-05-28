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

// Home
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@homePage']);
Route::get('/home', 'HomeController@homePage');

// Producten
Route::get('/producten', ['as' => 'producten', 'uses' => 'ProductenController@overview']);
Route::get('/producten/{cat}', ['uses' => 'ProductenController@categorieFilter']);
Route::get('/producten/{cat}/{subcat}', ['uses' => 'ProductenController@categorieDetail']);
Route::post('/producten/{cat}/{subcat}', ['uses' => 'ProductenController@bestelProduct']);

// Bestellingen
Route::get('/order', ['uses' => 'OrderController@overview', 'as' => 'order']);
Route::get('/order/delete', ['uses' => 'OrderController@deleteorder', 'as' => 'deleteorder']);
Route::get('/order/place', ['uses' => 'OrderplaceController@placeOrder', 'as' => 'placeorder']);

Route::auth();

// Admin
Route::get('/admin', ['middleware' => ['auth', 'admin'], 'uses' => 'AdminController@mainPanel', 'as' => 'admin']);
Route::get('/admin/users', ['middleware' => ['auth', 'admin'], 'uses' => 'AdminController@userOverview', 'as' => 'admin_useroverview']);
Route::get('/admin/users/{id}', ['middleware' => ['auth', 'admin'], 'uses' => 'AdminController@userDetail']);
Route::post('/admin/users/{id}', ['middleware' => ['auth', 'admin'], 'uses' => 'AdminController@userEdit']);

	// User rol van handelaar geven - gebruikt voor email link
Route::get('/admin/users/{email}/makehandelaar', ['middleware' => ['auth', 'admin'], 'uses' => 'AdminController@makeHandelaar']);





Route::get('/unauthorized', function() {
	return view('admin.unauthorized');
});

