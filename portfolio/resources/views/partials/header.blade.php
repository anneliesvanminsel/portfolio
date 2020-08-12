<header class="header row">
	<div class="row row--center is-grow">
		<div class="accent__block"></div>
		<a href="{{ route('index') }}" class="logo">
			Annelies Van Minsel <span> / Frontend Web Developer</span>
		</a>
	</div>
	<nav class="nav">
		<ul class="nav__bar">
			@if(Route::has('resume'))
				<li class="nav__item">
					
					<a href="" class="nav__link">
						Resume
					</a>
				</li>
			@endif
			@if(Route::has('projects.overview'))
				<li class="nav__item">
					<a href="" class="nav__link">
						projects
					</a>
				</li>
			@endif
			@if(Route::has('contact'))
				<li class="nav__item">
					<a href="" class="nav__link">
						Contact
					</a>
				</li>
			@endif
		</ul>
	</nav>
</header>