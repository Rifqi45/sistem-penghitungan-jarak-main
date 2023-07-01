@extends('layout')

@push('css')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="anonymous"/>

<style type="text/css">
html, body {
	padding: 0;
	margin: 0;
	height: 100vh;
}
.label-sekolah {
	white-space: nowrap;
   	color: black;
}
</style>
@endpush

@section('content')
<main role="main" class="m-0 p-0 h-100">
	<div class="mb-4" align="center">
		<h4 class="d-inline-block"><b>Sistem Informasi Geografis</b></h4>
	</div>
	<div class="row p-0 m-0 h-75 align-items-center justify-content-center">
		<div id="map" class="col-10 h-100">
		
		</div>
	</div>
</main>

<footer class="footer bg-dark text-white p-3 text-center">
	Copyright &copy; Pemetaan Zonasi Sekolah Menengah Atas (SMA) Berbasis <br>WEB GIS di Kota Sukabumi
</footer>
@endsection

@push('js')
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin="anonymous"></script>
<script type="text/javascript">
	var map = L.map('map').setView([-6.9359289,106.92215095], 13);

	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(map);

	var infoModalElement = new bootstrap.Modal(document.querySelector('#modal-info'));
	var infoModalTitleElement = document.querySelector("#modal-info-label");
	var infoModalHtmlElement = document.querySelector("#modal-info .modal-body");

	@foreach ($data as $d)
		L.marker([{{ $d->latitude }}, {{ $d->longitude}}], {
			icon:  L.icon({
			    iconUrl: 'sekolah.png',

			    iconSize:     [50, 50], // size of the icon
			    // shadowSize:   [50, 64], // size of the shadow
			    // iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
			    // shadowAnchor: [4, 62],  // the same for the shadow
			    // popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
			})
		}).addTo(map)
			.bindTooltip('<b>{{ $d->name }}</b>', {
				permanent: true, 
				direction: 'top',
				offset: [0, -10]
			})
			.openTooltip()
			.on('click', () => {
				document.querySelector("#modal-info-foto").src = `{{ \Storage::url($d->foto) }}`
				document.querySelector("#modal-info label[name='name']").innerText = `{{ $d->name }}`;
				document.querySelector("#modal-info label[name='alamat']").innerText = `{{ $d->alamat }}`;
				document.querySelector("#modal-info label[name='npsn']").innerText = `{{ $d->npsn }}`;
				document.querySelector("#modal-info label[name='latitude']").innerText = `{{ $d->latitude }}`;
				document.querySelector("#modal-info label[name='longitude']").innerText = `{{ $d->longitude }}`;
				document.querySelector("#modal-info a[name='website']").innerText = `{{ $d->website }}`;
				document.querySelector("#modal-info a[name='website']").href = `{{ $d->website }}`;
				document.querySelector("#modal-info label[name='description']").innerText = `{{ $d->description }}`;

				infoModalElement.show();
			})
	@endforeach
</script>
@endpush