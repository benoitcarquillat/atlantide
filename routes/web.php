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


/*
|--------------------------------------------------------------------------
| Espace admin 
|--------------------------------------------------------------------------
|
| ici on peut gerer toutes les routes concernant les admins
| Le middleware isAdmin permet de vérifier si l'utilisateur a bien le droit de
| se connecter.
|
*/

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

    Route::get('salut', function() {
        return "salut les admins";
    });
});


Route::get('/', 'mainController@viewHomepage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/******** ROUTES GERANT LES PAGES DE DESTINATION VILLE***********/

Route::get('villes', 'mainController@viewVillesList');

Route::get('{nomVille}/lieux', 'mainController@viewLieuxList');

/******** ROUTES GERANT LES PAGES DE LIEUX D INTERET ***********/


//Route::get('{nomVille}/lieux/{nomLieuInteret}', 'mainController@viewLieuInteret');
Route::get('/lieux/{nomLieu}', 'mainController@viewLieuInteret');

/******** ROUTES GERANT LES PAGES DE MONUMENTS ***********/


Route::get('{nomVille}/lieux/monuments', 'mainController@viewMonumentsList');


Route::get('{nomVille}/lieux/monuments/{nomMonument}', 'mainController@viewMonument');

/******** ROUTES GERANT LES PAGES DE RESTAURANTS ***********/

Route::get('{nomVille}/lieux/restaurants', 'mainController@viewRestaurantsList');


Route::get('{nomVille}/lieux/restaurants/{nomRestaurant}', 'mainController@viewRestaurants');

/******** ROUTES GERANT LES PAGES DE BOUTIQUES ***********/


Route::get('{nomVille}/lieux/boutiques', 'mainController@viewBoutiquesList');


Route::get('{nomVille}/lieux/boutiques/{nomBoutique}', 'mainController@viewBoutiques');

/******** ROUTES GERANT LES PAGES DE LIEUX DE CULTURE ***********/


Route::get('{nomVille}/lieux/culture', 'mainController@viewLieuxCulturelsList');


Route::get('{nomVille}/lieux/culture/{nomLieuCulturel}', 'mainController@viewLieuxCulturel');

/******** ROUTES GERANT LES PAGES DES EVENEMENTS ***********/

Route::get('/evenements', 'ControllerEvenement@viewAll');
Route::get('/evenment/{id}','ControllerEvenementFilm@view')->where('id','[0-9]+');






