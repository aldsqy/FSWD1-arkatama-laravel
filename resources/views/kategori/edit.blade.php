<!-- resources/views/home.blade.php -->
@extends('layout.dashboard')

@section('content')
<h4>Update New Category</h4>
<form action="/kategori/{{$kategori->id}}" method="POST">
  @method('put')
  @csrf
  <div class="form-group">
    <label for="kategori">Kategori:</label>
    <input type="text" name="kategori" class="form-control" placeholder="Enter category" value="{{$kategori->kategori}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection


