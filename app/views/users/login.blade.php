@extends('layouts.admin')
@section('title')
Tienda
@stop
@section('content')
<div class="container">
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3" style="margin-top:10%">
		<div class="panel panel-primary">
	  		<div class="panel-heading">
				<h3 class="panel-title">Sistema de Control</h3>
			</div>
			<div class="panel-body">
				<form action="{{ URL::to('loged')}}" method="POST" role="form" id="loginForm">
					<legend>Inicia Sesión</legend>
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">
									<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
								</span>
								<input type="text" class="form-control" id="username" name="username" required placeholder="Usuario" pattern=".{5,10}" maxlength="10" autocomplete="off">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">
									<span class="glyphicon glyphicon-certificate" aria-hidden="true"></span>
								</span>
								<input type="password" class="form-control" id="password" name="password" required placeholder="Contraseña" pattern=".{5,10}" maxlength="10" autocomplete="off">
							</div>
						</div>
						<button type="submit" class="btn btn-primary pull-right">Ingresar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@stop
@section('css')
@stop
@section('js')
@stop
@section('script')
<script>
</script>
@stop