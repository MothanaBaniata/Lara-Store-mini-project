@extends('layouts.master')
@section('title', $category->name)
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
            <label for="name">Category Name</label>
            <input type="text" id="name" name="name" class="form-control form-control-sm" value="{{ old('name', $category->name) }}" required>
          </div>

          <div class="form-group">
            <label for="description">Category Description</label>
            <textarea id="description" name="description" class="form-control form-control-sm" rows="4" required>{{ old('description', $category->description) }}</textarea>
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
