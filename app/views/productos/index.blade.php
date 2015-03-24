@extends('layouts.admin')
@section('title')
Productos
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
			<li class="activo">Productos</li>
		</ul>
	</div>
</div>
<hr>
<a href="{{ URL::to('/productos/nuevo')}}" class="btn btn-success pull-right">Nuevo<i class="entypo-plus"></i></a>
<br><br><br>
<table class="table table-bordered datatable" id="tabla">
	<thead>
		<tr>
			<th>codigo</th>
			<th>Nombre</th>
			<th>Marca</th>
			<th>Modelo</th>
			<th>Categoria</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
	@foreach($productos as $producto)
	<tr>
		<td>{{ $producto->codigo }}</td>
		<td>{{ $producto->nombre }}</td>
		<td>{{ $producto->marca }}</td>
		<td>{{ $producto->modelo }}</td>
		<td>{{ $producto->categoria_id }}</td>
		<td>
		<a href="{{URL::to('/productos/mostrar/'.$producto->id)}}" class="btn btn-success btn-xs tooltip-primary" data-toggle="tooltip" data-placement="top" data-original-title="mostrar"><i class="glyphicon glyphicon-eye-open"></i></a>
		<a href="{{URL::to('/productos/editar/'.$producto->id)}}" class="btn btn-orange btn-xs tooltip-primary" data-toggle="tooltip" data-placement="top" data-original-title="editar"><i class="fa fa-edit"></i></a>
		<a href="javascript:;" onclick="eliminaRegistro('{{URL::to('/productos/eliminar/'.$producto->id)}}');" class="btn btn-danger btn-xs tooltip-primary" data-toggle="tooltip" data-placement="top" data-original-title="eliminar"><i class="glyphicon glyphicon-trash"></i></a>
		</td>
	</tr>
	@endforeach
	</tbody>
</table>
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