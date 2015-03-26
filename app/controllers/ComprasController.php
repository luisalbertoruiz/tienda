<?php

class ComprasController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /compras
	 *
	 * @return Response
	 */
	public function index()
	{
		$compras = Compra::all();
		return View::make('compras.index')
		->with('compras',$compras)
		;
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /compras/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$productos = Producto::all();
		return View::make('compras.create')
		->with('productos',$productos);

	}

	/**
	 * Store a newly created resource in storage.
	 * POST /compras
	 *
	 * @return Response
	 */
	public function store()
	{
		$compra              = new Compra();
		$compra->costo       = Input::get('costo');
		$compra->cantidad    = Input::get('cantidad');
		$compra->producto_id = Input::get('producto');
		$compra->save();
		return Redirect::to('/compras')
		->with('alert-success', 'Se ha agregado la compra.');
	}

	/**
	 * Display the specified resource.
	 * GET /compras/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$compra = Compra::find($id);
		if (is_null ($compra))
		{
			App::abort(404);
		}
		else
		{
			return View::make('compras.show')
			->with('compra',$compra);
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /compras/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$compra = Compra::find($id);
		if (is_null ($compra))
		{
			App::abort(404);
		}
		else
		{
			$categorias = Categoria::all();
			return View::make('compras.edit')
			->with('compra',$compra)
			->with('categorias',$categorias);
		}
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /compras/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$compra = Compra::find($id);
		if (is_null ($compra))
		{
			App::abort(404);
		}
		else
		{
			$compra->codigo       = Str::upper(Input::get('codigo'));
			$compra->nombre       = Str::title(Str::lower(Input::get('nombre')));
			$compra->marca        = Str::title(Str::lower(Input::get('marca')));
			$compra->modelo       = Str::title(Str::lower(Input::get('modelo')));
			$compra->costo        = Input::get('costo');
			$compra->precio       = Input::get('precio');
			$compra->existencia   = Input::get('existencia');
			$compra->descripcion  = Input::get('descripcion');
			$compra->categoria_id = Input::get('categoria');
			$compra->save();
			return Redirect::to('/compras')
			->with('alert-success', 'Se ha editado el compra.');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /compras/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$compra = Compra::find($id);
		if (is_null ($compra))
		{
			App::abort(404);
		}
		else
		{
			$compra->delete();
			return Redirect::to('/compras')
			->with('alert-danger', 'Se ha eliminado el compra.');
		}
	}

}