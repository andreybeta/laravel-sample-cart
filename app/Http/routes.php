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
Route::get('/about', 'PagesController@about');
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
//
// Route::get('/products', 'ProductsController@index');
// Route::get('/products/create', 'ProductsController@create');
// Route::get('/products/{id}', 'ProductsController@show');
// Route::post('products', 'ProductsController@store');
Route::resource('products', 'ProductsController');
