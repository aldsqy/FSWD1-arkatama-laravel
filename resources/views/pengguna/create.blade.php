<!-- resources/views/home.blade.php -->
@extends('layout.dashboard')

@section('content')
<h4>Create New Produk</h4>
<form action="{{ route('pengguna.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="avatar">Avatar:</label>
    <input type="file" name="avatar" class="form-control" placeholder="Enter avatar">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="text" name="email" class="form-control" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" class="form-control" placeholder="Enter nama">
  </div>
  <div class="form-group">
    <label for="role">Pilih Role:</label>
    <select name="role" required>
        <option value="user">User</option>
        <option value="staff">Staff</option>
        <option value="admin">Admin</option>
    </select>
  </div>
  <div class="form-group">
    <label for="phone">Phone:</label>
    <input type="text" name="phone" class="form-control" placeholder="Enter phone">
  </div>
  <div class="form-group">
    <label for="address">Address:</label>
    <input type="text" name="address" class="form-control" placeholder="Enter address">
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="text" name="password" class="form-control" placeholder="Enter password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection


