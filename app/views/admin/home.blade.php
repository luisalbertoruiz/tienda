@extends('layouts.admin')
@section('title')
Tienda
@stop
@section('body')
class="page-body page-fade-only"
@stop
@section('content')
<div class="page-container">	
	@include('layouts.sidebarMenu')
	<div class="main-content">
		@include('layouts.profilebar')
		<hr>
		<ol class="breadcrumb bc-3">
			<li>
				<a href="{{ URL::to('/')}}"><i class="entypo-home"></i>Home</a>
			</li>
			<li class="active">
				<strong>Administración</strong>
			</li>
		</ol>
		<hr>
		<div class="row">
			<div class="col-sm-12">
				<div class="well">
					<h1><?php setlocale(LC_TIME, 'es_MX.UTF-8'); echo ucfirst(strftime('%B %d')) ?>, <?php echo date('Y') ?></h1><?php $user = Sentry::getUser() ?>
					<h3>Bienvenido al Sistema de Administración <strong>{{ $user->first_name.' '.$user->last_name }}</strong></h3>
				</div>
			</div>
		</div>
		@include('layouts.opsHome')
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