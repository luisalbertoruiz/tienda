<!DOCTYPE html>
<html lang="es-MX">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<title>@yield('title')</title>
		<!-- CSS -->
		{{ HTML::style('css/entypo.css') }}
		{{ HTML::style('css/font-awesome.css') }}
		{{ HTML::style('css/bootstrap.css') }}
		{{ HTML::style('css/core.css') }}
		{{ HTML::style('css/theme.css') }}
		{{ HTML::style('css/forms.css') }}
		{{ HTML::style('css/toastr.css') }}
		{{ HTML::style('css/jquery-ui.css') }}
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body @yield('body')>
		@yield('content')
		@yield('css')
		{{ HTML::script('js/TweenMax.js') }}
		{{ HTML::script('js/jquery.js') }}
		{{ HTML::script('js/jquery-ui.js') }}
		{{ HTML::script('js/bootstrap.js') }}
		{{ HTML::script('js/joinable.js') }}
		{{ HTML::script('js/resizeable.js') }}
		{{ HTML::script('js/neon-api.js') }}
		{{ HTML::script('js/toastr.js') }}
		{{ HTML::script('js/neon-custom.js') }}
		@include('layouts.alertas')
		@yield('js')
		@yield('script')
	</body>
</html>