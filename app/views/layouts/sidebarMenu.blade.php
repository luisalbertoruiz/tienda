<div class="sidebar-menu">
	<header class="logo-env">
		<!-- logo -->
		<div class="logo">
			<a href="{{URL::to('/admin')}}">
				<h4 style="color:white">PULGARCITO</h4>
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
			<a href="#"><i class="entypo-basket"></i><span>Punto de venta</span></a>
		</li>
		<li class="">
			<a href="#"><i class="entypo-mobile"></i><span>Recargas</span></a>
		</li>
		<li>
			<a href="#"><i class="entypo-box"></i><span>Almacen</span></a>
			<ul>
				<li>
					<a href="{{ URL::to('/productos')}}"><i class="entypo-archive"></i><span>Productos</span></a>
				</li>
				<li>
					<a href="{{ URL::to('/compras')}}"><i class="entypo-clipboard"></i><span>Compras</span></a>
				</li>
				<li>
					<a href="{{ URL::to('/categorias')}}"><i class="entypo-tag"></i><span>Categorias</span></a>
				</li>
			</ul>
		</li>
		<li>
			<a href=""><i class="entypo-book"></i><span>Catálogos</span></a>
		</li>
		
		<li>
			<a href=""><i class="entypo-usuarios"></i><span>Usuarios</span></a>
		</li>
		<li>
			<a href=""><i class="entypo-cog"></i><span>Otros</span></a>
		</li>
	</ul>
</div>
