<nav class="navbar navbar-expand-lg navbar-light">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">Webgis MIR</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbar">
			<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link" href="{{ route('home') }}">Home</a>
				</li>
				@if(request()->routeIs('home'))
				<li class="nav-item">
					<a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modal-pencarian">Pencarian</a>
				</li>
				@endif
				@auth
				<li class="nav-item">
					<a class="nav-link" href="{{ route('sekolah.index') }}">Daftar Sekolah</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('logout') }}">Logout</a>
				</li>
				@else
				<li class="nav-item">
					<a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modal-daftar">Daftar Sekolah</a>
				</li>
				<li class="nav-item">
					<!-- Button trigger modal -->
					<a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modal-login">
						Login
					</a>
				</li>
				@endauth
			</ul>
		</div>
	</div>
</nav>