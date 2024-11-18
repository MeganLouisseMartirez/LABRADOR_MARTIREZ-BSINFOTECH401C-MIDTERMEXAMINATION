@extends('layouts.app')

@section('content')
<h1>Add New Product</h1>
<form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Product Name</label>
        <input type="text" class="form-control" name="name" id="name" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description" rows="3" required></textarea>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" step="0.01" class="form-control" name="price" id="price" required>
    </div>
    <div class="mb-3">
        <label for="stocks" class="form-label">Stocks</label>
        <input type="number" class="form-control" name="stocks" id="stocks" required>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" name="image" id="image">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
