@extends('wolf.base')
@section('title', $product->name)
@section('content')
	<h1 style="float: left;">Product</h1>

	<div style="text-align: right; margin-bottom: 2rem;">
		<a href="{{ route('admin.product') }}" class="btn btn-secondary">Back</a>
		<a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-info">Edit</a>
		<button form="delete" class="btn btn-danger">Delete</button>
	</div>

	<form id="delete" action="{{ route('admin.product.destroy', $product->id) }}" method="post" style="display: none;">
		{{ csrf_field() }}
		{{ method_field('delete') }}
	</form>

	<table class="table table-hover">
		<thead>
			<tr>
				<th scope="col">Key</th>
				<th scope="col">Value</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th>ID</th>
				<td>{{ $product->id }}</td>
			</tr>
			<tr>
				<th>Name</th>
				<td>{{ $product->name }}</td>
			</tr>
			<tr>
				<th>Image</th>
				<td>
					<img src="{{ asset($product->image) }}" alt="" style="max-width: 100%">
				</td>
			</tr>
			<tr>
				<th>Price</th>
				<td>
					<span class="badge badge-success">UAH: {{ $product->price->uah }}</span> <br>
					<span class="badge badge-warning">USD: {{ $product->price->usd }}</span> <br>
					<span class="badge badge-info">EUR: {{ $product->price->eur }}</span>
				</td>
			</tr>
			<tr>
				<th>Created</th>
				<td>{{ $product->created_at }}</td>
			</tr>
			<tr>
				<th>Updated</th>
				<td>{{ $product->updated_at }}</td>
			</tr>
		</tbody>
	</table>
@endsection