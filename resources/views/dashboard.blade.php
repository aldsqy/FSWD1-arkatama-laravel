<!-- resources/views/home.blade.php -->
@extends('layout.dashboard')

@section('content')
<h1 class="mt-4">Dashboard</h1>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item active">Dashboard</li>
</ol>
<div class="row">
  @foreach ($products as $product)
  <div class="col-md-4 mb-4">
      <div class="card">
          <img class="card-img-top" src="{{ $product['image'] }}" alt="{{ $product['name'] }}">
          <div class="card-body">
            <h5 class="card-title">{{ $product['name'] }}</h5>
            <p class="card-text">{{ $product['description'] }}</p>
          </div>
      </div>
  </div>
  @endforeach
</div>
@endsection
