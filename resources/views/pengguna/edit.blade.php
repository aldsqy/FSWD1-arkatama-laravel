@extends('dashboardtemplate')

@section('content')
<h4>Edit Pengguna</h4>
<form action="/pengguna/{{$pengguna->id}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  @if ($pengguna->avatar)
  <div class="form-group">
      <label for="current_avatar">Current Avatar:</label>
      <br>
      <img src="{{ asset('images/'.$pengguna->avatar)}}" style="width: 40px;">
  </div>
  @endif
  <div class="form-group">
      <label for="avatar">Avatar:</label>
      <input type="file" name="avatar" class="form-control" placeholder="Upload avatar">
  </div>
  <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" name="email" class="form-control" placeholder="Enter email" value="{{$pengguna->email}}">
  </div>
  <div class="form-group">
      <label for="nama">Nama:</label>
      <input type="text" name="nama" class="form-control" placeholder="Enter nama" value="{{$pengguna->nama}}">
  </div>
  <div class="form-group">
      <label for="role">Pilih Role:</label>
      <select name="role" required>
          <option value="admin" {{ $pengguna->role === 'admin' ? 'selected' : '' }}>Admin</option>
          <option value="staff" {{ $pengguna->role === 'staff' ? 'selected' : '' }}>Staff</option>
      </select>
  </div>
  <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="text" name="phone" class="form-control" placeholder="Enter phone" value="{{$pengguna->phone}}">
  </div>
  <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" name="address" class="form-control" placeholder="Enter address" value="{{$pengguna->address}}">
  </div>
  <div class="form-group">
      <label for="password">Password:</label>
      <input type="text" name="password" class="form-control" placeholder="Enter password" value="{{$pengguna->password}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
