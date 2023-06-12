@extends('layout.dashboard')

@section('content')
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="gambar" class="col-sm-2 col-form-label mb-3">Gambar:</label>
            <div class="col-sm-10 mb-3">
                <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror"
                    value="{{ old('gambar') }}">
                @error('gambar')
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
                    value="{{ old('nama') }}" placeholder="Ketikkan nama produk...">
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="kategori_id" class="col-sm-2 col-form-label mb-3">Pilih kategori:</label>
            <div class="col-sm-10 mb-3">
                <select name="kategori_id" class="form-control @error('kategori_id') is-invalid @enderror">
                    <option value="" disabled selected>Pilih Kategori</option>
                    @foreach ($kategori as $item)
                        <option value="{{ $item->id }}" {{ old('kategori_id') == $item->id ? 'selected' : '' }}>{{ $item->kategori }}</option>
                    @endforeach
                </select>
                @error('kategori_id')
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
            <label for="harga" class="col-sm-2 col-form-label mb-3">Harga:</label>
            <div class="col-sm-10 mb-3">
                <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror"
                    value="{{ old('harga') }}" placeholder="Ketikkan harga...">
                @error('harga')
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
                <a href="{{ url('/produks') }}" class="btn btn-danger">Batal</a>
            </div>
        </div>
    </form>
@endsection
