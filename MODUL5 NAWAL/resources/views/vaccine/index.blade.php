@extends('templates.app')

@section('content')

<div class="container">

	@if($data_vaccine->isEmpty())

	<div class="row mt-5">
		<div class="col-12 text-center">
			<p>There is no data....</p>
			<a href="{{ route('vaccines.create') }}" class="btn btn-primary">Add Vaccine</a>
		</div>
	</div>

	@else
	<div class="text-center mt-3">
		<h4>List Vaccine</h4>
	</div>

	<div class="row mt-5 mb-5">
		<div class="col-12">
			<a href="{{ route('vaccines.create') }}" class="btn btn-primary">Add Vaccine</a>
			<table class="table table-striped table-bordered mt-3">
				<thead style="background-color: aquamarine;">
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Price</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody style="background-color: aquamarine;">
					<?php $no=1; ?>
					@foreach ($data_vaccine as $data)
					<tr>
						<td>{{ $no++ }}</td>
						<td>{{ $data->name }}</td>
						<td>Rp. {{ $data->price }}</td>
						<td>
							<a href="{{ route('vaccines.edit', $data->id) }}" class="btn btn-warning float-left mr-2">Edit</a>
							<form action="{{ route('vaccines.delete', $data->id) }}}" class="float-left" method="POST">
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
