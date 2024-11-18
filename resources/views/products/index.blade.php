@extends('layouts.app')

@section('content')
<div class="container bg-light py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <img src="{{ asset('images/gold_logo.png') }}" alt="Logo" class="mr-3" style="width: 100px; height: auto;">
        <h3 style="color: #FBB117">GOLDILOCK'S PRODUCTS</h3>
        <a href="{{ route('products.create') }}" class="btn btn-warning">Add Product</a>
    </div>

    @if(session('success'))
        <div class="alert alert-warning">
            {{ session('success') }}
        </div>
    @endif

    @if ($products->isEmpty())
        <p>No products available.</p>
    @else
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        @if ($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                        @else
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Placeholder">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text"><strong>Price:</strong> ₱ {{ number_format($product->price, 2) }}</p>
                            <p class="card-text"><strong>Stocks:</strong> {{ $product->stocks }}</p>
                            <a href="{{ route('products.show', $product) }}" class="btn btn-primary">View</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
