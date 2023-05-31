<!-- resources/views/home.blade.php -->
@extends('layout.dashboard')

@section('content')
<h4>Create New Produk</h4>
<form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="banner">Banner:</label>
    <input type="file" name="banner" class="form-control" placeholder="Enter banner">
  </div>
  <div class="form-group">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" class="form-control" placeholder="Enter nama">
  </div>
  <div class="form-group">
    <label for="url">URL:</label>
    <input type="url" name="url" class="form-control" placeholder="Enter URL">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection


