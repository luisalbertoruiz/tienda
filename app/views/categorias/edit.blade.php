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
		<a href="{{ URL::to('/categorias')}}">Categorias</a>
	</li>
	<li class="active">
		<strong>Editar</strong>
	</li>
</ol>
<hr>
<div class="col-xs-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
		<div class="panel-title">Edita la Categoría</div>
		</div>
		<div class="panel-body">
		   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-3">
		   		<form action="{{ URL::to('/categorias/actualizar/'.$categoria->id) }}" method="POST" role="form">
		   			<div class="form-group">
		   				<label for="nombre">Nombre</label>
		   				<input name="nombre" type="text" class="form-control" id="nombre" value="{{ $categoria->nombre }}">
		   			</div>
		   			<div class="form-group">
		   				<label for="descripcion">Descripcion</label>
		   				<textarea name="descripcion" class="form-control" id="descripcion" cols="30" rows="10" style="resize: none;">{{ $categoria->descripcion }}</textarea>
		   			</div>
		   			<a href="{{ URL::previous() }}" class="btn btn-orange">Regresar</a>
		   			<button type="submit" class="btn btn-success pull-right">Cambiar</button>
		   		</form>
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