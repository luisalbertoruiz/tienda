@extends('layouts.admin')
@section('title')
Recargas
@stop
@section('body')
class="page-body"
@stop
@section('content')
<div class="page-container sidebar-collapsed">	
@include('layouts.sidebarMenu')
<div class="main-content">
@include('layouts.profilebar')
<hr>
<ol class="breadcrumb bc-3">
	<li>
		<a href="{{ URL::to('/home')}}"><i class="entypo-home"></i>Home</a>
	</li>
	<li class="active">
		<strong>Recargas</strong>
	</li>
</ol>
<hr>
<div class="row">
	<div class="col-xs-3">
		<div class="panel panel-primary">
			<div class="panel-body">
				<div class="col-xs-12">
				<div class="form-group">
		   				<label for="paginas">Páginas</label>
		   				<select name="paginas" id="paginas" class="form-control" data-placeholder="Selecciona una pagina...">
		   					<option value="telcel">telcel</option>
		   					<option value="otra">otra</option>
		   				</select>
		   			</div>
					<div class="form-group">
		   				<label for="cliente">Clientes</label>
		   				<select name="cliente" id="cliente" class="form-control" data-placeholder="Selecciona un cliente...">
		   					<option value=""></option>
		   					@foreach ($clientes as $cliente)
		   					<option value="{{ $cliente->id }}">{{ $cliente->nombre.' '.$cliente->marca.' '.$cliente->modelo.' '.$cliente->codigo}}</option>
		   					@endforeach
		   				</select>
		   			</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-9" id="telcel">
		<div class="panel panel-primary">
			<div class="panel-body">
			   	<iframe src="http://www.siprel.com.mx/" frameborder="0" width="100%" height="600px"></iframe>
			</div>
		</div>
	</div>
	<div class="col-xs-9" id="otra">
		<div class="panel panel-primary">
			<div class="panel-body">
			   	<iframe src="http://www.tiempo-aire.com/" frameborder="0" width="100%" height="600px"></iframe>
			</div>
		</div>
	</div>
</div>
</div>
</div>
@stop
@section('css')
{{ HTML::style('css/chosen.css') }}
@stop
@stop
@section('js')
{{ HTML::script('js/chosen.js') }}
@stop
@section('script')
<script>
$(document).ready(function() {
	$('#cliente').chosen({
		no_results_text: "Oops, Nada encontrado!"
	});
	$('#otra').hide();
	$('#paginas').change(function(event) {
		if($(this).val() == 'otra')
		{
			$('#telcel').hide();
			$('#otra').show();
		}else{
			$('#telcel').show();
			$('#otra').hide();
		}	
	});
});
</script>
@stop