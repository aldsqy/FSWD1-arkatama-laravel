<!-- resources/views/home.blade.php -->
@extends('dashboardtemplate')

@section('content')
<h3>Welcome to the Dashboard</h3>
    <a href="{{ url('kategori/create') }}" class="btn btn-primary mb-3">Tambah</a>

    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Kategori</th>
          <th>Created At</th>
          <th>Updated At</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($kategori as $item)
          <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->kategori }}</td>
            <td>{{ $item->created_at }}</td>
            <td>{{ $item->updated_at }}</td>
            <td class="d-flex">
                <a href='/kategori/{{$item->id}}/edit' class="btn btn-success">Edit</a>
                <form action="/kategori/{{$item->id}}" method="POST">
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