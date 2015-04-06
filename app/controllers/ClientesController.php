<?php

class ClientesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /clientes
	 *
	 * @return Response
	 */
	public function index()
	{
		$clientes = Cliente::all();
		return view::make('clientes.index')
		->with('clientes',$clientes);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /clientes/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return view::make('clientes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /clientes
	 *
	 * @return Response
	 */
	public function store()
	{
		$reglas = array(
				'tel1' => 'required|unique:clientes',
				'tel2' => 'unique:clientes',
				'tel3' => 'unique:clientes'
		);
		$validador = Validator::make(Input::all(), $reglas);
		if($validador->fails())
		{
			return Redirect::to('/clientes')
			->with('alert-danger', 'Ya se encuentra registrado un cliente con ese número.');
		}
		else
		{
			$cliente = new Cliente();
			$cliente->nombre      = Str::title(Str::lower(Input::get('nombre')));
			$cliente->sobrenombre = Str::title(Str::lower(Input::get('alias')));
			$cliente->tel1        = Input::get('tel1');
			$cliente->tel1_tipo   = Input::get('tel1_tipo');
			$cliente->tel2        = Input::get('tel2');
			$cliente->tel2_tipo   = Input::get('tel2_tipo');
			$cliente->tel3        = Input::get('tel3');
			$cliente->tel3_tipo   = Input::get('tel3_tipo');
			$cliente->save();
			return Redirect::to('/clientes')
			->with('alert-success', 'Se ha agregado el cliente.');
		}
	}

	/**
	 * Display the specified resource.
	 * GET /clientes/{id}
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
	 * GET /clientes/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cliente = Cliente::find($id);
		if (is_null ($cliente))
		{
			App::abort(404);
		}
		else
		{
			return View::make('clientes.edit')
			->with('cliente',$cliente);
		}
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /clientes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$cliente = Cliente::find($id);
		if (is_null ($cliente))
		{
			App::abort(404);
		}
		else
		{
			$cliente->nombre = Str::title(Str::lower(Input::get('nombre')));
			$cliente->sobrenombre = Str::title(Str::lower(Input::get('alias')));
			$cliente->tel1 = Input::get('tel1');
			$cliente->tel1_tipo = Input::get('tel1_tipo');
			$cliente->tel2 = Input::get('tel2');
			$cliente->tel2_tipo = Input::get('tel2_tipo');
			$cliente->tel3 = Input::get('tel3');
			$cliente->tel3_tipo = Input::get('tel3_tipo');
			$cliente->save();
			return Redirect::to('/clientes')
			->with('alert-success', 'Se ha editado el cliente.');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /clientes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$cliente = Cliente::find($id);
		if (is_null ($cliente))
		{
			App::abort(404);
		}
		else
		{
			$cliente->delete();
			return Redirect::to('/clientes')
			->with('alert-danger', 'Se ha eliminado el cliente.');
		}
	}

}