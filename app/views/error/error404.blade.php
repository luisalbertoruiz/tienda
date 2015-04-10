@extends('layouts.admin')
@section('title')
Recargas
@stop
@section('body')
class="page-body"
@stop
@section('content')
<div class="page-container">	
	<div class="main-content">
		<div class="page-error-404">
			<div class="error-symbol">
				<i class="entypo-attention"></i>
			</div>
			<div class="error-text">
				<h2>404</h2>
				<p>Pagina no encontrada!</p>
			</div>
			<hr />
			{{-- <div class="error-text">
				Buscar Paginas:
				<br />
				<br />
				<div class="input-group minimal">
					<div class="input-group-addon">
						<i class="entypo-search"></i>
					</div>
					<input type="text" class="form-control" placeholder="Buscar lo que sea..." />
				</div>
			</div> --}}
		</div>
	</div>
</div>
@stop
@section('css')
@stop
@section('js')
@stop
@section('script')
<script type="text/javascript">
	jQuery(document).ready(function($)
	{
		
	});
</script>
@stop