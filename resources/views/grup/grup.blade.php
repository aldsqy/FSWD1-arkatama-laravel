
@extends('layout.dashboard')

@section('content')

<h3>Welcome to the Dashboard</h3>
<a href="{{ url('grup/create') }}" class="btn btn-primary mb-3">Tambah</a>
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Role</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($grup as $item)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->role }}</td>
        <td>
          <div class="d-flex">
            <a href="/grup/{{ $item->id }}/edit" class="btn btn-success">Edit</a>
            <form action="/grup/{{ $item->id }}" method="POST" class="ml-2">
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