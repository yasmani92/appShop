<?php

Route::get('/', 'TestController@welcome');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth', 'admin'])->prefix('admin')->group(function (){
	//CRUD PRODUCTS
	Route::get('/products', 'ListController@index'); //listar
	Route::get('/products/create', 'ListController@create'); //crear
	Route::post('/products', 'ListController@store'); //guardar
	Route::get('/products/{id}/edit', 'ListController@edit'); //formu edicion
	Route::post('/products/{id}/edit', 'ListController@update'); //actualizar
	Route::post('/products/{id}/delete', 'ListController@delete'); //eliminar
	// Route::get('/products/{id}', 'ListController@show'); //mostrar

	Route::get('/products/{id}/images', 'ImageController@index'); //listado
	Route::post('/products/{id}/images', 'ImageController@store'); //registrar
	Route::delete('/products/{id}/images', 'ImageController@destroy'); //eliminar
	Route::get('/products/{id}/images/select/{image}', 'ImageController@select'); //destacar imagen
});

