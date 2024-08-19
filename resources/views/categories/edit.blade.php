@extends('layouts.master')
@section('title', $category->category_name)
@section('content')

<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="p-4 rounded" style="background-color: rgba(255, 255, 255, 0.75);">
      <h1 class="mb-4">Edit Category</h1>

      @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
      @endif

      <div class="bg-white p-4 rounded">
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
          @csrf
          @method('PUT')

          <div class="form-group">
            <label for="category_name">Category Name</label>
            <input type="text" id="category_name" name="category_name" class="form-control form-control-sm" value="{{ old('category_name', $category->category_name) }}" required>
          </div>

          <div class="form-group">
            <label for="category_description">Category Description</label>
            <textarea id="category_description" name="category_description" class="form-control form-control-sm" rows="4" required>{{ old('category_description', $category->category_description) }}</textarea>
          </div>
          
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-sm">Update Category</button>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary btn-sm">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection