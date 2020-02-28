@extends('wolf.base')
@section('title', 'Create product')
@section('content')
	<h1 style="float: left;">Create</h1>

	<div style="text-align: right; margin-bottom: 2rem;">
		<a href="{{ route('admin.product') }}" class="btn btn-secondary">Back</a>
	</div>

	<form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}

		<fieldset>
			<div class="form-group @error('name') has-danger @enderror">
				<label for="name">Name</label>
				<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Product name" minlength="3" required>
				@error('name')
					<div class="invalid-feedback">{{ $message }}</div>
				@enderror
			</div>

			<div class="form-group @error('image') has-danger @enderror">
				<label for="image">Image</label>
				<div class="custom-file @error('image') is-invalid @enderror">
					<input type="file" class="custom-file-input" id="image" name="image" required>
					<label class="custom-file-label" for="image">Choose file</label>
				</div>
				@error('image')
					<div class="invalid-feedback">{{ $message }}</div>
				@enderror
			</div>

			<div class="form-group @error('price') has-danger @enderror">
				<label for="price">Price</label>
				<input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') ? old('price') : 1 }}" min="0" max="999999999.99" step="0.01" placeholder="Product price" required>
				@error('price')
					<div class="invalid-feedback">{{ $message }}</div>
				@enderror
			</div>
			<button type="submit" class="btn btn-success">Create</button>
		</fieldset>

	</form>
@endsection