<!-- resources/views/home.blade.php -->
@extends('layout.dashboard')

@section('content')
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    @admin
        <a href="{{ url('pengguna/create') }}" class="btn btn-primary mb-3">Tambah</a>
    @endadmin
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Avatar</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Role</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    @admin
                        <th scope="col">Aksi</th>
                    @endadmin
                </tr>
            </thead>
            <tbody>
                @foreach ($pengguna as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset('images/' . $item->avatar) }}" style="width: 40px;" alt="Avatar">
                        </td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->role }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->address }}</td>
                        <td>
                            @admin
                                <div class="d-flex">
                                    <a href="/pengguna/{{ $item->id }}/edit" class="btn btn-success  mx-2">Edit</a>
                                    <form action="/pengguna/{{ $item->id }}" method="POST" class="ml-2">
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
