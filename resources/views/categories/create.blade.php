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
          <label for="name">Category Name</label>
          <input type="text" id="name" name="name" class="form-control form-control-sm" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
          <label for="description">Category Description</label>
          <textarea id="description" name="description" class="form-control form-control-sm" rows="4" required>{{ old('description') }}</textarea>
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
