@extends('layouts.master')

@section('content')

<div class="p-4 rounded mb-4" style="background-color: rgba(255, 255, 255, 0.75);">
  <h1 class="mb-2">Category List</h1>

  @if (session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
  @endif
</div>

<div class="row">
  @foreach ($categories as $index => $category)
  <div class="col-md-3 mb-4">
    <div class="card" style="width: 100%; height: 400px;">
      <a href="{{ route('categories.show', $category->id) }}">
        <img src="https://picsum.photos/200/300?random={{ $category->id }}" class="card-img-top" alt="Category Image" style="object-fit: cover; height: 200px;">
      </a>
      <div class="card-body d-flex flex-column justify-content-between" style="height: calc(100% - 200px);">
        <div>
          <h5 class="card-title">{{ $category->name }}</h5>
          <p class="card-text">{{ \Illuminate\Support\Str::limit($category->description, 80) }}</p>
        </div>
        <div>
          <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info btn-sm">View</a>
          <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
          <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
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
