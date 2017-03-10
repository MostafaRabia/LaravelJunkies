<?php
Route::post('user/register','Users@Register');
Route::post('user/login','Users@Login');
Route::post('cart/{cart}/update','CartController@update');
Route::post('add-new-cat','categoriesController@postCat');
Route::post('edit-cat','categoriesController@editCat');
Route::post('add-new-product','productsController@postProduct');
Route::post('edit_product','productsController@editProduct');
Route::post('edit/{id}','HomeController@edit_product_post')->where('id','[0-9]+');
Route::post('edit/user/{id}','HomeController@edituser_post')->where('id','[0-9]+');
Route::post('edit/{id}','Users@editUserPost')->where('id','[0-9]+');


Auth::routes();
Route::get('/cart','CartController@index');
Route::get('/cart/{cart}/add','CartController@create');
Route::get('/cart/{cart}/edit','CartController@edit');
Route::get('/cart/{cart}/delete','CartController@destroy');
Route::get('/','HomeController@index');
Route::get('/home','HomeController@index');

/* Admin */
Route::group(['middleware'=>'admin'],function(){
	Route::get('categories-list','HomeController@ShowCategoriesList');
	Route::get('edit-cat','HomeController@ShowEeditCat');
	Route::get('add-cat','HomeController@ShowAddCat');
	Route::get('edit-product','HomeController@ShowEeditProducts');
	Route::get('add-product','HomeController@ShowAddProduct');
	Route::get('deleteCat/{id}','categoriesController@deleteCat')->where('id','[0-9]+');
	Route::get('deleteProduct/{id}','productsController@deleteProduct');
	Route::get('edit/{id}','HomeController@edit_product')->where('id','[0-9]+');
	Route::get('profiles-list','HomeController@profiles_list');
	Route::get('delete/user/{id}','HomeController@deleteuser')->where('id','[0-9]+');
	Route::get('edit/user/{id}','HomeController@edituser')->where('id','[0-9]+');
});
/* End Admin */
/* Start Product */
Route::get('product/{id}','Product@showProduct')->where('id','[0-9]+');
/* End Product */
Route::group(['middleware'=>'guest'],function(){
	Route::get('user/register','Users@showRegister');
	Route::get('user/login','Users@showLogin');
	Route::get('facebook/redirect','SocialAuthController@redirectFacbook');
	Route::get('facebook/callback','SocialAuthController@callbackFacbook');
});
//Route::get('google/login',);
Route::group(['middleware'=>'user'],function(){
	Route::get('logout',function(){
		auth()->logout();
		return redirect()->back();
	});
	Route::get('profile/{id}','Users@showProfile')->where('id','[0-9]+');
	Route::get('edit/{id}','Users@showEdit')->where('id','[0-9]+');
});