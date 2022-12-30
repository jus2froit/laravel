<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
//requete http user
Route::get('/users', 'App\Http\Controllers\UtilisateurController@index');

Route::get('/users1', 'App\Http\Controllers\UtilisateurController@ID');

Route::get('/mail', 'App\Http\Controllers\UtilisateurController@mail');

Route::get('/role', 'App\Http\Controllers\UtilisateurController@role');

//requete http book
Route::get('/book', 'App\Http\Controllers\BookController@index');

Route::get('/book1', 'App\Http\Controllers\BookController@id');

Route::get('/book_lorem', 'App\Http\Controllers\BookController@lorem');

Route::get('/book_auteur2', 'App\Http\Controllers\BookController@auteur2');

Route::get('/book_roman', 'App\Http\Controllers\BookController@roman');

Route::get('/book_CR', 'App\Http\Controllers\BookController@create');

Route::get('/book_U', 'App\Http\Controllers\BookController@update');

Route::get('/book_D', 'App\Http\Controllers\BookController@delete');

//requete http emprunteur
Route::get('/emprunteurs', 'App\Http\Controllers\EmprunteurController@index');

Route::get('/emprunteurs3', 'App\Http\Controllers\EmprunteurController@ID');

Route::get('/emprunteurs_user3', 'App\Http\Controllers\EmprunteurController@user');

Route::get('/emprunteurs_foo', 'App\Http\Controllers\EmprunteurController@foo');

Route::get('/emprunteurs_tel', 'App\Http\Controllers\EmprunteurController@tel');

Route::get('/emprunteurs_date', 'App\Http\Controllers\EmprunteurController@date');

Route::get('/emprunteurs_actif', 'App\Http\Controllers\EmprunteurController@actif');

//requete http emprunt
Route::get('/emprunt', 'App\Http\Controllers\EmpruntController@index');

Route::get('/emprunt_emprunteur2', 'App\Http\Controllers\EmpruntController@emprunteur2');

Route::get('/emprunt_book3', 'App\Http\Controllers\EmpruntController@book3');

Route::get('/emprunt_retour', 'App\Http\Controllers\EmpruntController@date');

Route::get('/emprunt_retour0', 'App\Http\Controllers\EmpruntController@date0');

Route::get('/emprunt_create', 'App\Http\Controllers\EmpruntController@create');

Route::get('/emprunt_update', 'App\Http\Controllers\EmpruntController@update');

Route::get('/emprunt_delete', 'App\Http\Controllers\EmpruntController@delete');