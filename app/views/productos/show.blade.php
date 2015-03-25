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
		<strong>Detalles</strong>
	</li>
</ol>
<hr>
<div class="row">
	<div class="col-xs-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
		<div class="panel-title">Detalles del Producto</div>
		</div>
		<div class="panel-body">
		   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-1">
		   		<table style="font-size:14px;">
		   			<tr>
		   				<td><strong>Codigo:</strong></td>
		   				<td>&nbsp;</td>
		   				<td>{{ $producto->codigo }}</td>
		   			</tr>
		   			<tr>
		   				<td><strong>Nombre:</strong></td>
		   				<td>&nbsp;</td>
		   				<td>{{ $producto->nombre }}</td>
		   			</tr>
		   			<tr>
		   				<td><strong>Marca:</strong></td>
		   				<td>&nbsp;</td>
		   				<td>{{ $producto->marca }}</td>
		   			</tr>
		   			<tr>
		   				<td><strong>Modelo:</strong></td>
		   				<td>&nbsp;</td>
		   				<td>{{ $producto->modelo }}</td>
		   			</tr>
		   			<tr>
		   				<td><strong>Categoria:</strong></td>
		   				<td>&nbsp;</td>
		   				<td>{{ $producto->categoria->nombre }}</td>
		   			</tr>
		   			<tr>
		   				<td><strong>Costo:</strong></td>
		   				<td>&nbsp;</td>
		   				<td>{{ $producto->costo }}</td>
		   			</tr>
		   			<tr>
		   				<td><strong>Precio:</strong></td>
		   				<td>&nbsp;</td>
		   				<td>{{ $producto->precio }}</td>
		   			</tr>
		   			<tr>
		   				<td><strong>Existencias:</strong></td>
		   				<td>&nbsp;</td>
		   				<td>{{ $producto->existencia }}</td>
		   			</tr>
		   			<tr>
		   				<td><strong>Descripcion:</strong></td>
		   				<td>&nbsp;</td>
		   				<td>{{ $producto->descripcion }}</td>
		   			</tr>
		   			<tr>
		   				<td>&nbsp;</td>
		   				<td>&nbsp;</td>
		   				<td>&nbsp;</td>
		   			</tr>
		   		</table>
		   		<a href="{{ URL::previous() }}" class="btn btn-orange">Regresar</a>
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