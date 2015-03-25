@extends('layouts.admin')
@section('title')
Productos
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
			<li class="active">
				<strong>productos</strong>
			</li>
		</ol>
		<hr>
		<a href="{{ URL::to('/productos/nuevo')}}" class="btn btn-success pull-right">Nuevo<i class="entypo-plus"></i></a>
		<br><br><br>
		<table class="table table-bordered datatable" id="tabla">
			<thead>
				<tr>
					<th>Codigo</th>
					<th>Nombre</th>
					<th>Marca</th>
					<th>Modelo</th>
					<th>Existencia</th>
					<th>Precio</th>
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
				<td>{{ $producto->existencia }}</td>
				<td>{{ $producto->precio }}</td>
				<td>{{ $producto->categoria->nombre }}</td>
				<td>
				<a href="{{URL::to('/productos/mostrar/'.$producto->id)}}" class="btn btn-success btn-xs tooltip-primary" data-toggle="tooltip" data-placement="top" data-original-title="mostrar"><i class="glyphicon glyphicon-eye-open"></i></a>
				<a href="{{URL::to('/productos/editar/'.$producto->id)}}" class="btn btn-orange btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="editar"><i class="glyphicon glyphicon-pencil"></i></a>
				<a href="javascript:;" onclick="eliminaRegistro('{{URL::to('/productos/eliminar/'.$producto->id)}}');" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="eliminar"><i class="glyphicon glyphicon-trash"></i></a>
				</td>
			</tr>
			@endforeach
			</tbody>
		</table>
		<div id="dialog" title="¿Deseas eliminar el registro?">
		<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Este registro sera borrado permanentemente.¿Estas seguro?</p>
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
	$( "#dialog" ).dialog({
		resizable: false,
		height:160,
		modal: true,
		autoOpen: false,
		show: {
		effect: "bounce",
		duration: 500
		},
		hide: {
		effect: "fade",
		duration: 200
		}
	});
});
function eliminaRegistro (url) {
	$( "#dialog" ).dialog( "open" );
	$( "#dialog" ).dialog({
		buttons: {
			"No": function() {
				$( this ).dialog( "close" );

			},
			"Si": function() {
				location.href = url;
				$( this ).dialog( "close" );
			}
		}
	});
}
</script>
@stop