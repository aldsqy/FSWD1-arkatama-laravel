@extends('layout.dashboard')

@section('content')
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <form action="/testimoni/{{ $testimoni->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @if ($testimoni->foto)
            <div class="form-group row">
                <label for="current_foto" class="col-sm-2 col-form-label mb-3">Current Foto:</label>
                <div class="col-sm-10">
                    <img src="{{ asset('images/' . $testimoni->foto) }}" style="width: 35px; height: 35px; border-radius: 50%;" alt="Avatar">
                </div>
            </div>
        @endif
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
                    placeholder="Ketikkan nama..." value="{{ old('nama', $testimoni->nama) }}">
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
                    placeholder="Ketikkan jabatan..." value="{{ old('jabatan', $testimoni->jabatan) }}">
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
                        <option value="{{ $i }}" {{ old('rating', $testimoni->rating) == $i ? 'selected' : '' }}>
                            {{ $i }}
                        </option>
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
                <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="4" placeholder="Ketikkan deskripsi...">{{ old('deskripsi', $testimoni->deskripsi) }}</textarea>
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
                    <select name="status" class="form-control mb-3" required>
                        <option value="accepted" {{ $testimoni->status === 'accepted' ? 'selected' : '' }}>Accepted</option>
                        <option value="rejected" {{ $testimoni->status === 'rejected' ? 'selected' : '' }}>Rejected</option>
                        <option value="waiting" {{ $testimoni->status === 'waiting' ? 'selected' : '' }}>Waiting</option>
                    </select>
                </div>
            </div>
        @endif
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ url('/testimoni') }}" class="btn btn-danger">Batal</a>
            </div>
        </div>
    </form>
@endsection
