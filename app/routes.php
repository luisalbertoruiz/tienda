<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

App::missing(function($exeption){
return Response::view('error.error404');
});
App::after(function($request, $response)
{
$response->headers->set('Cache-Control','nocache, no-store, max-age=0, must-revalidate');
$response->headers->set('Pragma','no-cache');
$response->headers->set('Expires','Fri, 01 Jan 1990 00:00:00 GMT');
});
// Usuario
Route::get ('/', 'UsersController@login');
Route::post('/loged', 'UsersController@loged');
Route::get ('/logout', 'UsersController@logout');
//Rol Administrador
Route::group(array('before' => 'Sentry|inGroup:admin'), function(){
// Usuarios
Route::get ('/usuarios','UsersController@index');
Route::get ('/usuarios/nuevo','UsersController@create');
Route::post('/usuarios/guardar','UsersController@store');
Route::get ('/usuarios/mostrar/{id}','UsersController@show');
Route::get ('/usuarios/editar/{id}','UsersController@edit');
Route::post('/usuarios/actualizar/{id}','UsersController@update');
Route::get ('/usuarios/eliminar/{id}','UsersController@destroy');
// Productos
Route::get ('/productos/eliminar/{id}','ProductosController@destroy');
// Categorias
Route::get ('/categorias/eliminar/{id}','CategoriasController@destroy');
// Compras
Route::get ('/compras/eliminar/{id}','ComprasController@destroy');
});
// Rol Users
Route::group(array('before' => 'Sentry|inGroup:users'), function(){
Route::get ('/home', 'HomeController@home');
// Categorias
Route::get ('/categorias','CategoriasController@index');
Route::get ('/categorias/nuevo','CategoriasController@create');
Route::post('/categorias/guardar','CategoriasController@store');
Route::get ('/categorias/mostrar/{id}','CategoriasController@show');
Route::get ('/categorias/editar/{id}','CategoriasController@edit');
Route::post('/categorias/actualizar/{id}','CategoriasController@update');
// Productos
Route::get ('/productos','ProductosController@index');
Route::get ('/productos/nuevo','ProductosController@create');
Route::post('/productos/guardar','ProductosController@store');
Route::get ('/productos/mostrar/{id}','ProductosController@show');
Route::get ('/productos/editar/{id}','ProductosController@edit');
Route::post('/productos/actualizar/{id}','ProductosController@update');
// Compras
Route::get ('/compras','ComprasController@index');
Route::get ('/compras/nuevo','ComprasController@create');
Route::post('/compras/guardar','ComprasController@store');
Route::get ('/compras/mostrar/{id}','ComprasController@show');
Route::get ('/compras/editar/{id}','ComprasController@edit');
Route::post('/compras/actualizar/{id}','ComprasController@update');
// Clientes
Route::get ('/clientes','ClientesController@index');
Route::get ('/clientes/nuevo','ClientesController@create');
Route::post('/clientes/guardar','ClientesController@store');
Route::get ('/clientes/mostrar/{id}','ClientesController@show');
Route::get ('/clientes/editar/{id}','ClientesController@edit');
Route::post('/clientes/actualizar/{id}','ClientesController@update');
Route::get ('/clientes/eliminar/{id}','ClientesController@destroy');
// Proveedores
Route::get ('/proveedores','ProveedoresController@index');
Route::get ('/proveedores/nuevo','ProveedoresController@create');
Route::post('/proveedores/guardar','ProveedoresController@store');
Route::get ('/proveedores/mostrar/{id}','ProveedoresController@show');
Route::get ('/proveedores/editar/{id}','ProveedoresController@edit');
Route::post('/proveedores/actualizar/{id}','ProveedoresController@update');
Route::get ('/proveedores/eliminar/{id}','ProveedoresController@destroy');
// Ventas
Route::get ('/ventas','VentasController@index');
Route::get ('/ventas/nuevo','VentasController@create');
Route::post('/ventas/guardar','VentasController@store');
Route::get ('/ventas/mostrar/{id}','VentasController@show');
Route::get ('/ventas/editar/{id}','VentasController@edit');
Route::post('/ventas/actualizar/{id}','VentasController@update');
Route::get ('/ventas/eliminar/{id}','VentasController@destroy');
// Recargas
Route::get ('/recargas','RecargasController@index');
Route::get ('/recargas/nuevo','RecargasController@create');
Route::post('/recargas/guardar','RecargasController@store');
Route::get ('/recargas/mostrar/{id}','RecargasController@show');
Route::get ('/recargas/editar/{id}','RecargasController@edit');
Route::post('/recargas/actualizar/{id}','RecargasController@update');
Route::get ('/recargas/eliminar/{id}','RecargasController@destroy');
});

/*Route::get('sentry', function()
{
	$groupA = Sentry::createGroup([
		'name'        => 'administrador',
		'permissions' =>[
		'admin'       => 1,
		'users'       => 1,
		],
		]);
	$groupU = Sentry::createGroup([
		'name'        => 'usuarios',
		'permissions' =>[
		'admin'       => 0,
		'users'       => 1,
		],
		]);
	$admin = Sentry::createUser([
		'email'      => 'admin@sga.com',
		'username'   => 'admin',
		'password'   => 'admin',
		'first_name' => 'Administrador',
		'last_name'  => 'General',
		'activated'  => 1,
		]);
	$user = Sentry::createUser([
		'email'      => 'user@sga.com',
		'username'   => 'user',
		'password'   => 'user',
		'first_name' => 'Usuario',
		'last_name'  => 'Estandar',
		'activated'  => 1,
		]);
	$admin->addGroup($groupA);
	$user->addGroup($groupU);
	
	return 'todo se genero correctamente';
});*/