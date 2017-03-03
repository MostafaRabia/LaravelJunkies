<?php

Auth::routes();
Route::get('/cart','CartController@index');
Route::get('/cart/{cart}/add','CartController@create');
Route::get('/cart/{cart}/edit','CartController@edit');
Route::post('cart/{cart}/update','CartController@update');
Route::get('/cart/{cart}/delete','CartController@destroy');

/* Admin */
Route::get('/','HomeController@index');
Route::get('/home','HomeController@index');
Route::get('categories-list','HomeController@ShowCategoriesList');
Route::get('edit-cat','HomeController@ShowEeditCat');
Route::get('add-cat','HomeController@ShowAddCat');
Route::get('products-list','HomeController@ShowProductsList');
Route::get('edit-product','HomeController@ShowEeditProducts');
Route::get('add-product','HomeController@ShowAddProduct');

Route::post('add-new-cat','categoriesController@postCat');
Route::post('edit-cat','categoriesController@editCat');
Route::post('add-new-product','productsController@postProduct');
Route::post('edit-product','productsController@editProduct');

Route::get('deleteCat/{id}','categoriesController@deleteCat');
Route::get('deleteProduct/{id}','productsController@deleteProduct');
/* End Admin */


