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

///// Routes Interface Admin /////

Route::get('/admin', 'Admin\AdminController@index');
Route::get('/admin/cocktails', 'Admin\AdminCocktailsController@index');
Route::get('/admin/bars', 'Admin\AdminBarsController@index');
