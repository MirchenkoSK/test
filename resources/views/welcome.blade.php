@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Products</div>

                <div class="card-body">
                    
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
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
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $products->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
