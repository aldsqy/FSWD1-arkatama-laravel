<!-- resources/views/home.blade.php -->
@extends('layout.dashboard')

@section('content')
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <form action="/produks/{{ $produk->id }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label mb-3">Nama:</label>
            <div class="col-sm-10 mb-3">
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                    placeholder="Enter category" value="{{ old('nama', $produk->nama) }}">
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="deskripsi" class="col-sm-2 col-form-label mb-3">Deskripsi:</label>
            <div class="col-sm-10 mb-3">
                <input type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"
                    placeholder="Enter deskripsi" value="{{ old('deskripsi', $produk->deskripsi) }}">
                @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="harga" class="col-sm-2 col-form-label mb-3">Harga:</label>
            <div class="col-sm-10 mb-3">
                <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror"
                    placeholder="Enter harga" value="{{ old('harga', $produk->harga) }}">
                @error('harga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="status" class="col-sm-2 col-form-label mb-3">Pilih Status:</label>
            <div class="col-sm-10">
                <select name="status" class="form-control mb-3" required>
                    <option value="accepted" {{ $produk->status === 'accepted' ? 'selected' : '' }}>Accepted</option>
                    <option value="rejected" {{ $produk->status === 'rejected' ? 'selected' : '' }}>Rejected</option>
                    <option value="waiting" {{ $produk->status === 'waiting' ? 'selected' : '' }}>Waiting</option>
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
