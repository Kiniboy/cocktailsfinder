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


///// Routes Interface Admin /////
Route::get('/admin', 'Admin\AdminController@index');
Route::get('/admin/cocktails', 'Admin\AdminCocktailController@index');
//Route::get('admin/new/cocktail', 'Admin\AdminCocktailController@create');
//Route::get('cocktail/create', 'Admin\AdminCocktailController@create');
Route::post('/cocktail/store', 'Admin\AdminCocktailController@store')->name('postcocktail');
//Route::get('cocktail/update', 'Admin\AdminCocktailController@update');
Route::resource('cocktail','Admin\AdminCocktailController');
Route::get('/admin/bars', 'Admin\AdminBarController@index');
//Route::get('/adminbar', array('as' => 'admin/adminBars', adminBar(){}));
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

///// Routes Coktails Front /////
Route::get('/cocktails', 'CocktailController@viewCocktails');
Route::get('/cocktail','CocktailController@viewCocktail');
