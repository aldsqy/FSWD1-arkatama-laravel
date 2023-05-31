@extends('layout.dashboard')

@section('content')
<h4>Edit Slider</h4>
<form action="/slider/{{$slider->id}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  @if ($slider->banner)
  <div class="form-group">
      <label for="current_banner">Current Banner:</label>
      <br>
      <img src="{{ asset('images/'.$slider->banner)}}" style="width: 300px;">
  </div>
  @endif
  <div class="form-group">
      <label for="banner">Banner:</label>
      <input type="file" name="banner" class="form-control" placeholder="Upload banner">
  </div>
  <div class="form-group">
      <label for="nama">Nama:</label>
      <input type="text" name="nama" class="form-control" placeholder="Enter nama" value="{{$slider->nama}}">
  </div>
  <div class="form-group">
      <label for="URL">URL:</label>
      <input type="text" name="url" class="form-control" placeholder="Enter URL" value="{{$slider->url}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
