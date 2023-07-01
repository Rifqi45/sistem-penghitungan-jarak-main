<!-- Modal -->
<div class="modal fade" id="modal-pencarian" tabindex="-1" aria-labelledby="modal-pencarian-label" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modal-pencarian-label">Login</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="mb-2">
					<label class="form-label">Posisi Awal (lat,lng)</label>
					<input type="text" name="posisi_awal" class="form-control">
					<button type="button" class="btn btn-sm btn-link" onclick="ambilLokasi()">Ambil Lokasi GPS</a>
				</div>
				<div class="mb-2">
					<label class="form-label">Posisi Tujuan</label>
					<select name="posisi_tujuan" class="form-control">
						@foreach($data as $d)
						<option value="{{ $d->latitude }},{{ $d->longitude }}">{{ $d->name }}</option>
						@endforeach
					</select>
				</div>
				<div class="mb-2">
					<label class="form-label">Jarak</label>
					<div class="input-group">
						<input type="text" name="jarak" class="form-control" readonly>
						<span class="input-group-text">M</span>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" name="tampilkan" class="btn btn-primary" data-bs-dismiss="modal">Tampilkan</button>
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

@push('js')
<script type="text/javascript">
	document.addEventListener('DOMContentLoaded', () => {
		let posisiAwalElement = document.querySelector("#modal-pencarian input[name='posisi_awal']");
		let posisiAkhirElement = document.querySelector("#modal-pencarian select[name='posisi_tujuan']");
		let jarakElement = document.querySelector("#modal-pencarian input[name='jarak']");
		let tampilkanElement = document.querySelector("#modal-pencarian button[name='tampilkan']");

		let posisiAwal = [];
		let posisiAkhir = [];
		let jarak = 0;
		let oldPolyline;
		let oldMarkerJarak;
		let oldFrom;


		window.ambilLokasi = () => {
			function success(position) {
				posisiAwalElement.value = position.coords.latitude + "," + position.coords.longitude;
				cekjarak();
			}

			function error() {
				alert('Tidak bisa mengambil lokasi anda');
			}

			if(!navigator.geolocation) {
				alert('Browser tidak bisa mengambil lokasi anda')
			} else {
				navigator.geolocation.getCurrentPosition(success, error);
			}
		}

		let cekjarak = () => {
			posisiAwal = posisiAwalElement.value.trim().split(',');
			posisiAkhir = posisiAkhirElement.value.trim().split(',');

			jarak = L.latLng(posisiAwal).distanceTo(L.latLng(posisiAkhir));

			jarakElement.value = Math.round(jarak);
		}

		posisiAwalElement.addEventListener('change', cekjarak);
		posisiAkhirElement.addEventListener('change', cekjarak);
		tampilkanElement.addEventListener('click', () => {
			oldPolyline && oldPolyline.remove();
			oldMarkerJarak && oldMarkerJarak.remove();
			oldFrom && oldFrom.remove();

			oldPolyline = L.polyline([posisiAwal, posisiAkhir], {color: 'red'}).addTo(map);
			oldMarkerJarak = L.marker(oldPolyline.getCenter(), {
				icon: L.divIcon()
			}).addTo(map).bindTooltip(Math.round(jarak) + ' M').openTooltip();
			oldFrom = L.marker(posisiAwal, { color: 'green'}).addTo(map).bindTooltip('Lokasi anda').openTooltip()

			// zoom the map to the polyline
			map.fitBounds(oldPolyline.getBounds());
		})
	});
</script>
@endpush