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




//route search 
Route::get('/search',['uses' => 'SearchController@getSearch','as' => 'search']);

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

Route::group(['prefix' => 'admin', 'middleware' => 'checkAdmin'], function() {
    
    Route::get('/', 'Admin\IndexController@index');
    
    Route::get('/salut', function() {
        return "salut les admins";
    });


});

Route::get('/', 'mainController@viewHomepage')->name('homepage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/******** ROUTES GERANT LES PAGES DE DESTINATION VILLE***********/

Route::get('/villes', 'mainController@viewVillesListAll');
Route::get('/villes/{nomVille}', 'mainController@viewVillesList');
//Route::get('/villes/lieux', 'mainController@viewLieuxList');
//Route::get('/villes/evenements', 'mainController@viewEvenementsList');

 /******** ROUTES GERANT LES PAGES DE LIEUX D INTERET ***********/

//Route::get('{nomVille}/lieux/{nomLieuInteret}', 'mainController@viewLieuInteret');
Route::get('/lieux/{nomLieu}', 'mainController@viewLieuInteret');
Route::get('/lieux', 'mainController@viewLieuListGlobal');

/******** ROUTES GERANT LES PAGES DES EVENEMENTS ***********/
//
Route::get('/evenements', 'mainController@viewEvenementsListGlobal');
Route::get('/evenements/{nomEvenement}', 'mainController@viewEvenement');
//Route::get('/evenement/{nom}','ControllerEvenementFilm@view');//->where('id','[0-9]+');