<!-- resources/views/home.blade.php -->
@extends('layout.dashboard')

@section('content')
<h4>Create New Produk</h4>
<form action="{{ route('grup.store') }}" method="POST">
  @csrf
  <div class="form-group">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" class="form-control" placeholder="Enter nama">
  </div>
  <div class="form-group">
    <label for="role">Pilih Role:</label>
    <select name="role" required>
        <option value="admin">Admin</option>
        <option value="staff">Staff</option>        
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection


