<?php

/*
* Home page
*/

Route::get('/', 'PagesController@home');

/*
* Proveedores
*/

Route::get('/proveedores', 'ProveedoresController@index');

Route::get('/proveedores/nuevo', 'ProveedoresController@create');

Route::get('/proveedores/eliminar', 'ProveedoresController@eliminar');

/*
*  Revisar antes de guardar
*/

Route::get('/proveedores/create/confirmar', 'ProveedoresController@confirmar');

/*
* Autentificacion
*/

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
