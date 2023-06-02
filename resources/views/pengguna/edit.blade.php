@extends('layout.dashboard')

@section('content')
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <form action="/pengguna/{{ $pengguna->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @if ($pengguna->avatar)
            <div class="form-group row">
                <label for="current_avatar" class="col-sm-2 col-form-label mb-3">Current Avatar:</label>
                <div class="col-sm-10">
                    <img src="{{ asset('images/' . $pengguna->avatar) }}" style="width: 40px;">
                </div>
            </div>
        @endif
        <div class="form-group row">
            <label for="avatar" class="col-sm-2 col-form-label mb-3">Avatar:</label>
            <div class="col-sm-10">
                <input type="file" name="avatar" class="form-control-file mb-3">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label mb-3">Email:</label>
            <div class="col-sm-10">
                <input type="text" name="email" class="form-control mb-3 @error('nama') is-invalid @enderror"
                    placeholder="Enter email" value="{{ old('nama', $pengguna->email) }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label mb-3">Nama:</label>
            <div class="col-sm-10">
                <input type="text" name="nama" class="form-control mb-3 @error('nama') is-invalid @enderror"
                    placeholder="Enter nama" value="{{ old('nama', $pengguna->nama) }}">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="role" class="col-sm-2 col-form-label mb-3">Pilih Role:</label>
            <div class="col-sm-10">
                <select name="role" class="form-control mb-3" required>
                    <option value="User" {{ $pengguna->role === 'user' ? 'selected' : '' }}>User</option>
                    <option value="Staff" {{ $pengguna->role === 'staff' ? 'selected' : '' }}>Staff</option>
                    <option value="Admin" {{ $pengguna->role === 'admin' ? 'selected' : '' }}>Admin</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="phone" class="col-sm-2 col-form-label mb-3">Phone:</label>
            <div class="col-sm-10">
                <input type="text" name="phone" class="form-control mb-3 @error('nama') is-invalid @enderror"
                    placeholder="Enter phone" value="{{ old('nama', $pengguna->phone) }}">
                    @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="address" class="col-sm-2 col-form-label mb-3">Address:</label>
            <div class="col-sm-10">
                <input type="text" name="address" class="form-control mb-3 @error('nama') is-invalid @enderror"
                    placeholder="Enter address" value="{{ old('nama', $pengguna->address) }}">
                    @error('address')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label mb-3">Password:</label>
            <div class="col-sm-10">
                <input type="password" name="password" class="form-control mb-3 @error('nama') is-invalid @enderror"
                    placeholder="Enter password" value="{{ old('nama', $pengguna->password) }}">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
