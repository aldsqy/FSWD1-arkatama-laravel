<!-- resources/views/home.blade.php -->
@extends('dashboardtemplate')

@section('content')
<h4>Create New Category</h4>
<form action="{{ route('produk.store') }}" method="POST">
  @csrf
  <div class="form-group">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" class="form-control" placeholder="Enter category">
  </div>
  <div class="form-group">
    <label for="deskripsi">Deskripsi:</label>
    <input type="text" name="deskripsi" class="form-control" placeholder="Enter deskripsi">
  </div>
  <div class="form-group">
    <label for="harga">Harga:</label>
    <input type="text" name="harga" class="form-control" placeholder="Enter harga">
  </div>
  <div class="form-group">
    <label for="status">Pilih Status:</label>
    <select name="status" required>
        <option value="accepted">Accepted</option>
        <option value="rejected">Rejected</option>
        <option value="waiting">Waiting</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection


