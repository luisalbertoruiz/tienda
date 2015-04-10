@extends('layouts.admin')
@section('title')
Categorias
@stop
@section('body')
class="page-body"
@stop
@section('content')
<div class="page-container">	
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
	<div class="col-xs-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
		<div class="panel-title">Registra una nueva Compra</div>
		</div>
		<div class="panel-body">
		   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-3">
		   		<form action="{{ URL::to('/compras/guardar') }}" method="POST" role="form">
		   			<div class="form-group">
		   				<label for="producto">Producto</label>
		   				<select name="producto" id="producto" class="form-control" data-placeholder="Selecciona un producto...">
		   					<option value=""></option>
		   					@foreach ($productos as $producto)
		   					<option value="{{ $producto->id }}">{{ $producto->nombre.' '.$producto->marca.' '.$producto->modelo.' '.$producto->codigo}}</option>
		   					@endforeach
		   				</select>
		   			</div>
		   			<div class="form-group">
		   				<label for="cantidad">Cantidad</label>
		   				<input name="cantidad" type="text" class="form-control" id="cantidad">
		   			</div>
		   			<div class="form-group">
		   				<label for="costo">Costo Unitario</label>
		   				<input name="costo" type="text" class="form-control" id="costo">
		   			</div>
		   			<a href="{{ URL::previous() }}" class="btn btn-orange">Regresar</a>
		   			<button type="submit" class="btn btn-success pull-right">Guardar</button>
		   		</form>
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
});
</script>
@stop