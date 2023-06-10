<!-- resources/views/home.blade.php -->
@extends('layout.dashboard')

@section('content')
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <form action="{{ route('testimoni.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="foto" class="col-sm-2 col-form-label mb-3">Foto:</label>
            <div class="col-sm-10">
                <input type="file" name="foto" class="form-control mb-3">
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
            <label for="jabatan" class="col-sm-2 col-form-label mb-3">Jabatan:</label>
            <div class="col-sm-10 mb-3">
                <input type="text" name="jabatan" class="form-control @error('jabatan') is-invalid @enderror"
                    value="{{ old('jabatan') }}" placeholder="Ketikkan jabatan...">
                @error('jabatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="rating" class="col-sm-2 col-form-label mb-3">Rating:</label>
            <div class="col-sm-10 mb-3">
                <select name="rating" class="form-control @error('rating') is-invalid @enderror">
                    <option value="">Pilih rating</option>
                    @for ($i = 1; $i <= 5; $i++)
                        <option value="{{ $i }}" {{ old('rating') == $i ? 'selected' : '' }}>{{ $i }}</option>
                    @endfor
                </select>
                @error('rating')
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
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ url('/testimoni') }}" class="btn btn-danger">Batal</a>
            </div>
        </div>
    </form>
@endsection
