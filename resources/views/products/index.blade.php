@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">All Products</h2>
        <a href="#" class="btn btn-success btn-sm">+ Add Product</a> {{-- Optional --}}
    </div>

    <div class="card shadow-sm rounded-4">
        <div class="card-body">
            @if($products->count())
            <div class="table-responsive">
                <table class="table table-hover table-bordered align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Details</th>
                            <th>Price</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->detail }}</td>
                                <td>${{ number_format($product->price, 2) }}</td>
                                <td>{{ $product->created_at->format('Y-m-d') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
                <div class="alert alert-warning">No products found.</div>
            @endif
        </div>
    </div>
</div>
@endsection
