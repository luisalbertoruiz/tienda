@extends('layouts.admin')
@section('title')
Categoria
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
			<li class="activo">Categorias</li>
		</ul>
	</div>
</div>
<hr>
<a href="{{ URL::to('/categorias/nuevo')}}" class="btn btn-success pull-right">Nuevo<i class="entypo-plus"></i></a>
<br><br><br>
<table class="table table-bordered datatable" id="tabla">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Descripción</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
	@foreach($categorias as $categoria)
	<tr>
		<td>{{ $categoria->id }}</td>
		<td>{{ $categoria->nombre }}</td>
		<td>{{ $categoria->descripcion }}</td>
		<td>
		<a href="{{URL::to('/categorias/mostrar/'.$categoria->id)}}" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="mostrar"><i class="glyphicon glyphicon-eye-open"></i></a>
		<a href="{{URL::to('/categorias/editar/'.$categoria->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="editar"><i class="glyphicon glyphicon-pencil"></i></a>
		<a href="javascript:;" onclick="eliminaRegistro('{{URL::to('/categorias/eliminar/'.$categoria->id)}}');" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="eliminar"><i class="glyphicon glyphicon-trash"></i></a>
		</td>
	</tr>
	@endforeach
	</tbody>
</table>
<div id="dialog" title="¿Deseas eliminar el registro?">
<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Este registro sera borrado permanentemente.¿Estas seguro?</p>
</div>
</div>
@stop
@section('css')
{{ HTML::style('css/dataTables.css') }}
{{ HTML::style('css/dataTables.bootstrap.css') }}
{{ HTML::style('css/jquery-ui.css') }}
@stop
@stop
@section('js')
{{ HTML::script('js/dataTables.js') }}
{{ HTML::script('js/dataTables.bootstrap.js') }}
{{ HTML::script('js/jquery-ui.js') }}
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