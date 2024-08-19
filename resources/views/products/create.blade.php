@extends('layouts.master')
@section('title','Add Product')

@section('content')

<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="p-4 rounded" style="background-color: rgba(255, 255, 255, 0.75);">
      <h1 class="mb-4">Add New Product</h1>

      @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
      @endif

      <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="product_name">Product Name</label>
          <input type="text" id="product_name" name="product_name" class="form-control form-control-sm" value="{{ old('product_name') }}" required>

          <label for="product_price">Product Price</label>
          <input type="number" id="product_price" name="product_price" class="form-control form-control-sm" step="0.01" value="{{ old('product_price') }}" required>
        </div>

        <div class="form-group">
          <label for="product_description">Product Description</label>
          <textarea id="product_description" name="product_description" class="form-control form-control-sm" rows="4" required>{{ old('product_description') }}</textarea>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-sm">Save Product</button>
          <a href="{{ route('products.index') }}" class="btn btn-secondary btn-sm">Cancel</a>
        </div>
      </form>
    </div>
  </div>
</div>


@endsection