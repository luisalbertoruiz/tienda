<?php

class CategoriasController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /categorias
	 *
	 * @return Response
	 */
	public function index()
	{
		$categorias = Categoria::all();
		return View::make('categorias.index')
		->with('categorias',$categorias);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /categorias/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('categorias.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /categorias
	 *
	 * @return Response
	 */
	public function store()
	{
			$entradas = array(
				'nombre' => Str::title(Str::lower(Input::get('nombre')))
			);
			$reglas = array(
				'nombre' => 'required|unique:categorias'
			);
			$validador = Validator::make(Input::all(), $reglas);
			if($validador->fails())
			{
				return Redirect::to('/categorias')
				->with('alert-danger', 'Ya se encuentra registrado una categoría con ese nombre.');
			}
			else
			{
				$categoria = new Categoria();
				$categoria->nombre = Str::title(Str::lower(Input::get('nombre')));
				$categoria->descripcion = Input::get('descripcion');
				$categoria->save();
				return Redirect::to('/categorias')
				->with('alert-success', 'Se ha agregado la categoría.');
			}
	}

	/**
	 * Display the specified resource.
	 * GET /categorias/{id}
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
	 * GET /categorias/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$categoria = Categoria::find($id);
		if (is_null ($categoria))
		{
			App::abort(404);
		}
		else
		{
			return View::make('categorias.edit')
			->with('categoria',$categoria);
		}
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /categorias/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$categoria = Categoria::find($id);
		if (is_null ($categoria))
		{
			App::abort(404);
		}
		else
		{
			$categoria->nombre = Str::title(Str::lower(Input::get('nombre')));
			$categoria->descripcion = Input::get('descripcion');
			$categoria->save();
			return Redirect::to('/categorias/')
			->with('alert-success', 'Se ha editado la categoría.');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /categorias/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$categoria = Categoria::find($id);
		if (is_null ($categoria))
		{
			App::abort(404);
		}
		else
		{
			$categoria->delete();
			return Redirect::to('/categorias')
			->with('alert-danger', 'Se ha eliminado la categoría.');
		}
	}

}