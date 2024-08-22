@extends('layouts.master')
@section('title', $category->name)
@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10"> <!-- Increase the width of the column -->
      <div class="p-4 rounded" style="background-color: rgba(255, 255, 255, 0.75);">
        <h1 class="mb-4">Category Details</h1>

        @if (session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
        @endif

        <div class="row">
          <div class="col-md-6 mb-4">
            <img src="https://picsum.photos/200/300?random={{ $category->id }}" class="img-fluid" alt="Category Image" style="object-fit: cover;">
          </div>
          <div class="col-md-6 mb-4">
            <h2>{{ $category->name }}</h2>
            <p><strong>Description:</strong> {{ $category->description }}</p>

            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back to List</a>
          </div>
        </div>

        <!-- Products List -->
        <h3 class="mt-4">Products in This Category</h3>
        <div class="row">
          @forelse ($products as $product)
            <div class="col-md-4 mb-4 d-flex"> <!-- Use d-flex to control card height -->
              <div class="card w-100 d-flex flex-column"> <!-- Ensure cards take full width and flex column for equal height -->
                <img src="https://picsum.photos/200/300?random={{ $product->id }}" class="card-img-top" alt="Product Image">
                <div class="card-body flex-grow-1"> <!-- Ensure card body takes remaining space -->
                  <h5 class="card-title">{{ $product->product_name }}</h5>
                  <p class="card-text">{{ $product->product_description }}</p>
                  <p class="card-text"><strong>Price:</strong> ${{ number_format($product->product_price / 100, 2) }}</p>
                  <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">View Details</a>
                </div>
              </div>
            </div>
          @empty
            <p>No products found in this category.</p>
          @endforelse
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
