<div class="row">
	<!-- Profile Info and Notifications -->
	<div class="col-xs-12 clearfix">
		<ul class="user-info pull-left pull-none-xsm">
			<!-- Profile Info -->
			<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					{{ HTML::image('src/'.$user->picture, '', array('class' => 'img-circle', 'style' => 'width:45px'))}}
					{{ $user->first_name.' '.$user->last_name}}
				</a>
				<ul class="dropdown-menu">
					<!-- Reverse Caret -->
					<li class="caret"></li>
					<!-- Profile sub-links -->
					<li>
						<a href="#">
							<i class="entypo-user"></i>
							Edit Profile
						</a>
					</li>
					<li>
						<a href="#">
							<i class="entypo-calendar"></i>
							Calendar
						</a>
					</li>
				</ul>
			</li>
		</ul>
		<ul class="list-inline links-list pull-right">
			<li>
				<a href="{{ URL::to('/logout') }}">
					Cerrar Sesión <i class="entypo-logout right"></i>
				</a>
			</li>
		</ul>
	</div>
</div>