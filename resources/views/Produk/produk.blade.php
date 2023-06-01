<!-- resources/views/home.blade.php -->
@extends('layout.dashboard')

@section('content')
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    @admin
        <a href="{{ url('produks/create') }}" class="btn btn-primary mb-3">Tambah</a>
    @endadmin
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Status</th>
                    @admin
                    <th scope="col">Aksi</th>
                    @endadmin
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
                            @admin
                                <div class="d-flex">
                                    <a href="/produks/{{ $item->id }}/edit" class="btn btn-success  mx-2">Edit</a>
                                    <form action="/produks/{{ $item->id }}" method="POST" class="ml-2">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            @endadmin
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
