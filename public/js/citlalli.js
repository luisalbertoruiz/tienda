$(document).ready(function(){
//variables
	$body             = $('body');
	$contenedor       = $body.find('.contenedor');
	$menuContenedor   = $contenedor.find('.menu-contenedor');
	$menuTitulo       = $contenedor.find('.menu-titulo');
	$menuNavegacion   = $contenedor.find('.menu-navegacion');
	$menuBoton        = $contenedor.find('.menu-boton');
	$paginaContenedor = $contenedor.find('.pagina-contenedor');
	menuEstado        = 'abierto';
	dimensiones       = {
		pantallaGrande: [1201, -1],
		pantallaTableta:[768, 1200],
		pantallaMovil:  [420, 767],
		pantallachica:[0, 419]
	};

// Preparamos el menu
	prepararMenu();

// Inicializamos
	redimencionar(dimensionActual());

// Detectar cambio de Tamaño 
	$(window).resize(function(event) {
		redimencionar(dimensionActual());
	});

// Accion del boton de menu segun tamaño de pantalla
	$menuBoton.click(function(event){
		botonMenu(dimensionActual());
	});
	$menuNavegacion.find('li a').hover(function() {
		if($menuContenedor.hasClass('menu-cerrado')){
			$(this).find('span').css({
				display: 'inline-block',
				padding: '0px 0 0px 20px'
			});
		}
	}, function() {
		if($menuContenedor.hasClass('menu-cerrado')){
			$(this).find('span').css({
				display: 'none',
				padding: '0'
			});
			$(this).find('li').hasClass('sub-menu');
		}
	});
});

// Funciones
function dimensionActual(){
	var ancho = $(window).width();
	for(var nombre_dimension in dimensiones)
	{
		var dimension = dimensiones[nombre_dimension],
		min = dimension[0],
		max = dimension[1];
		if(max == -1) max = ancho;
		if(min <= ancho && max >= ancho){
			return nombre_dimension;
		}
	}
	return null;
}
function botonMenu(dimension){
	if(dimension == 'pantallaTableta' || dimension == 'pantallaGrande'){
		if(menuEstado == 'abierto'){
				cerrarMenu();
				menuEstado = 'cerrado';
		}
		else{
			abrirMenu();
			menuEstado = 'abierto';
		}
	}
	else if(dimension == 'pantallaMovil' || dimension =='pantallachica'){
		$('.menu-navegacion').slideToggle('slow');
	}
}
function prepararMenu(){
	var submenu = $menuNavegacion.find('li').has('ul');
	submenu.each(function(index, el) {
		$(this).addClass('sub-menu');
	});
	submenu.find('ul').css('height', '0');
	submenu.click(function(event){
		event.preventDefault();
		if($(this).hasClass('abierto') && ($menuContenedor.hasClass('menu-abierto') || $menuContenedor.hasClass('menu-minimizado'))){
			$(this).removeClass('abierto');
			TweenMax.to($(this).find('ul'),0.3,{height:0,display:'none'});
		}
		else if(!$(this).hasClass('abierto') && ($menuContenedor.hasClass('menu-abierto') || $menuContenedor.hasClass('menu-minimizado'))){
			TweenMax.to(submenu.find('ul'),0.3,{height:0,display:'none'});
			submenu.removeClass('abierto');
			$(this).addClass('abierto');
			$(this).find('ul').css('height', 'auto');
			altura = $(this).find('ul').outerHeight();
			TweenMax.to($(this).find('ul'),0.3,{height:altura,display:'block'});
		}
	});
}
function cerrarMenu(){
	TweenMax.to('.menu-navegacion li a span',0.1,{display:'none'});
	TweenMax.to('.menu-titulo a',0.1,{display:'none'});
	TweenMax.to('.menu-contenedor',0.2,{width:66,delay:0.1});
	$menuContenedor.removeClass('menu-abierto');
	$menuContenedor.addClass('menu-cerrado');
	$menuNavegacion.find('li').has('ul').removeClass('abierto');
	TweenMax.to($menuNavegacion.find('li').has('ul').find('ul'),0.3,{height:0,display:'none'});
}
function abrirMenu(){
	TweenMax.to('.menu-contenedor',0.2,{width:240});
	TweenMax.to('.menu-navegacion li a span',0.1,{display:'inline-block', delay:0.1});
	TweenMax.to('.menu-titulo a',0.1,{display:'inline-block', delay:0.1});
	$menuContenedor.removeClass('menu-cerrado');
	$menuContenedor.addClass('menu-abierto');
}
function redimencionar(dimension){
	$('.menu-contenedor').removeAttr('style');
	$('.menu-contenedor').removeClass('menu-minimizado menu-cerrado menu-abierto');
	if(dimension == 'pantallaGrande') {
		$('.menu-contenedor').addClass('menu-abierto');
		$('.menu-titulo a').css('display', 'inline-block');
		$('.menu-navegacion li a span').css('display', 'inline-block');
		$('.menu-navegacion').css('display', 'block');
		menuEstado= 'abierto';
	}
	if(dimension == 'pantallaTableta'){
		$('.menu-contenedor').addClass('menu-cerrado');
		$('.menu-navegacion li a span').css('display', 'none');
		$('.menu-titulo a').css('display', 'none');
		$('.menu-navegacion').css('display', 'block');
		$menuNavegacion.find('li').has('ul').removeClass('abierto');
		TweenMax.to($menuNavegacion.find('li').has('ul').find('ul'),0.3,{height:0,display:'none'});
		menuEstado= 'cerrado';
	}
	if(dimension == 'pantallaMovil' || dimension =='pantallachica'){
		$('.menu-contenedor').addClass('menu-minimizado');
		$('.menu-navegacion').css('display', 'none');
		$('.menu-titulo a').css('display', 'inline-block');
		$('.menu-navegacion li a span').css('display', 'inline-block');
	}
}