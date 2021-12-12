@extends('templates.app')

@section('content')

<div class="container">
	<h3 class="text-center mt-5">Edit {{ $data_vaccine->name }} Patient</h3>

	<div class="row mt-5 mb-5">
		<div class="col-12">
			<form action="{{ route('patients.update', $data_patient->id) }}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label for="vaccine_id">Vaccine Id</label>
					<input type="text" name="vaccine_id" value="{{ $data_patient->vaccine_id }}" class="form-control" readonly>
				</div>
				<div class="form-group">
					<label for="name">Patient Name</label>
					<input type="text" name="name" value="{{ $data_patient->name }}" class="form-control">
				</div>
				<div class="form-group">
					<label for="nik">NIK</label>
					<input type="text" name="nik" value="{{ $data_patient->nik }}" class="form-control">
				</div>
				<div class="form-group">
					<label for="alamat">Address</label>
					<textarea name="alamat" class="form-control">{{ $data_patient->alamat }}</textarea>
				</div>
				<div class="form-group">
					<label for="image_ktp">KTP</label>
					<input type="file" name="image_ktp" class="form-control">
				</div>
				<div class="form-group">
					<label for="no_hp">No HP</label>
					<textarea name="no_hp" class="form-control">{{ $data_patient->no_hp }}</textarea>
				</div>
				<button type="submit" class="btn btn-primary">Update</button>
			</form>
		</div>
	</div>
</div>


@endsection
