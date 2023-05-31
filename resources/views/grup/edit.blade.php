<!-- resources/views/home.blade.php -->
@extends('layout.dashboard')

@section('content')
<h4>Create New Category</h4>
<form action="/grup/{{$grup->id}}" method="POST">
  @method('put')
  @csrf
  <div class="form-group">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" class="form-control" placeholder="Enter category" value="{{$grup->nama}}">
  </div>
  <div class="form-group">
    <label for="role">Pilih role:</label>
    <select name="role" required>
        <option value="admin" {{ $grup->role === 'accepted' ? 'selected' : '' }}>Admin</option>
        <option value="staff" {{ $grup->role === 'rejected' ? 'selected' : '' }}>Staff</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
