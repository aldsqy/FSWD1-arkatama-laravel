<!-- resources/views/home.blade.php -->
@extends('layout.dashboard')

@section('content')
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <form action="{{ route('grup.store') }}" method="POST">
        @csrf
        <div class="form-group row">
            <label for="role" class="col-sm-2 col-form-label mb-3">Pilih Role:</label>
            <div class="col-sm-10">
                <select name="role" class="form-control" required>
                    <option value="admin">User</option>
                    <option value="staff">Staff</option>
                    <option value="staff">Admin</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
