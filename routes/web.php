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

Route::get('/', function () {
    return view(app('shop_view').'.Login');
});

Route::resource('/','FrontController');
//Route::resource('/cart','CartController');
Route::get('/cart','CartController@index');
Route::get('/cart/{cart}/add','CartController@create');
Route::get('/cart/{cart}/edit','CartController@edit');
Route::post('cart/{cart}/update','CartController@update');
Route::get('/cart/{cart}/delete','CartController@destroy');