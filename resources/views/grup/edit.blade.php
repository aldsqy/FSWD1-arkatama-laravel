<!-- resources/views/home.blade.php -->
@extends('layout.dashboard')

@section('content')
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <form action="/grup/{{ $grup->id }}" method="POST">
        @method('put')
        @csrf
        <div class="form-group row">
            <label for="role" class="col-sm-2 col-form-label mb-3">Pilih role:</label>
            <div class="col-sm-10">
                <select name="role" class="form-control" required>
                    <option value="user" {{ $grup->role === 'user' ? 'selected' : '' }}>User</option>
                    <option value="staff" {{ $grup->role === 'staff' ? 'selected' : '' }}>Staff</option>
                    <option value="admin" {{ $grup->role === 'admin' ? 'selected' : '' }}>Admin</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ url('/grup') }}" class="btn btn-danger">Batal</a>
            </div>
        </div>
    </form>
@endsection
