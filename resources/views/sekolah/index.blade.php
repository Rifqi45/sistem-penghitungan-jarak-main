@extends('layout')

@section('content')
<div class="container mt-5">
	<h4>Daftar Sekolah</h4>
	<div class="card">
		<div class="card-body">
			<div align="right">
				<a href="{{ route('sekolah.create') }}" class="btn-block btn btn-sm btn-outline-primary">Tambah</a>
			</div>

			<div class="table-responsive-sm">
				<table class="table table-bordered mt-2">
					<thead class="table-light">
						<tr>
							<th>No</th>
							<th>Foto</th>
							<th>Sekolah</th>
							<th>Alamat</th>
							<th>NPSN</th>
							<th>Latitude</th>
							<th>Longitude</th>
							<th>Website</th>
							<th>Deskripsi</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						@forelse ($data as $d)
						<tr>
							<td>{{ $loop->iteration }}</td>
							<td><img src="{{ \Storage::url($d->foto) }}" class="img-thumbnail"></td>
							<td>{{ $d->name }}</td>
							<td>{{ $d->alamat }}</td>
							<td>{{ $d->npsn }}</td>
							<td>{{ $d->latitude }}</td>
							<td>{{ $d->longitude }}</td>
							<td><a href="{{ $d->website }}" target="_blank">{{ $d->website }}</a></td>
							<td>{{ $d->description }}</td>
							<td>
								<a href="{{ route('sekolah.edit', $d->id) }}" class="mb-1 btn btn-primary btn-sm">Edit</a>
								<a href="#" class="btn btn-danger btn-sm mb-1" onclick="confirm('Yakin ingin dihapus?') && document.querySelector('#form-delete-{{ $d->id }}').submit()">Hapus</a>

								<form class="d-none" action="{{ route('sekolah.destroy', $d->id) }}" method="POST" id="form-delete-{{ $d->id }}">
									@csrf
									@method('delete')
								</form>
							</td>
						</tr>
						@empty
						<tr>
							<td colspan="9" align="center">Tidak Ada Data</td>
						</tr>
						@endforelse
					</tbody>
				</table>
			</div>
			{{ $data->links() }}
		</div>
	</div>
</div>
@endsection