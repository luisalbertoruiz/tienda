@extends('layouts.admin')
@section('title')
Compras
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
				<strong>Compras</strong>
			</li>
		</ol>
		<hr>
		<a href="{{ URL::to('/compras/nuevo')}}" class="btn btn-success pull-right">Nuevo<i class="entypo-plus"></i></a>
		<br><br><br>
		<table class="table table-bordered datatable" id="tabla">
			<thead>
				<tr>
					<th>Id</th>
					<th>Codigo</th>
					<th>Producto</th>
					<th>Cantidad</th>
					<th>Costo</th>
					<th>Costo Total</th>
					<th>Fecha</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			@foreach($compras as $compra)
			<tr>
				<td>{{ $compra->id }}</td>
				<td>{{ $compra->producto->codigo }}</td>
				<td>{{ $compra->producto->nombre.' '.$compra->producto->marca.' '.$compra->producto->modelo }}</td>
				<td>{{ $compra->cantidad }}</td>
				<td>$ {{ $compra->costo }}</td>
				<td>$ {{ $compra->costo_total }}</td>
				<td>{{ date('d-m-Y',strtotime($compra->created_at)) }}</td>
				<td>
				<a href="{{URL::to('/compras/mostrar/'.$compra->id)}}" class="btn btn-success btn-xs tooltip-primary" data-toggle="tooltip" data-placement="top" data-original-title="mostrar"><i class="glyphicon glyphicon-eye-open"></i></a>
				<a href="{{URL::to('/compras/editar/'.$compra->id)}}" class="btn btn-orange btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="editar"><i class="glyphicon glyphicon-pencil"></i></a>
				<a href="javascript:;" onclick="eliminaRegistro('{{URL::to('/compras/eliminar/'.$compra->id)}}');" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="eliminar"><i class="glyphicon glyphicon-trash"></i></a>
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