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
});
//Rol Usuarios
Route::group(array('before' => 'Sentry|inGroup:users'), function(){
Route::get ('/home', 'HomeController@home');
// Categorias
Route::get ('/categorias','CategoriasController@index');
Route::get ('/categorias/nuevo','CategoriasController@create');
Route::post('/categorias/guardar','CategoriasController@store');
Route::get ('/categorias/mostrar/{id}','CategoriasController@show');
Route::get ('/categorias/editar/{id}','CategoriasController@edit');
Route::post('/categorias/actualizar/{id}','CategoriasController@update');
Route::get ('/categorias/eliminar/{id}','CategoriasController@destroy');	
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