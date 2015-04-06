@extends('layouts.admin')
@section('title')
Usuarios | Nuevo
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
		<a href="{{ URL::to('/usuarios')}}">Usuarios</a>
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
		<div class="panel-title">Registra un nuevo Usuario</div>
		</div>
		<div class="panel-body">
		   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-3">
		   		{{ Form::open(array('url' => '/usuarios/guardar', 'files' => true)) }}
		   			<div class="form-group">
		   				<label for="nombre">Nombre</label>
		   				<input name="nombre" type="text" class="form-control" id="nombre" required maxlength="30">
		   			</div>
		   			<div class="form-group">
		   				<label for="apellido">apellido</label>
		   				<input name="apellido" type="text" class="form-control" id="apellido" maxlength="30">
		   			</div>
		   			<div class="form-group">
		   				<label for="email">eMail</label>
		   				<input name="email" type="text" class="form-control" id="email" required maxlength="50" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
		   			</div>
		   			<div class="form-group">
		   				<label for="user">Usuario</label>
		   				<input name="user" type="text" class="form-control" id="user"required maxlength="20" pattern=".{4,}">
		   			</div>
		   			<div class="form-group">
		   				<label for="pass">Contraseña</label>
		   				<input name="pass" type="password" class="form-control" id="pass" required maxlength="20" pattern=".{5,}">
		   			</div>
		   			<div class="form-group">
		   				<label for="pass2">Confirmar</label>
		   				<input name="pass2" type="password" class="form-control" id="pass2" required maxlength="20" pattern=".{5,}">
		   			</div>
		   			<div class="form-group">
		   				<label for="foto">foto</label>
		   				<input name="foto" type="file" class="form-control" id="foto">
		   			</div>
		   			<div class="form-group">
		   				<label for="tipo">Tipo</label>
		   				<select name="tipo" id="tipo" class="form-control" required>
		   					<option value=""></option>
		   					<option value="admin">Administrador</option>
		   					<option value="user">Usuario Estandar</option>
		   				</select>
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