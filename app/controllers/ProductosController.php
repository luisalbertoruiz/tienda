<?php

class ProductosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /productos
	 *
	 * @return Response
	 */
	public function index()
	{
		$productos = Producto::all();
		return View::make('productos.index')
		->with('productos',$productos);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /productos/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$categorias = Categoria::all();
		return View::make('productos.create')
		->with('categorias',$categorias);

	}

	/**
	 * Store a newly created resource in storage.
	 * POST /productos
	 *
	 * @return Response
	 */
	public function store()
	{
		$reglas = array(
			'codigo' => 'required|unique:productos'
		);
		$validador = Validator::make(Input::all(), $reglas);
		if($validador->fails())
		{
			return Redirect::to('/productos')
			->with('alert-danger', 'Ya se encuentra registrado el producto con ese codigo.');
		}
		else
		{
			$producto               = new Producto();
			$producto->codigo       = Str::upper(Input::get('codigo'));
			$producto->nombre       = Str::title(Str::lower(Input::get('nombre')));
			$producto->marca        = Str::title(Str::lower(Input::get('marca')));
			$producto->modelo       = Str::title(Str::lower(Input::get('modelo')));
			$producto->costo        = Input::get('costo');
			$producto->precio       = Input::get('precio');
			$producto->existencia   = Input::get('existencia');
			$producto->descripcion  = Input::get('descripcion');
			$producto->categoria_id = Input::get('categoria');
			$producto->save();
			return Redirect::to('/productos')
			->with('alert-success', 'Se ha agregado el producto.');
		}
	}

	/**
	 * Display the specified resource.
	 * GET /productos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$producto = Producto::find($id);
		if (is_null ($producto))
		{
			App::abort(404);
		}
		else
		{
			return View::make('productos.show')
			->with('producto',$producto);
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /productos/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$producto = Producto::find($id);
		if (is_null ($producto))
		{
			App::abort(404);
		}
		else
		{
			$categorias = Categoria::all();
			return View::make('productos.edit')
			->with('producto',$producto)
			->with('categorias',$categorias);
		}
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /productos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$producto = Producto::find($id);
		if (is_null ($producto))
		{
			App::abort(404);
		}
		else
		{
			$producto->codigo       = Str::upper(Input::get('codigo'));
			$producto->nombre       = Str::title(Str::lower(Input::get('nombre')));
			$producto->marca        = Str::title(Str::lower(Input::get('marca')));
			$producto->modelo       = Str::title(Str::lower(Input::get('modelo')));
			$producto->costo        = Input::get('costo');
			$producto->precio       = Input::get('precio');
			$producto->existencia   = Input::get('existencia');
			$producto->descripcion  = Input::get('descripcion');
			$producto->categoria_id = Input::get('categoria');
			$producto->save();
			return Redirect::to('/productos')
			->with('alert-success', 'Se ha editado el producto.');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /productos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$producto = Producto::find($id);
		if (is_null ($producto))
		{
			App::abort(404);
		}
		else
		{
			$producto->delete();
			return Redirect::to('/productos')
			->with('alert-danger', 'Se ha eliminado el producto.');
		}
	}

}