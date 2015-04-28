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
Route::get('/magasin', 'HomeController@pieces');
Route::get('/infos-pratiques', 'HomeController@infosPratiques');
Route::get('/actu', 'HomeController@actu');
Route::get('/forfaits', 'HomeController@forfaits');
Route::get('/vehicule/{slug}', 'HomeController@vehicule');
Route::get('/produit/{slug}', 'HomeController@produit');
Route::get('/article/{slug}', 'HomeController@article');
Route::get('/forfait/{slug}', 'HomeController@forfait');
Route::get('/contact', 'HomeController@contact');
Route::post('/newsletter/signup', 'HomeController@signupNewsletter');
Route::post('/contact/send', 'HomeController@sendContactEmail');
Route::post('/veh/search', 'HomeController@searchVeh');
Route::get('/search/{keyword}', 'HomeController@search');


Route::get('/admin', 'AdminController@login');
Route::get('/admin/home', 'AdminController@home');
Route::post('/admin/upload', 'AdminController@upload');
Route::post('/admin/action/login', 'AdminController@loginAction');
Route::get('/admin/veh/list', 'AdminController@vehListAction');
Route::get('/admin/veh/add', 'AdminController@vehAddAction');
Route::post('/admin/veh/add', 'AdminController@vehAddPostAction');
Route::get('/admin/veh/edit/{id}', 'AdminController@vehEditAction');
Route::get('/admin/veh/delete/{id}', 'AdminController@vehDeleteAction');
Route::post('/admin/veh/edit', 'AdminController@vehEditPostAction');
Route::get('/admin/forfaits/add', 'AdminController@addForfaitAction');
Route::post('/admin/forfaits/add', 'AdminController@addForfaitPostAction');
Route::get('/admin/forfaits/edit/{id}', 'AdminController@editForfaitAction');
Route::get('/admin/forfaits/delete/{id}', 'AdminController@deleteForfaitAction');
Route::post('/admin/forfaits/edit', 'AdminController@editForfaitPostAction');
Route::get('/admin/forfaits/list', 'AdminController@listForfaitsAction');
Route::get('/admin/forfaits/categories/add', 'AdminController@addForfaitCategorieAction');
Route::post('/admin/forfaits/categories/add', 'AdminController@addForfaitCategoriePostAction');
Route::get('/admin/forfaits/categories/list', 'AdminController@listForfaitCategoriesAction');
Route::get('/admin/forfaits/categories/delete/{id}', 'AdminController@deleteForfaitCategorieAction');
Route::get('/admin/news/list', 'AdminController@newsListAction');
Route::get('/admin/news/add', 'AdminController@newsAddAction');
Route::post('/admin/news/add', 'AdminController@newsAddPostAction');
Route::get('/admin/news/edit/{id}', 'AdminController@newsEditAction');
Route::get('/admin/news/delete/{id}', 'AdminController@newsDeleteAction');
Route::post('/admin/news/edit', 'AdminController@newsEditPostAction');
Route::get('/admin/produits/list', 'AdminController@produitsListAction');
Route::get('/admin/produits/add', 'AdminController@produitsAddAction');
Route::post('/admin/produits/add', 'AdminController@produitsAddPostAction');
Route::get('/admin/produits/edit/{id}', 'AdminController@produitsEditAction');
Route::get('/admin/produits/delete/{id}', 'AdminController@produitsDeleteAction');
Route::post('/admin/produits/edit', 'AdminController@produitsEditPostAction');
Route::get('/admin/analytics', 'AdminController@analytics');
Route::get('/admin/logout', 'AdminController@logout');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);