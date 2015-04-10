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
		<a href="{{ URL::to('/categorias')}}">Productos</a>
	</li>
	<li class="active">
		<strong>Nuevo</strong>
	</li>
</ol>
<hr>
<div class="row">
	<div class="col-xs-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
		<div class="panel-title">Registra un nuevo Producto</div>
		</div>
		<div class="panel-body">
		   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-3">
		   		<form action="{{ URL::to('/productos/guardar') }}" method="POST" role="form">
		   			<div class="form-group">
		   				<label for="codigo">Codigo</label>
		   				<input name="codigo" type="text" class="form-control" id="codigo">
		   			</div>
		   			<div class="form-group">
		   				<label for="nombre">Nombre</label>
		   				<input name="nombre" type="text" class="form-control" id="nombre" required>
		   			</div>
		   			<div class="form-group">
		   				<label for="marca">Marca</label>
		   				<input name="marca" type="text" class="form-control" id="marca">
		   			</div>
		   			<div class="form-group">
		   				<label for="modelo">Modelo</label>
		   				<input name="modelo" type="text" class="form-control" id="modelo">
		   			</div>
		   			<div class="form-group">
		   				<label for="categoria">Categoría</label>
		   				<select name="categoria" id="categoria" class="form-control" required>
		   					<option value=""></option>
		   					@foreach ($categorias as $categoria)
		   					<option value="{{ $categoria->id }}">{{ $categoria->nombre}}</option>
		   					@endforeach
		   				</select>
		   			</div>
		   			<div class="form-group">
		   				<input name="costo" type="hidden" class="form-control" id="costo" value="0">
		   			</div>
		   			<div class="form-group">
		   				<label for="precio">Precio</label>
		   				<input name="precio" type="text" class="form-control" id="precioo">
		   			</div>
		   			<div class="form-group">
		   				<input name="existencia" type="hidden" class="form-control" id="existencia" value="0">
		   			</div>
		   			<div class="form-group">
		   				<label for="descripcion">Descripción</label>
		   				<textarea name="descripcion" class="form-control" id="descripcion" cols="30" rows="5" style="resize: none;"></textarea>
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
@stop
@stop
@section('js')
@stop
@section('script')
<script>
$(document).ready(function() {

});
</script>
@stop