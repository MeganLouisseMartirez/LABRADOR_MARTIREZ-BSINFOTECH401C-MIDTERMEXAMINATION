@extends('layouts.app')

@section('content')
<h1>Edit Product</h1>

<form method="POST" action="{{ route('products.update', $product) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="name" class="form-label">Product Name</label>
        <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $product->name) }}" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description" rows="3" required>{{ old('description', $product->description) }}</textarea>
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" step="0.01" class="form-control" name="price" id="price" value="{{ old('price', $product->price) }}" required>
    </div>

    <div class="mb-3">
        <label for="stocks" class="form-label">Stocks</label>
        <input type="number" class="form-control" name="stocks" id="stocks" value="{{ old('stocks', $product->stocks) }}" required>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Product Image</label>
        @if ($product->image)
            <div class="mb-2">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-thumbnail" width="150">
            </div>
        @endif
        <input type="file" class="form-control" name="image" id="image">
    </div>

    <button type="submit" class="btn btn-primary">Update Product</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
