<!-- resources/views/home.blade.php -->
@extends('layout.dashboard')

@section('content')

<h3>Welcome to the Dashboard</h3>
<a href="{{ url('produks/create') }}" class="btn btn-primary mb-3">Tambah</a>
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Harga</th>
        <th scope="col">Status</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($produk as $item)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->deskripsi }}</td>
        <td>{{ $item->harga }}</td>
        <td>{{ $item->status }}</td>
        <td>
          <div class="d-flex">
            <a href="/produks/{{ $item->id }}/edit" class="btn btn-success">Edit</a>
            <form action="/produks/{{ $item->id }}" method="POST" class="ml-2">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection