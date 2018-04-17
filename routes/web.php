<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'mainController@viewHomepage');

<<<<<<< HEAD
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
/******** ROUTES GERANT LES PAGES DE DESTINATION PAYS/VILLE***********/

Route::get('destination', 'mainController@viewDestination');

Route::get('destination/{nomPays}', 'mainController@viewPays');

Route::get('destination/{nomVille}', 'mainController@viewVille');

/******** ROUTES GERANT LES PAGES DE LIEUX D INTERET ***********/

Route::get('{nomPays}/lieux', 'mainController@viewLieuxList');

Route::get('{nomVille}/lieux', 'mainController@viewLieuxList');

Route::get('{nomPays}/lieux/{nomLieuInteret}', 'mainController@viewLieuInteret');

Route::get('{nomVille}/lieux/{nomLieuInteret}', 'mainController@viewLieuInteret');

/******** ROUTES GERANT LES PAGES DE MONUMENTS ***********/

Route::get('{nomPays}/lieux/monuments', 'mainController@viewMonumentsList');

Route::get('{nomVille}/lieux/monuments', 'mainController@viewMonumentsList');

Route::get('{nomPays}/lieux/monuments/{nomMonument}', 'mainController@viewMonument');

Route::get('{nomVille}/lieux/monuments/{nomMonument}', 'mainController@viewMonument');

/******** ROUTES GERANT LES PAGES DE RESTAURANTS ***********/

Route::get('{nomPays}/lieux/restaurants', 'mainController@viewRestaurantsList');

Route::get('{nomVille}/lieux/restaurants', 'mainController@viewRestaurantsList');

Route::get('{nomPays}/lieux/restaurants/{nomRestaurant}', 'mainController@viewRestaurants');

Route::get('{nomVille}/lieux/restaurants/{nomRestaurant}', 'mainController@viewRestaurants');

/******** ROUTES GERANT LES PAGES DE BOUTIQUES ***********/

Route::get('{nomPays}/lieux/boutiques', 'mainController@viewBoutiquesList');

Route::get('{nomVille}/lieux/boutiques', 'mainController@viewBoutiquesList');

Route::get('{nomPays}/lieux/boutiques/{nomBoutique}', 'mainController@viewBoutique');

Route::get('{nomVille}/lieux/boutiques/{nomBoutique}', 'mainController@viewBoutiques');

/******** ROUTES GERANT LES PAGES DE LIEUX DE CULTURE ***********/

Route::get('{nomPays}/lieux/culture', 'mainController@viewLieuxCulturelsList');

Route::get('{nomVille}/lieux/culture', 'mainController@viewLieuxCulturelsList');

Route::get('{nomPays}/lieux/culture/{nomlieuCulturel}', 'mainController@viewLieuxCulturel');

Route::get('{nomVille}/lieux/culture/{nomLieuCulturel}', 'mainController@viewLieuxCulturel');

/******** ROUTES GERANT LES PAGES DES EVENEMENTS ***********/

Route::get('{NomPays}/evenements', 'mainController@viewEvenementsList');

Route::get('{NomVille}/evenements', 'mainController@viewEvenementsList');

Route::get('{NomPays}/evenements/{nomEvenement}', 'mainController@viewEvenement');

Route::get('{NomVille}/evenements/{nomEvenement}', 'mainController@viewEvenement');





>>>>>>> 146d323a958a7e91d58f141629bb3d38cf773c8b
