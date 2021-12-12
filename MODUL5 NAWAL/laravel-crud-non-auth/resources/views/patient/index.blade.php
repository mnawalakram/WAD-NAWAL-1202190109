@extends('templates.app')

@section('content')

<div class="container">

	@if($data_patient->isEmpty())

	<div class="row mt-5">
		<div class="col-12 text-center">
			<p>There is no data....</p>
			<a href="{{ route('patients.vaccines') }}" class="btn btn-primary">Register Patient</a>
		</div>
	</div>

	@else

	<div class="text-center mt-3">
		<h4>List Patient</h4>
	</div>

	<div class="row mt-5">
		<div class="col-12">
			<a href="{{ route('patients.vaccines') }}" class="btn btn-primary">Register Patient</a>
			<table class="table table-striped table-bordered mt-3">
				<thead style="background-color: aquamarine;">
					<tr>
						<th>#</th>
						<th>Vaccine</th>
						<th>Name</th>
						<th>NIK</th>
						<th>Alamat</th>
						<th>No HP</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody style="background-color: aquamarine;">
					@foreach ($data_patient as $data)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{ $data->vaccine->name }}</td>
						<td>{{ $data->name }}</td>
						<td>{{ $data->nik }}</td>
						<td>{{ $data->alamat }}</td>
						<td>{{ $data->no_hp }}</td>
						<td width="200px">
							<a href="{{ route('patients.edit', $data->id) }}" class="btn btn-warning ml-4">Edit</a>
							<form action="{{ route('patients.delete', $data->id) }}}" class="float-right mr-4" method="POST">
								@csrf
								<input type="hidden" name="id" value="{{ $data->id }}">
								<button class="btn btn-danger" type="submit">Delete</button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>


	@endif

	@endsection
