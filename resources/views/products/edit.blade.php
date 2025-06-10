@extends('layouts.default')

@section('content')
<div class="container py-4">
    <h2 class="mb-4 fw-bold">Edit Product</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Product Title</label>
            <input type="text" name="title" class="form-control" value="{{ $product->title }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Product Details</label>
            <textarea name="detail" class="form-control" rows="3" required>{{ $product->detail }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Price ($)</label>
            <input type="number" name="price" class="form-control" value="{{ $product->price }}" step="0.01" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Product</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
