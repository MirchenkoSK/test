@extends('wolf.base')
@section('title', 'Products')
@section('content')
	<h1 style="float: left;">Products</h1>

	<div style="text-align: right; margin-bottom: 2rem;">
		<a href="{{ route('admin.product.create') }}" class="btn btn-success">Create</a>
	</div>

	<table class="table table-hover">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Image</th>
				<th scope="col">Name</th>
				<th scope="col">Price</th>
				<th scope="col">Functions</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($products as $product)
				<tr>
					<th scope="row">{{ $product->id }}</th>
					<td>
						<img src="{{ asset($product->image) }}" style="border-radius: 500rem; width: 32px; height: 32px" alt="">
					</td>
					<td>{{ $product->name }}</td>
					<td>
						<span class="badge badge-success">UAH: {{ $product->price->uah }}</span>
						<span class="badge badge-warning">USD: {{ $product->price->usd }}</span>
						<span class="badge badge-info">EUR: {{ $product->price->eur }}</span>
					</td>
					<td>
						<a href="{{ route('admin.product.show', $product->id) }}" class="btn btn-primary btn-sm">Info</a>
						<a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-info btn-sm">Edit</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection