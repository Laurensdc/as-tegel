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

// Lang
Route::get('/lang/{ln}', function($ln) {
        App::setLocale($ln);
       	return redirect()->route('home');
});

// Auth
Route::auth();

// Admin
Route::get('/admin', ['middleware' => ['auth', 'admin'], 'uses' => 'AdminController@mainPanel', 'as' => 'admin']);
	// Users
		// Overview
		Route::get('/admin/users', ['middleware' => ['auth', 'admin'], 'uses' => 'AdminController@userOverview', 'as' => 'admin_useroverview']);

		// Detail & edit
		Route::get('/admin/users/{id}', ['middleware' => ['auth', 'admin'], 'uses' => 'AdminController@userDetail']);
		Route::post('/admin/users/{id}', ['middleware' => ['auth', 'admin'], 'uses' => 'AdminController@userEdit']);
		// User rol van handelaar geven - gebruikt voor email link
		Route::get('/admin/users/{email}/makehandelaar', ['middleware' => ['auth', 'admin'], 'uses' => 'AdminController@makeHandelaar']);

	// Producten
		// Overview
		Route::get('/admin/producten', ['middleware' => ['auth', 'admin'], 'uses' => 'AdminController@productOverview', 'as' => 'admin_productoverview']);
		// Overview sort
		Route::get('/admin/producten/sort/{val}', ['middleware' => ['auth', 'admin'], 'uses' => 'AdminController@productOverviewOrderby']);

		// Product details & edit
		Route::get('/admin/producten/edit/{id}', ['middleware' => ['auth', 'admin'], 'uses' => 'AdminController@productDetail']);
		Route::post('/admin/producten/edit/{id}', ['middleware' => ['auth', 'admin'], 'uses' => 'AdminController@productEdit']);

		// Add product
		Route::get('/admin/producten/add', ['middleware' => ['auth', 'admin'], 'uses' => 'AdminController@productAdd']);
		Route::post('/admin/producten/add', ['middleware' => ['auth', 'admin'], 'uses' => 'AdminController@productAddAction']);

	// Categorie
		// Overview
		Route::get('/admin/categorie', ['middleware' => ['auth', 'admin'], 'uses' => 'AdminController@categorieOverview', 'as' => 'admin_categorieoverview']);

		// Detail & edit
		Route::get('/admin/categorie/edit/{id}', ['middleware' => ['auth', 'admin'], 'uses' => 'AdminController@categorieDetail']);
		Route::post('/admin/categorie/edit/{id}', ['middleware' => ['auth', 'admin'], 'uses' => 'AdminController@categorieEdit']);

		// Add
		Route::get('/admin/categorie/add', ['middleware' => ['auth', 'admin'], 'uses' => 'AdminController@categorieAdd']);
		Route::post('/admin/categorie/add', ['middleware' => ['auth', 'admin'], 'uses' => 'AdminController@categorieAddAction']);


	// Subcategorie
		// Overview
		Route::get('/admin/subcategorie', ['middleware' => ['auth', 'admin'], 'uses' => 'AdminController@subcategorieOverview', 'as' => 'admin_subcategorieoverview']);

		// Detail & edit
		Route::get('/admin/subcategorie/edit/{id}', ['middleware' => ['auth', 'admin'], 'uses' => 'AdminController@subcategorieDetail']);
		Route::post('/admin/subcategorie/edit/{id}', ['middleware' => ['auth', 'admin'], 'uses' => 'AdminController@subcategorieEdit']);

		// Add
		Route::get('/admin/subcategorie/add', ['middleware' => ['auth', 'admin'], 'uses' => 'AdminController@subcategorieAdd']);
		Route::post('/admin/subcategorie/add', ['middleware' => ['auth', 'admin'], 'uses' => 'AdminController@subcategorieAddAction']);





Route::get('/unauthorized', function() {
	return view('admin.unauthorized');
});

