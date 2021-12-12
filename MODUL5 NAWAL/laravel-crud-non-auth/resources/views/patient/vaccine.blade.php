@extends('templates.app')

@section('content')

<div class="container">
	<div class="text-center mt-3">
		<h4>List Vaccine</h4>
	</div>

	<div class="row mt-5 mb-5">
		<div class="col-12">
			@foreach ($data_vaccine as $data)
			<div class="card" style="width: 320px;">
				<img src="/gambar/{{ $data->image }}" class="card-img-top">
				<div class="card-body">
					<h5><b>{{ $data->name }}</b></h5>
					<p>Rp. {{ $data->price }}</p>
					<p style="font-size: 0.9em;">{{ $data->description }}</p>
				</div>
				<form action="{{ route('patients.create') }}" method="POST">
					@csrf
					<input type="hidden" name="id" value="{{ $data->id }}">
					<input type="hidden" name="name" value="{{ $data->name }}">
					<button type="submit" class="btn btn-primary w-100">Vaccine Now</button>
				</form>
			</div>
			@endforeach
		</div>
	</div>
</div>


@endsection
