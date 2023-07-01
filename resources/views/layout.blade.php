<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistem Penghitungan Jarak</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	@stack('css')
</head>
<body>
	@include('navbar')
	@include('login')
	@if(request()->routeIs('home'))
		@include('pencarian')
		@include('info')
		@include('daftar')
	@endif
	
	@yield('content')

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<script type="text/javascript">
		@if(session()->has('status'))
			Swal.fire({
				title: "Informasi", 
				text: "{!! session('status') !!}", 
				icon: "info"
			});
		@endif

		@if($errors->any())
			Swal.fire({
				title: "Error",
				text: "{!! $errors->first() !!}",
				icon: "error"
			});
		@endif
	</script>

	@stack('js')
</body>
</html>