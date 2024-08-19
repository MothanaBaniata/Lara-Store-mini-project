@extends('layouts.master')
@section('title', $category->category_name)
@section('content')

<div class="row justify-content-center">
  <div class="col-md-8">
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
          <h2>{{ $category->category_name }}</h2>
          <p><strong>Description:</strong> {{ $category->category_description }}</p>
          
          <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
          <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection