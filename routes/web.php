<?php

Route::get('/', 'TestController@welcome');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth', 'admin'])->group(function (){
	//CRUD PRODUCTS
	Route::get('/admin/products', 'ListController@index'); //listar
	Route::get('/admin/products/create', 'ListController@create'); //crear
	Route::post('/admin/products', 'ListController@store'); //guardar
	Route::get('/admin/products/{id}/edit', 'ListController@edit'); //formu edicion
	Route::post('/admin/products/{id}/edit', 'ListController@update'); //actualizar
	Route::post('/admin/products/{id}/delete', 'ListController@delete'); //eliminar
	// Route::get('/admin/products/{id}', 'ListController@show'); //mostrar

});

