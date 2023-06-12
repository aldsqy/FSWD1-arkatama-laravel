<!-- resources/views/home.blade.php -->
@extends('layout.dashboard')

@section('content')
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <form action="{{ route('kategori.store') }}" method="POST">
        @csrf
        <div class="form-group row">
            <label for="kategori" class="col-sm-2 col-form-label mb-3">Kategori:</label>
            <div class="col-sm-10 mb-3">
                <input type="text" name="kategori" class="form-control @error('kategori') is-invalid @enderror"
                    value="{{ old('kategori') }}" placeholder="Ketikkan category...">
                @error('kategori')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="deskripsi" class="col-sm-2 col-form-label mb-3">Deskripsi:</label>
            <div class="col-sm-10 mb-3">
                <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="4"
                    placeholder="Ketikkan deskripsi...">{{ old('deskripsi') }}</textarea>
                @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        @if (Auth::user()->role === 'staff')
            <input type="hidden" name="status" value="waiting">
        @elseif (Auth::user()->role === 'admin')
            <div class="form-group row">
                <label for="status" class="col-sm-2 col-form-label mb-3">Pilih Status:</label>
                <div class="col-sm-10">
                    <select name="status" class="form-control" required>
                        <option value="accepted">Accepted</option>
                        <option value="rejected">Rejected</option>
                        <option value="waiting">Waiting</option>
                    </select>
                </div>
            </div>
        @endif
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ url('/kategori') }}" class="btn btn-danger">Batal</a>
            </div>
        </div>
    </form>
@endsection
