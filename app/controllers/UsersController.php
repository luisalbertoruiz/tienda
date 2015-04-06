<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		$usuarios = User::all();
		return View::make('users.index')
		->with('usuarios',$usuarios);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
		if(Input::get('pass') == Input::get('pass2'))
		{
			$entradas = array(
				'username' => Str::title(Str::lower(Input::get('user')))
			);
			$reglas = array(
				'username' => 'required|unique:users'
			);
			$validador = Validator::make($entradas, $reglas);
			if($validador->fails())
			{
				return Redirect::to('/usuarios/nuevo')
				->with('alert-danger', 'Ya se encuentra registrado un usuario con ese nombre de usuario.');
			}
			else
			{
				$destino  = public_path().'/src/fotos/';
				if(Input::get('tipo') == "admin")
				{
					$foto  = 'admin.png';
					$grupo = Sentry::findGroupByName("administrador");
				}
				if(Input::get('descripcion') == "user")
				{
					$foto  = 'female_user.png';
					$grupo = Sentry::findGroupByName("usuarios");
				}
				if (Input::file('foto')) {
					$extension = Input::file('foto')->getClientOriginalExtension();
					$foto      = Input::get('user').'.'.$extension;
					$file      = Input::file('foto');
					$file->move($destino,$foto);
				}

				$user = Sentry::createUser([
				'email'      => Input::get('email'),
				'username'   => Input::get('user'),
				'password'   => Input::get('pass'),
				'first_name' => Str::title(Str::lower(Input::get('nombre'))),
				'last_name'  => Str::title(Str::lower(Input::get('apellido'))),
				'picture'    => $foto,
				'activated'  => 1,
				]);
				$user->addGroup($grupo);
				return Redirect::to('/usuarios')
				->with('alert-success', 'Se ha agregado el usuario.');
			}
		}
		else
		{
			return Redirect::to('/usuarios/nuevo')
			->with('alert-danger', 'Las contraseñas no coinciden.');
		}
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	/**
	 * Muestra formulario de logueo.
	 * GET /users
	 *
	 * @return Response
	 */
	public function login()
	{
		return View::make('users.login');
	}

	/**
	 * Valida los datos de logueo.
	 * POST /users
	 *
	 * @return Response
	 */
	public function loged()
	{
		try
		{
		    // Credenciales de logueo
		    $credentials = array(
				'username' => Input::get('username'),
				'password' => Input::get('password')
		    );

		    // Autentificar el usuario
		    $user = Sentry::authenticate($credentials, false);
		    return Redirect::to('/home')->with('alert-success','Bienvenido al area de Administración.');
		}
		catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
		{
			return Redirect::to('/')->with('alert-warning','Nombre de Usuario requerido.');
		}
		catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
		{
			return Redirect::to('/')->with('alert-warning','Contraseña requerida.');
		}
		catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
		{
			return Redirect::to('/')->with('alert-warning','Contraseña incorrecta, intentalo de nuevo.');
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
			return Redirect::to('/')->with('alert-warning','El Usuario no fue encontrado.');
		}
		catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
		{
			return Redirect::to('/')->with('alert-warning','El Usuario no esta activo.');
		}
	}

	/**
	 * Termina la sesion actual.
	 * GET /users
	 *
	 * @return Response
	 */
	public function logout()
	{
		Sentry::logout();
		return Redirect::to('/')->with('alert-success','Hasta luego.');
	}

}