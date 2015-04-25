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
Route::get('/admin', 'AdminController@login');
Route::get('/admin/home', 'AdminController@home');
Route::post('/admin/upload', 'AdminController@upload');
Route::post('/admin/action/login', 'AdminController@loginAction');
Route::get('/admin/veh/list', 'AdminController@vehListAction');
Route::get('/admin/veh/add', 'AdminController@vehAddAction');
Route::post('/admin/veh/add', 'AdminController@vehAddPostAction');
Route::get('/admin/veh/edit/{id}', 'AdminController@vehEditAction');
Route::post('/admin/veh/edit', 'AdminController@vehEditPostAction');
Route::get('/admin/forfaits/add', 'AdminController@addForfaitAction');
Route::post('/admin/forfaits/add', 'AdminController@addForfaitPostAction');
Route::get('/admin/forfaits/edit/{id}', 'AdminController@editForfaitAction');
Route::post('/admin/forfaits/edit', 'AdminController@editForfaitPostAction');
Route::get('/admin/forfaits/list', 'AdminController@listForfaitsAction');
Route::get('/admin/forfaits/categories/add', 'AdminController@addForfaitCategorieAction');
Route::post('/admin/forfaits/categories/add', 'AdminController@addForfaitCategoriePostAction');
Route::get('/admin/forfaits/categories/list', 'AdminController@listForfaitCategoriesAction');
Route::get('/admin/news/list', 'AdminController@newsListAction');
Route::get('/admin/news/add', 'AdminController@newsAddAction');
Route::post('/admin/news/add', 'AdminController@newsAddPostAction');
Route::get('/admin/news/edit/{id}', 'AdminController@newsEditAction');
Route::post('/admin/news/edit', 'AdminController@newsEditPostAction');
Route::get('/admin/produits/list', 'AdminController@produitsListAction');
Route::get('/admin/produits/add', 'AdminController@produitsAddAction');
Route::post('/admin/produits/add', 'AdminController@produitsAddPostAction');
Route::get('/admin/produits/edit/{id}', 'AdminController@produitsEditAction');
Route::post('/admin/produits/edit', 'AdminController@produitsEditPostAction');
Route::get('/admin/analytics', 'AdminController@analytics');
Route::get('/admin/logout', 'AdminController@logout');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);