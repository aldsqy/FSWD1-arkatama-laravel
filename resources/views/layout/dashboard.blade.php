<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
  <style>
    .sidebar {
      height: auto;
      width: 250px;
    }

    .sidebar .nav-link {
      color: #A9A9A9
    }

    .sidebar .nav-link.white-text {
      color: #FFFFFF;
    }

    .sidebar {
      position: fixed;
      top: 56px;
      bottom: 0;
      left: 0;
      z-index: 1;
      overflow-x: hidden;
      padding-top: 20px;
      background-color: #343a40;
    }

    .col-10 {
      margin-left: 250px;
    }

    .navbar {
      z-index: 2;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .col-10 {
    margin-left: 220px;
    padding-top: 56px; /* Adjust this value based on the height of your top navbar */
  }
    
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top">
    <a class="navbar-brand" href="{{ url('landingpage') }}">
      <img src="{{ asset('images/aldstore.png') }}" alt="AdminYve" width="150" style="margin: 12px 32px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link text-dark" href="{{ url('landingpage') }}">Kembali ke Landing Page</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-2 bg-dark sidebar">
        <nav class="navbar navbar-dark">
          <ul class="nav flex-column text-light">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/dashboard') }}"><i class="bi bi-speedometer"></i>&nbsp;&nbsp;Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/slider') }}"><i class="bi bi-square-half"></i>&nbsp;&nbsp;Slider</a>
            </li>
            <li class="nav-item">
              <span class="nav-link white-text">Produk</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/kategori') }}"><i class="bi bi-star-fill"></i>&nbsp;&nbsp;Kategori</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/produks') }}"><i class="bi bi-bag-fill"></i>&nbsp;&nbsp;Daftar Produk</a>
            </li>
            <li class="nav-item">
              <span class="nav-link white-text">Pengguna</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/grup') }}"><i class="bi bi-people-fill"></i>&nbsp;&nbsp;Grup Pengguna</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/pengguna') }}"><i class="bi bi-person-fill"></i>&nbsp;&nbsp;Daftar Pengguna</a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="col-10">
        <div class="container mt-5">
          @yield('content')
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
