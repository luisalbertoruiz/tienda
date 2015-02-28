<div class="sidebar-menu">
	<header class="logo-env">
		<!-- logo -->
		<div class="logo">
			<a href="{{URL::to('/admin')}}">
				{{ HTML::image('src/logosga.png', '', array('style' => 'width:175px'))}}
			</a>
		</div>
				<!-- logo collapse icon -->
		<div class="sidebar-collapse">
			<a href="" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
				<i class="entypo-menu"></i>
			</a>
		</div>
		<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
		<div class="sidebar-mobile-menu visible-xs">
			<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
				<i class="entypo-menu"></i>
			</a>
		</div>
	</header>
	<ul id="main-menu" class="main-menu">
		<li>
			<a href="{{ URL::to('/usuarios')}}"><i class="fa fa-user"></i><span>Usuarios</span></a>
		</li>
		<li class="">
			<a href="{{ URL::to('/clientes')}}"><i class="fa fa-users"></i><span>Clientes</span></a>
		</li>
		<li>
			<a href="{{ URL::to('/vehiculos')}}"><i class="fa fa-truck"></i><span>Vehículos</span></a>
		</li>
		<li>
			<a href=""><i class="fa fa-archive"></i><span>Almacen</span></a>
			<ul>
				<li>
					<a href="{{ URL::to('/proveedores')}}"><i class="fa fa-shopping-cart"></i><span>Proveedores</span></a>
				</li>
				<li>
					<a href="{{ URL::to('/refacciones')}}"><i class="fa fa-code-fork"></i><span>Refacciones</span></a>
				</li>
			</ul>
		</li>
		
		<li>
			<a href=""><i class="fa fa-tachometer"></i><span>Taller</span></a>
			<ul>
				<li>
					<a href="{{ URL::to('/presupuestos')}}"><i class="fa fa-dollar"></i><span>Presupuestos</span></a>
				</li>
				<li>
					<a href="{{ URL::to('/ordenes')}}"><i class="fa fa-file-text"></i><span>Orden de Servicio</span></a>
				</li>
			</ul>
		</li>
		<li>
			<a href=""><i class="fa fa-list"></i><span>Catálogos</span></a>
			<ul>
				<li>
					<a href="{{ URL::to('/servicios')}}"><i class="fa fa-cog"></i><span>Servicios</span></a>
				</li>
				<li>
					<a href="{{ URL::to('/sservicios')}}"><i class="fa fa-cogs"></i><span>subServicios</span></a>
				</li>
				<li>
					<a href="{{ URL::to('/marcas')}}"><i class="fa fa-bookmark"></i><span>Marcas</span></a>
				</li>
				<li>
					<a href="{{ URL::to('/smarcas')}}"><i class="fa fa-bookmark-o"></i><span>subMarcas</span></a>
				</li>
				<li>
					<a href="{{ URL::to('/colores')}}"><i class="fa fa-tint"></i><span>Colores</span></a>
				</li>
			</ul>
		</li>
	</ul>
</div>
