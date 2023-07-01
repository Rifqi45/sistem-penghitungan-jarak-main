<!-- Modal -->
<div class="modal fade" id="modal-daftar" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Daftar Sekolah</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead class="table-light">
							<tr>
								<th>No</th>
								<th>Sekolah</th>
								<th>Alamat</th>
								<th>NPSN</th>
								<th>Latitude</th>
								<th>Longitude</th>
								<th>Website</th>
								<th>Deskripsi</th>
							</tr>
						</thead>
						<tbody>
							@forelse ($data as $d)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $d->name }}</td>
								<td>{{ $d->alamat }}</td>
								<td>{{ $d->npsn }}</td>
								<td>{{ $d->latitude }}</td>
								<td>{{ $d->longitude }}</td>
								<td><a href="{{ $d->website }}" target="_blank">{{ $d->website }}</a></td>
								<td>{{ $d->description }}</td>
							</tr>
							@empty
							<tr>
								<td colspan="9" align="center">Tidak Ada Data</td>
							</tr>
							@endforelse
						</tbody>
					</table>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>