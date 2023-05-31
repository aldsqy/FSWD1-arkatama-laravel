@extends('layout.dashboard')

@section('content')

<h3>Welcome to the Dashboard</h3>
<a href="{{ url('kategori/create') }}" class="btn btn-primary mb-3">Tambah</a>
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Kategori</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($kategori as $item)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->kategori }}</td>
        <td>
          <div class="d-flex">
            <a href="/kategori/{{ $item->id }}/edit" class="btn btn-success">Edit</a>
            <form action="/kategori/{{ $item->id }}" method="POST" class="ml-2">
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