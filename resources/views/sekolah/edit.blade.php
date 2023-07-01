@extends('layout')

@section('content')
<div class="container mt-5">
	<h4>Edit Sekolah</h4>
	<form action="{{ route('sekolah.update', $sekolah->id) }}" method="POST" class="card" enctype="multipart/form-data">
		@csrf
		@method('put')

		<div class="card-body">
			<div class="mb-2">
				<label class="form-label">Nama Sekolah</label>
				<input class="form-control" type="text" name="name" value="{{ $sekolah->name }}" required>
			</div>
			<div class="mb-2">
				<label class="form-label">Alamat</label>
				<textarea class="form-control" name="alamat" required>{{ $sekolah->alamat }}</textarea>
			</div>
			<div class="mb-2">
				<label class="form-label">NPSN</label>
				<input class="form-control" type="text" name="npsn" value="{{ $sekolah->npsn }}" required>
			</div>
			<div class="mb-2">
				<label class="form-label">Foto</label>
				<input class="form-control" type="file" name="foto" accept="image/*">
			</div>
			<div class="mb-2">
				<label class="form-label">Latitude</label>
				<input class="form-control" type="text" name="latitude" value="{{ $sekolah->latitude }}" required>
			</div>
			<div class="mb-2">
				<label class="form-label">Longitude</label>
				<input class="form-control" type="text" name="longitude" value="{{ $sekolah->longitude }}" required>
			</div>
			<div class="mb-2">
				<label class="form-label">Website</label>
				<input class="form-control" type="text" name="website" value="{{ $sekolah->website }}">
			</div>
			<div class="mb-2">
				<label class="form-label">Deskripsi</label>
				<textarea class="form-control" name="description" required>{{ $sekolah->description }}</textarea>
			</div>
			<div align="right">
				<button type="submit" class="btn btn-sm btn-primary">Edit</button>
			</div>
		</div>
	</form>
</div>
@endsection