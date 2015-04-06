@extends('layouts.admin')
@section('title')
Clientes | Nuevo
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
			<li>
				<a href="{{ URL::to('/clientes')}}">Clientes</a>
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
					<div class="panel-title">Registra una nuevo Cliente</div>
					</div>
					<div class="panel-body">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-3">
							<form action="{{ URL::to('/clientes/guardar') }}" method="POST" role="form">
								<div class="form-group">
									<label for="nombre">Nombre</label>
									<input name="nombre" type="text" class="form-control" id="nombre" maxlength="30" required>
								</div>
								<div class="form-group">
									<label for="alias">Alias</label>
									<input name="alias" type="text" class="form-control" id="alias" maxlength="30">
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<div class="form-group">
										<label for="tel1">Teléfono</label>
										<input name="tel1" type="text" class="form-control" id="tel1" maxlength="10">
									</div>
									<div class="form-group">
										<label for="tel2">Teléfono</label>
										<input name="tel2" type="text" class="form-control" id="tel2" maxlength="10">
									</div>
									<div class="form-group">
										<label for="tel3">Teléfono</label>
										<input name="tel3" type="text" class="form-control" id="tel3" maxlength="10">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<div class="form-group">
										<label for="tel1_tipo">Carrier</label>
										<select name="tel1_tipo" id="tel1-tipo" class="form-control">
											<option value=""></option>
											<option value="Telcel">Telcel</option>
											<option value="Movistar">Movistar</option>
											<option value="Iusacel">Iusacel</option>
											<option value="Nextel">Nextel</option>
										</select>
									</div>
									<div class="form-group">
										<label for="tel2_tipo">Carrier</label>
										<select name="tel2_tipo" id="tel2-tipo" class="form-control">
											<option value=""></option>
											<option value="Telcel">Telcel</option>
											<option value="Movistar">Movistar</option>
											<option value="Iusacel">Iusacel</option>
											<option value="Nextel">Nextel</option>
										</select>
									</div>
									<div class="form-group">
										<label for="tel3_tipo">Carrier</label>
										<select name="tel3_tipo" id="tel3-tipo" class="form-control">
											<option value=""></option>
											<option value="Telcel">Telcel</option>
											<option value="Movistar">Movistar</option>
											<option value="Iusacel">Iusacel</option>
											<option value="Nextel">Nextel</option>
										</select>
									</div>
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