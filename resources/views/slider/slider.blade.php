@extends('layout.dashboard')

@section('content')

<h3>Welcome to the Dashboard</h3>
<a href="{{ url('slider/create') }}" class="btn btn-primary mb-3">Tambah</a>
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Banner</th>
        <th scope="col">Nama</th>
        <th scope="col">URL</th>
        <th scope="col">Aksi</th> 
      </tr>
    </thead>
    <tbody>
      @foreach ($slider as $item)
      <tr>
        <td class="align-middle">{{ $loop->iteration }}</td>
        <td>
          <img src="{{ asset('images/'.$item->banner) }}" style="width: 300px;" alt="Banner">
        </td>
        <td class="align-middle">{{ $item->nama }}</td>
        <td class="align-middle">{{ $item->url }}</td>
        <td class="align-middle">
          <div class="d-flex justify-content-center">
            <a href="/slider/{{ $item->id }}/edit" class="btn btn-success">Edit</a>
            <form action="/slider/{{ $item->id }}" method="POST" class="ml-2">
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