<nav class="navbar navbar-light navbar-expand-md bg-white justify-content-center">
	<button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#collapsingNavbar2">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
		<ul class="navbar-nav mx-auto text-center">
			<li class="nav-item active">
				<a class="nav-link {{ Route::is('index') ? 'active font-weight-bold' : '' }}" href="{{ route('index') }}">HOME</a>
			</li>
			<li class="nav-item">
				<a class="nav-link {{ (Route::is('vaccines')) ? 'active font-weight-bold' : '' }}" href="{{ route('vaccines') }}">VACCINE</a>
			</li>
			<li class="nav-item">
				<a class="nav-link {{ (Route::is('patients'))? 'active font-weight-bold' : '' }}" href="{{ route('patients') }}">PATIENT</a>
			</li>
		</ul>
	</div>
</nav>