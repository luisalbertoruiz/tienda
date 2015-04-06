@extends('layouts.admin')
@section('title')
Clientes
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
				<a href="{{ URL::to('/clientes')}}">Catálogos</a>
			</li>
			<li class="active">
				<strong>Clientes</strong>
			</li>
		</ol>
		<hr>
		<a href="{{ URL::to('/clientes/nuevo')}}" class="btn btn-success pull-right">Nuevo<i class="entypo-plus"></i></a>
		<br><br><br>
		<table class="table table-bordered datatable" id="tabla">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Alias</th>
					<th>Teléfono 1</th>
					<th>Teléfono 2</th>
					<th>Teléfono 3</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			@foreach($clientes as $cliente)
			<tr>
				<td>{{ $cliente->nombre }}</td>
				<td>{{ $cliente->sobrenombre }}</td>
				<td>{{ $cliente->tel1." ".$cliente->tel1_tipo }}</td>
				<td>{{ $cliente->tel2." ".$cliente->tel2_tipo }}</td>
				<td>{{ $cliente->tel3." ".$cliente->tel3_tipo }}</td>
				<td>
				<a href="{{URL::to('/clientes/editar/'.$cliente->id)}}" class="btn btn-orange btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="editar"><i class="glyphicon glyphicon-pencil"></i></a>
				<a href="javascript:;" onclick="eliminaRegistro('{{URL::to('/clientes/eliminar/'.$cliente->id)}}');" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="eliminar"><i class="glyphicon glyphicon-trash"></i></a>
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