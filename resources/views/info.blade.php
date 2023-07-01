<!-- Modal -->
<div class="modal fade" id="modal-info" tabindex="-1" aria-labelledby="modal-info-label" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Detail Sekolah</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="mb-4" align="center">
					<img src="{{ asset('empty-image.png') }}" alt="." class="img-fluid" id="modal-info-foto">
				</div>
				<table class="w-100">
					<tr>
						<td>Sekolah</td>
						<td>:</td>
						<td>
							<label name="name"></label>
						</td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td>
							<label name="alamat"></label>
						</td>
					</tr>
					<tr>
						<td>NPSN</td>
						<td>:</td>
						<td>
							<label name="npsn"></label>
						</td>
					</tr>
					<tr>
						<td>Latitude</td>
						<td>:</td>
						<td>
							<label name="latitude"></label>
						</td>
					</tr>
					<tr>
						<td>Longitude</td>
						<td>:</td>
						<td>
							<label name="longitude"></label>
						</td>
					</tr>
					<tr>
						<td>Website</td>
						<td>:</td>
						<td>
							<a href="#" name="website"></a>
						</td>
					</tr>
					<tr>
						<td>Deskripsi</td>
						<td>:</td>
						<td>
							<label name="description"></label>
						</td>
					</tr>
				</table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>