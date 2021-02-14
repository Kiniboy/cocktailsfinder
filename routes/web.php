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
});
Route::get('/aboutus', function () {
    return view('aboutus');
});

///// ROUTES FRONT ////////////////////////

Route::get('/cocktails', 'CocktailController@viewCocktails');
Route::get('/bars', 'BarController@viewBars');
Route::get('/cocktail/{id}','CocktailController@viewCocktail');
Route::get('/bar/{id}','BarController@viewBar');

///// ROUTES ADMIN ////////////////////////

// AUTH //

Auth::routes();

// ADMIN //

Route::get('/admin', 'Admin\AdminController@index');

// COCKTAILS //

Route::get('/admin/cocktails', 'Admin\AdminCocktailController@index');
Route::post('/cocktail/store', 'Admin\AdminCocktailController@store')->name('postcocktail');
Route::resource('admin/cocktail','Admin\AdminCocktailController');

// BARS //

Route::get('/admin/bars', 'Admin\AdminBarController@index');
Route::post('/bar/store', 'Admin\AdminBarController@store')->name('postbar');
Route::resource('admin/bar','Admin\AdminBarController');

// NOTES //

Route::get('/admin/notes', 'Admin\AdminNoteController@index');
Route::resource('admin/note','Admin\AdminNoteController');
Route::post('/rating/{cocktail}', 'NotesController@postStar')->name('postStar');

// COMMENTS //



