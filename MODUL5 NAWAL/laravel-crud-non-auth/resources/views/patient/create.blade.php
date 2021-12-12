@extends('templates.app')

@section('content')

<div class="container">
	<h3 class="text-center mt-5">Register {{ $name }} Patient</h3>

	<div class="row mt-5 mb-5">
		<div class="col-12">
			<form action="{{ route('patients.store') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label for="vaccine_id">Vaccine id</label>
					<input type="text" name="vaccine_id" class="form-control" value="{{ $id }}" readonly>
				</div>
				<div class="form-group">
					<label for="name">Patient Name</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label for="nik">NIK</label>
					<input type="text" name="nik" class="form-control">
				</div>
				<div class="form-group">
					<label for="alamat">Address</label>
					<textarea name="alamat" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<label for="image_ktp">KTP</label>
					<input type="file" name="image_ktp" class="form-control">
				</div>
				<div class="form-group">
					<label for="no_hp">No HP</label>
					<input type="text" name="no_hp" class="form-control">
				</div>
				<button type="submit" class="btn btn-primary">Register</button>
			</form>
		</div>
	</div>
</div>


@endsection
