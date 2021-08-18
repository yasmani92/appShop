<?php

Route::get('/', 'TestController@welcome');

Auth::routes();

/*Route::get('/search', 'SearchController@show');
Route::get('/products/json', 'SearchController@data'); */

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products/{id}', 'ProductController@show'); //mostrar
// Route::get('/categories/{category}', 'CategoryController@show');

Route::post('/cart', 'CartDetailController@store');
Route::delete('/cart', 'CartDetailController@destroy');

// Route::post('/cart/{id}', 'CartDetailController@destroy');

/* Route::post('/order', 'CartController@update');*/

Route::middleware(['auth', 'admin'])->prefix('admin')->namespace('Admin')
->group(function (){
	Route::get('/products', 'ListController@index'); //listar
	Route::get('/products/create', 'ListController@create'); //crear
	Route::post('/products', 'ListController@store'); //guardar
	Route::get('/products/{id}/edit', 'ListController@edit'); //formu edicion
	Route::post('/products/{id}/edit', 'ListController@update'); //actualizar
	Route::post('/products/{id}/delete', 'ListController@delete'); //eliminar

	Route::get('/products/{id}/images', 'ImageController@index'); //listado
	Route::post('/products/{id}/images', 'ImageController@store'); //registrar
	Route::delete('/products/{id}/images', 'ImageController@destroy'); //eliminar
	Route::get('/products/{id}/images/select/{image}', 'ImageController@select'); //destacar imagen

/*	Route::get('/categories', 'CategoryController@index'); // listado
	Route::get('/categories/create', 'CategoryController@create'); // formulario
	Route::post('/categories', 'CategoryController@store'); // registrar
	Route::get('/categories/{category}/edit', 'CategoryController@edit'); // formulario edición
	Route::post('/categories/{category}/edit', 'CategoryController@update'); // actualizar
	Route::delete('/categories/{category}', 'CategoryController@destroy'); // form eliminar */
});

