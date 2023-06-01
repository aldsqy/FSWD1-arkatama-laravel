@extends('layout.dashboard')

@section('content')
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    @admin
        <a href="{{ url('slider/create') }}" class="btn btn-primary mb-3">Tambah</a>
    @endadmin
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Banner</th>
                    <th scope="col">Nama</th>
                    <th scope="col">URL</th>
                    @admin
                    <th scope="col">Aksi</th>
                    @endadmin
                </tr>
            </thead>
            <tbody>
                @foreach ($slider as $item)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset('images/' . $item->banner) }}" style="width: 300px;" alt="Banner">
                        </td>
                        <td class="align-middle">{{ $item->nama }}</td>
                        <td class="align-middle">{{ $item->url }}</td>
                        <td class="align-middle">
                            @admin
                                <div class="d-flex justify-content-center">
                                    <a href="/slider/{{ $item->id }}/edit" class="btn btn-success  mx-2">Edit</a>
                                    <form action="/slider/{{ $item->id }}" method="POST" class="ml-2">
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
