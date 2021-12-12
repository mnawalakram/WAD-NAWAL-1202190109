@extends('templates.app')

@section('content')

<div class="container">
	<div class="text-center mt-3">
		<h4>Input Vaccine</h4>
	</div>

	<div class="row mt-5">
		<div class="col-12">
			<form action="{{ route('vaccines.store') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label>Vaccine Name</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label>Price</label>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">Rp.</span>
						</div>
						<input type="text" name="price" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label>Description</label>
					<textarea name="description" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<label>Image</label>
					<input type="file" name="image" class="form-control">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>


@endsection
