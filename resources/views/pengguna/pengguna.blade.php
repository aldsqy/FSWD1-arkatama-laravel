<!-- resources/views/home.blade.php -->
@extends('dashboardtemplate')

@section('content')
<h3>Welcome to the Dashboard</h3>
    <a href="{{ url('pengguna/create') }}" class="btn btn-primary mb-3">Tambah</a>

    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>avatar</th>
          <th>email</th>
          <th>nama</th>
          <th>role</th>
          <th>phone</th>
          <th>address</th>
          <th>aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($pengguna as $item)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>
                <img src="{{ asset('images/'.$item->avatar)}}" style="width: 40px;">
            </td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->role }}</td>
            <td>{{ $item->phone }}</td>
            <td>{{ $item->address }}</td>
            <td class="d-flex">
                <a href='/pengguna/{{$item->id}}/edit' class="btn btn-success">Edit</a>
                <form action="/pengguna/{{$item->id}}" method="POST">
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
