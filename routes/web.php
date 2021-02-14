<?php

use Illuminate\Support\Facades\Auth;
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
})->middleware('web');;
Route::get('/aboutus', function () {
    return view('aboutus');
})->middleware('web');;

///// ROUTES FRONT ////////////////////////

Route::get('/cocktails', 'CocktailController@viewCocktails')->middleware('web');;
Route::get('/cocktail/{id}','CocktailController@viewCocktail')->middleware('web');;

///// ROUTES ADMIN ////////////////////////

// AUTH //

Auth::routes();

// ADMIN //

Route::get('/admin', 'Admin\AdminController@index');

// COCKTAILS //

Route::get('/admin/cocktails', 'Admin\AdminCocktailController@index')->middleware('web');;
Route::post('/cocktail/store', 'Admin\AdminCocktailController@store')->name('postcocktail')->middleware('web');;
Route::resource('admin/cocktail','Admin\AdminCocktailController')->middleware('web');;

// BARS //

Route::get('/admin/bars', 'Admin\AdminBarController@index')->middleware('web');;
Route::post('/bar/store', 'Admin\AdminBarController@store')->name('postbar')->middleware('web');;
Route::resource('admin/bar','Admin\AdminBarController')->middleware('web');;

// NOTES //

Route::get('/admin/notes', 'Admin\AdminNoteController@index')->middleware('web');;
Route::resource('admin/note','Admin\AdminNoteController')->middleware('web');;
Route::post('/rating/{cocktail}', 'NotesController@postStar')->name('postStar')->middleware('web');;

// COMMENTS //



