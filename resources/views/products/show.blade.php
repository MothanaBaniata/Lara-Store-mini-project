@extends('layouts.master')
@section('title', $product->product_name)
@section('content')

<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="p-4 rounded" style="background-color: rgba(255, 255, 255, 0.75);">
      <h1 class="mb-4">Product Details</h1>

      @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
      @endif

      <div class="row">
        <div class="col-md-6 mb-4">
          <img src="https://picsum.photos/200/300?random={{ $product->id }}" class="img-fluid" alt="Product Image" style="object-fit: cover;">
        </div>
        <div class="col-md-6 mb-4">
          <h2>{{ $product->product_name }}</h2>
          <p><strong>Description:</strong> {{ $product->product_description }}</p>
          <p><strong>Price:</strong> ${{ number_format($product->product_price, 2) }}</p>

          <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
          <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection