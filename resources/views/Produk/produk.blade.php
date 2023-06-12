<!-- resources/views/home.blade.php -->
@extends('layout.dashboard')

@section('content')
    <h1 class="mt-4">Daftar Produk</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Lihat seluruh daftar produk</li>
    </ol>
    <a href="{{ url('produks/create') }}" class="btn btn-primary mb-3"><i class="fa-solid fa-plus"
            style="margin-right: 8px;"></i>Tambah</a>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" data-sort="text">No</th>
                    <th scope="col">Gambar</th>
                    <th scope="col" data-sort="text">Nama</th>
                    <th scope="col" data-sort="text">Deskripsi</th>
                    <th scope="col" data-sort="text">Kategori</th>
                    <th scope="col" data-sort="text">Harga</th>
                    <th scope="col" data-sort="text">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produk as $item)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">
                            <img src="{{ asset('images/' . $item->gambar) }}"
                                style="width: 50px; height: 50px; border-radius: 5px;" alt="Avatar">
                        </td>
                        <td class="align-middle">{{ $item->nama }}</td>
                        <td class="align-middle">{{ $item->deskripsi }}</td>
                        <td class="align-middle">{{ $item->kategori->kategori }}</td>
                        <td class="align-middle">{{ number_format($item->harga, 0, ',', '.') }}</td>
                        <td class="align-middle">{{ $item->status }}</td>
                        <td class="align-middle">
                            <div class="d-flex">
                                <a href="/produks/{{ $item->id }}/edit" class="btn btn-success  mx-2"><i
                                        class="fa-solid fa-pen"></i></a>
                                @admin
                                    <form action="/produks/{{ $item->id }}" method="POST" class="ml-2">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger delete"><i
                                                class="fa-solid fa-trash"></i></button>
                                    </form>
                                @endadmin
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.slim.js"
        integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>
    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Selamat...',
                text: '{{ $message }}',
            });
        </script>
    @endif

    @if ($message = Session::get('success2'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Selamat...',
                text: '{{ $message }}',
            });
        </script>
    @endif
    <script>
        $('.delete').click(function(event) {
            var kategoriid = $(this).attr('data-id')
            event.preventDefault(); // Menghentikan aksi default form submit

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    event.target.closest('form').submit();
                }
            });
        });
    </script>
@endsection
