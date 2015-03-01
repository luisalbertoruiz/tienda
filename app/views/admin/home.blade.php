@extends('layouts.admin')
@section('title')
Tienda
@stop
@section('content')
@include('layouts.sidebarMenu')
<div class="pagina-contenedor">
@include('layouts.profilebar')
<div class="row">
	<div class="pan">
		<ul>
			<li><a href=""><i class="entypo-home"></i>Home</a></li>
			<li><a href="">Administrador</a></li>
			<li class="activo">Opcion</li>
		</ul>
	</div>
</div>
<hr>
<div class="panel">
	<div class="panel-body">
		<h2><?php setlocale(LC_TIME, 'es_MX.UTF-8'); echo ucfirst(strftime('%B %d')) ?>, <?php echo date('Y') ?></h2>
  		<h4>Bienvenido al Sistema de Administración
		<strong>{{ $user->first_name.' '.$user->last_name }}</strong></h4>
	</div>
</div>
@include('layouts.opsHome')
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