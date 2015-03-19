@extends('layouts.admin')
@section('title')
Tienda
@stop
@section('content')
@include('layouts.sidebarMenu')
<div class="pagina-contenedor">
@include('layouts.profilebar')
<div class="row">
	<div class="pan">
		<ul>
			<li><a href=""><i class="entypo-home"></i>Home</a></li>
			<li><a href="">Almacen</a></li>
			<li><a href="">Categorias</a></li>
			<li class="activo">Nuevo</li>
		</ul>
	</div>
</div>
<hr>
<div class="col-xs-12">
	<div class="panel panel-default">
		<div class="panel-heading">
		Registra una nueva Categoría
		</div>
		<div class="panel-body">
		   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-3">
		   		<form action="" method="POST" role="form">
		   			<div class="form-group">
		   				<label for="nombre">Nombre</label>
		   				<input name="nombre" type="text" class="form-control" id="nombre">
		   			</div>
		   			<div class="form-group">
		   				<label for="descripcion">Descripcion</label>
		   				<textarea name="descripcion" class="form-control" id="descripcion" cols="30" rows="10" style="resize: none;"></textarea>
		   			</div>
		   			<a href="" class="btn btn-warning">Regresar</a>
		   			<button type="submit" class="btn btn-primary pull-right">Guardar</button>
		   		</form>
		   </div>
		</div>
	</div>
</div>
</div>
@stop
@section('css')
{{ HTML::style('css/dataTables.css') }}
{{ HTML::style('css/dataTables.bootstrap.css') }}
@stop
@stop
@section('js')
{{ HTML::script('js/dataTables.js') }}
{{ HTML::script('js/dataTables.bootstrap.js') }}
@stop
@section('script')
<script>
$(document).ready(function() {
	$('#tabla').DataTable();
});
</script>
@stop