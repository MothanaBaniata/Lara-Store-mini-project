<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: linear-gradient(90deg, #a52a2a, #800000);">
  <a class="navbar-brand" href="{{ route('categories.index') }}" style="font-family: 'Georgia', serif; font-size: 1.5rem; font-weight: bold; color: #fff;">
    Lara Store
  </a>
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">
      <!-- Categories Link -->
      <li class="nav-item">
        <a class="nav-link text-light" href="{{ route('categories.index') }}">Categories</a>
      </li>
      <!-- Products Link -->
      <li class="nav-item">
        <a class="nav-link text-light" href="{{ route('products.index') }}">Products</a>
      </li>
    </ul>
    <div class="ml-auto">
      <!-- Add Product Button -->
      <a class="btn btn-light text-danger mr-2" href="{{ route('products.create') }}">Add Product</a>
      <!-- Add Category Button -->
      <a class="btn btn-light text-primary" href="{{ route('categories.create') }}">Add Category</a>
    </div>
  </div>
</nav>
<br><br><br>
