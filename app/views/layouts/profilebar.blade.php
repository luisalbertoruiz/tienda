<div class="row">
	<div class="col-xs-12">
		<ul class="info-usuario">
			<li class="info-perfil dropdown">
				<a class="dropdown" href="">
					{{ HTML::image('src/'.$user->picture, '', array('class' => 'img-circle', 'style' => 'width:45px'))}}
					{{ $user->first_name.' '.$user->last_name }}
				</a>
			</li>
			<li class="salir pull-right">
				<a href="{{URL::to('/logout')}}">Salir<i class="entypo-logout"></i></a>
			</li>
		</ul>
	</div>
</div>
<hr>