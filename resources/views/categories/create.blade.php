@extends('layouts.master')
@section('title','Add Category')

@section('content')

<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="p-4 rounded" style="background-color: rgba(255, 255, 255, 0.75);">
      <h1 class="mb-4">Add New Category</h1>

      @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
      @endif

      <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="category_name">Category Name</label>
          <input type="text" id="category_name" name="category_name" class="form-control form-control-sm" value="{{ old('category_name') }}" required>
        </div>

        <div class="form-group">
          <label for="category_description">Category Description</label>
          <textarea id="category_description" name="category_description" class="form-control form-control-sm" rows="4" required>{{ old('category_description') }}</textarea>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-sm">Save Category</button>
          <a href="{{ route('categories.index') }}" class="btn btn-secondary btn-sm">Cancel</a>
        </div>
      </form>
    </div>
  </div>
</div>


@endsection