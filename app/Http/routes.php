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

Route::get('/', 'HomeController@index');
Route::get('/gamme-toyota', 'HomeController@gammeToyota');
Route::get('/sans-permis', 'HomeController@sansPermis');
Route::get('/vehicules-occasion', 'HomeController@occasion');
Route::get('/toutes-les-pieces', 'HomeController@pieces');
Route::get('/infos-pratiques', 'HomeController@infosPratiques');
Route::get('/actu', 'HomeController@actu');
Route::get('/forfaits', 'HomeController@forfaits');
Route::get('/contact', 'HomeController@contact');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);