<!-- resources/views/home.blade.php -->
@extends('layout.dashboard')

@section('content')
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="banner" class="col-sm-2 col-form-label mb-3">Banner:</label>
            <div class="col-sm-10 mb-3">
                <input type="file" name="banner" class="form-control @error('banner') is-invalid @enderror" placeholder="Ketikkan nama banner..." value="{{ old('banner') }}">
                @error('banner')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label mb-3">Nama:</label>
            <div class="col-sm-10 mb-3">
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                    value="{{ old('nama') }}" placeholder="Ketikkan nama...">
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="url" class="col-sm-2 col-form-label mb-3">URL:</label>
            <div class="col-sm-10 mb-3">
                <input type="url" name="url" class="form-control @error('url') is-invalid @enderror"
                    value="{{ old('url') }}" placeholder="Ketikkan link URL...">
                @error('url')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ url('/slider') }}" class="btn btn-danger">Batal</a>
            </div>
        </div>
    </form>
@endsection
