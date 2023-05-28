@extends('dashboardtemplate')

@section('content')
<h3>Welcome to the Dashboard</h3>
    <a href="{{ url('slider/create') }}" class="btn btn-primary mb-3">Tambah</a>

    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Banner</th>
          <th>Nama</th>
          <th>url</th>
          <th>Aksi</th> 
        </tr>
      </thead>
      <tbody>
        @foreach ($slider as $item)
          <tr>
            <td class="align-middle">{{$loop->iteration}}</td>
            <td>
                <img src="{{ asset('images/'.$item->banner)}}" style="width: 300px;">
            </td>
            <td class="align-middle">{{ $item->nama }}</td>
            <td class="align-middle">{{ $item->url }}</td>
            <td class="align-middle"> <!-- Menggunakan align-middle pada kolom Action -->
                <div class="d-flex justify-content-center"> <!-- Menggunakan justify-content-center untuk mengatur tata letak secara horizontal -->
                    <a href='/slider/{{$item->id}}/edit' class="btn btn-success">Edit</a>
                    <form action="/slider/{{$item->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-danger ml-2">
                    </form>
                </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
@endsection
