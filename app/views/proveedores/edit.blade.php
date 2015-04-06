@extends('layouts.admin')
@section('title')
Proveedor | Editar
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
				<a href="{{ URL::to('/proveedores')}}">Catálogos</a>
			</li>
			<li>
				<a href="{{ URL::to('/proveedores')}}">Proveedores</a>
			</li>
			<li class="active">
				<strong>Editar</strong>
			</li>
		</ol>
		<hr>
		<div class="row">
			<div class="col-xs-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
					<div class="panel-title">Edita al Proveedor</div>
					</div>
					<div class="panel-body">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-3">
							<form action="{{ URL::to('/proveedores/actualizar/'.$proveedor->id) }}" method="POST" role="form">
								<div class="form-group">
									<label for="nombre">Nombre</label>
									<input name="nombre" type="text" class="form-control" id="nombre" maxlength="30" required value="{{ $proveedor->nombre }}">
								</div>
								<div class="form-group">
					   				<label for="empresa">Empresa</label>
					   				<input name="empresa" type="text" class="form-control" id="empresa" maxlength="30" value="{{ $proveedor->empresa }}">
					   			</div>
					   			<div class="form-group">
					   				<label for="telefono">Teléfono</label>
					   				<input name="telefono" type="text" class="form-control" id="telefono" maxlength="10" value="{{ $proveedor->telefono }}">
					   			</div>
					   			<div class="form-group">
					   				<label for="celular">Celular</label>
					   				<input name="celular" type="text" class="form-control" id="celular" maxlength="10" value="{{ $proveedor->celular }}">
					   			</div>
					   			<div class="form-group">
					   				<label for="email">eMail</label>
					   				<input name="email" type="text" class="form-control" id="email" maxlength="40" value="{{ $proveedor->email }}">
					   			</div>
					   			<div class="form-group">
					   				<label for="pagina">Página</label>
					   				<input name="pagina" type="text" class="form-control" id="pagina" maxlength="40" value="{{ $proveedor->pagina }}">
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