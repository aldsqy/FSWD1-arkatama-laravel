<!-- resources/views/home.blade.php -->
@extends('dashboardtemplate')

@section('content')
<h4>Create New Category</h4>
<form action="{{ route('kategori.store') }}" method="POST">
  @csrf
  <div class="form-group">
    <label for="kategori">Kategori:</label>
    <input type="text" name="kategori" class="form-control" placeholder="Enter category">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection


