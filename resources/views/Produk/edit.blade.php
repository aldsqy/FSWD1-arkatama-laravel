<!-- resources/views/home.blade.php -->
@extends('layout.dashboard')

@section('content')
<h4>Create New Category</h4>
<form action="/produks/{{$produk->id}}" method="POST">
  @method('put')
  @csrf
  <div class="form-group">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" class="form-control" placeholder="Enter category" value="{{$produk->nama}}">
  </div>
  <div class="form-group">
    <label for="deskripsi">Deskripsi:</label>
    <input type="text" name="deskripsi" class="form-control" placeholder="Enter deskripsi" value="{{$produk->deskripsi}}">
  </div>
  <div class="form-group">
    <label for="harga">Harga:</label>
    <input type="text" name="harga" class="form-control" placeholder="Enter harga" value="{{$produk->harga}}">
  </div>
  <div class="form-group">
    <label for="status">Pilih Status:</label>
    <select name="status" required>
        <option value="accepted" {{ $produk->status === 'accepted' ? 'selected' : '' }}>Accepted</option>
        <option value="rejected" {{ $produk->status === 'rejected' ? 'selected' : '' }}>Rejected</option>
        <option value="waiting" {{ $produk->status === 'waiting' ? 'selected' : '' }}>Waiting</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
