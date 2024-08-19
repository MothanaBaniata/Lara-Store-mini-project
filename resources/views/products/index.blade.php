@extends('layouts.master')

@section('content')

<div class="p-4 rounded mb-4" style="background-color: rgba(255, 255, 255, 0.75);">
  <h1 class="mb-2">Product List</h1>

  @if (session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
  @endif
</div>

<div class="row">
  @foreach ($products as $index => $product)
  <div class="col-md-3 mb-4">
    <div class="card" style="width: 100%; height: 400px;">
      <a href="{{ route('products.show', $product->id) }}">
        <img src="https://picsum.photos/200/300?random={{ $product->id }}" class="card-img-top" alt="Product Image" style="object-fit: cover; height: 200px;">
      </a>
      <div class="card-body d-flex flex-column justify-content-between" style="height: calc(100% - 200px);">
        <div>
          <h5 class="card-title">{{ $product->product_name }}</h5>
          <p class="card-text">{{ \Illuminate\Support\Str::limit($product->product_description, 80) }}</p>
        </div>
        <div>
          <p class="card-text"><strong>${{ number_format($product->product_price, 2) }}</strong></p>
          <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">View</a>
          <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
          <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>


@endsection