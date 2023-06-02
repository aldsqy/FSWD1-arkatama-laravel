@extends('layout.dashboard')

@section('content')
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <form action="/slider/{{ $slider->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @if ($slider->banner)
            <div class="form-group row">
                <label for="current_banner" class="col-sm-2 col-form-label mb-3">Current Banner:</label>
                <div class="col-sm-10">
                    <img src="{{ asset('images/' . $slider->banner) }}" style="width: 300px;">
                </div>
            </div>
        @endif
        <br>
        <div class="form-group row">
            <label for="banner" class="col-sm-2 col-form-label mb-3">Banner:</label>
            <div class="col-sm-10">
                <input type="file" name="banner" class="form-control-file mb-3" placeholder="Upload banner">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label mb-3">Nama:</label>
            <div class="col-sm-10">
                <input type="text" name="nama" class="form-control mb-3  @error('nama') is-invalid @enderror"
                    placeholder="Enter nama" value="{{ old('nama', $slider->nama) }}">
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="URL" class="col-sm-2 col-form-label mb-3">URL:</label>
            <div class="col-sm-10">
                <input type="text" name="url" class="form-control mb-3  @error('url') is-invalid @enderror"
                    placeholder="Enter URL" value="{{ old('url', $slider->url) }}">
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
            </div>
        </div>
    </form>
@endsection
