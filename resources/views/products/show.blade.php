@extends('layouts.app')

@section('content')
<h1>{{ $product->name }}</h1>

<div class="card mb-4">
    <div class="card-body">
        <div class="text-center">
            @if ($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid rounded mb-3" style="max-width: 300px;">
            @else
                <img src="https://via.placeholder.com/300" alt="Placeholder" class="img-fluid rounded mb-3">
            @endif
        </div>

        <p><strong>Description:</strong> {{ $product->description }}</p>
        <p><strong>Price:</strong> ₱ {{ number_format($product->price, 2) }}</p>
        <p><strong>Stocks:</strong> {{ $product->stocks }}</p>

        <div class="mt-3 d-flex justify-content-start gap-2">
            <a href="{{ route('products.edit', $product) }}" class="btn btn-primary">Edit</a>

            <form method="POST" action="{{ route('products.destroy', $product) }}" onsubmit="return confirm('Are you sure you want to delete this product?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>

            <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Menu</a>
        </div>
    </div>
</div>
@endsection
