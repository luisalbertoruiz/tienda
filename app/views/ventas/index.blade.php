@extends('layouts.admin')
@section('title')
Punto de venta
@stop
@section('body')
class="page-body"
@stop
@section('content')
<div class="page-container sidebar-collapsed">	
@include('layouts.sidebarMenu')
<div class="main-content">
@include('layouts.profilebar')
<hr>
<ol class="breadcrumb bc-3">
	<li>
		<a href="{{ URL::to('/home')}}"><i class="entypo-home"></i>Home</a>
	</li>
	<li>
		<a href="{{ URL::to('/home')}}">Almacen</a>
	</li>
	<li>
		<a href="{{ URL::to('/productos')}}">Compras</a>
	</li>
	<li class="active">
		<strong>Nueva</strong>
	</li>
</ol>
<hr>
<div class="row">
	<div class="col-xs-8">
		<div class="panel panel-primary">
			<div class="panel-body">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<div class="form-group">
		   				<label for="producto">Producto</label>
		   				<select name="producto" id="producto" class="form-control" data-placeholder="Selecciona un producto...">
		   					<option value=""></option>
		   					@foreach ($productos as $producto)
		   					<option value="{{ $producto->id }}">{{ $producto->nombre.' '.$producto->marca.' '.$producto->modelo.' '.$producto->codigo}}</option>
		   					@endforeach
		   				</select>
		   			</div>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<div class="form-group">
						<label for="cantidad">Cantidad</label>
						<div class="input-group">
							<input name="cantidad" type="text" class="form-control" id="cantidad">
							<span class="input-group-btn">
								<button class="btn btn-success" id="agregar">+</button>
							</span>
						</div>
		   			</div>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<div class="form-group">
						<label for="cantidad">Pago</label>
						<div class="input-group">
							<input name="cantidad" type="text" class="form-control" id="cantidad">
							<span class="input-group-btn">
								<button class="btn btn-blue">$</button>
							</span>
						</div>
		   			</div>
				</div>	
			</div>
			<div class="panel-footer">
				<table class="table table-striped table-hover" id="detalle">
					<thead>
						<tr>
							<th>Codigo</th>
							<th>Cantidad</th>
							<th>Descripcion</th>
							<th>Precio</th>
							<th>Subtotal</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="col-xs-4">
		<div class="panel panel-primary">
			<div class="panel-body">
			   	<div class="form-group">
	   				<label for="cantidad">Sub Total</label>
	   				<input name="cantidad" type="text" class="form-control" id="cantidad" disabled>
	   			</div>
	   			<div class="form-group">
	   				<label for="cantidad">Total</label>
	   				<input name="cantidad" type="text" class="form-control" id="cantidad" disabled>
	   			</div>
	   			<div class="form-group">
	   				<label for="cantidad">Pago</label>
	   				<input name="cantidad" type="text" class="form-control" id="cantidad" disabled>
	   			</div>
	   			<div class="form-group">
	   				<label for="cantidad">Cambio</label>
	   				<input name="cantidad" type="text" class="form-control" id="cantidad" disabled>
	   			</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
@stop
@section('css')
{{ HTML::style('css/chosen.css') }}
@stop
@stop
@section('js')
{{ HTML::script('js/chosen.js') }}
@stop
@section('script')
<script>
$(document).ready(function() {
	$('#producto').chosen({
		no_results_text: "Oops, Nada encontrado!"
	});
	$('#agregar').click(function(event) {
		$('#detalle').find('tbody').append('<tr><td>JHGJF</td><td>8</td><td></td><td></td><td></td><td><button class="btn btn-danger btn-xs quitar">-</button></td></tr>');
	});
	$('#detalle').on('click', '.quitar', function(event) {
		$(this).closest('tr').remove();
	});
});
</script>
@stop