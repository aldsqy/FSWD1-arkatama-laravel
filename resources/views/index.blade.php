<!DOCTYPE html>
<html>

<head>
    <title>CRUD PHP</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <style>
        /* Gaya tombol kotak */
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            border: none;
        }

        .button.edit {
            background-color: #2196F3;
        }

        .button.delete {
            background-color: #F44336;
        }

        .button.detail {
            background-color: #9c27b0;
        }

        .button.logout {
            background-color: #9c27b0;
        }
        table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
}

th {
    background-color: #f2f2f2;
}

a {
    text-decoration: none;
}

    </style>
</head>

<body>
    <h2>Data User</h2>
    <a href="{{ url('add') }}" class="button">Tambah User</a>
    <br /><br />
    <table>
        <tr>
            <th>Avatar</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Role</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td><img src="{{ asset('uploads/' . $user->avatar) }}" width="80"></td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->role }}</td>
            <td>{{ $user->address }}</td>
            <td>
                <a href="{{ url('edit/' . $user->id) }}" class="button edit">Edit</a>
                <a href="{{ url('delete/' . $user->id) }}" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="button delete">Delete</a>
                <button onclick="showDetail('{{ $user->name }}', '{{ $user->email }}', '{{ $user->phone }}', '{{ $user->role }}', '{{ $user->address }}')" class="button detail">Detail</button>
            </td>
        </tr>
        @endforeach
    </table>
    <!-- Script JavaScript -->
    <script>
        function showDetail(name, email, phone, role, address) {
            var detailString = "Name: " + name + "\n" +
                "Email: " + email + "\n" +
                "Phone: " + phone + "\n" +
                "Role: " + role + "\n" +
                "Address: " + address;
            alert(detailString);
        }
    </script>
</body>

</html>
