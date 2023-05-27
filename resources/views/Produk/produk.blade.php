<!-- resources/views/home.blade.php -->
@extends('dashboardtemplate')

@section('content')
<h3>Welcome to the Dashboard</h3>
    <a href="{{ url('produks/create') }}" class="btn btn-primary mb-3">Tambah</a>

    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>nama</th>
          <th>deskripsi</th>
          <th>harga</th>
          <th>status</th>
          <th>Created At</th>
          <th>Updated At</th>
          <th>aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($produk as $item)
          <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->deskripsi }}</td>
            <td>{{ $item->harga }}</td>
            <td>{{ $item->status }}</td>
            <td>{{ $item->created_at }}</td>
            <td>{{ $item->updated_at }}</td>
            <td class="d-flex">
                <a href='/produks/{{$item->id}}/edit' class="btn btn-success">Edit</a>
                <form action="/produks/{{$item->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete" class="btn btn-danger ml-2">
                </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
@endsection
