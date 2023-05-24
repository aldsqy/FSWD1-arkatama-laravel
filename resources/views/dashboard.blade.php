<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    .sidebar {
      height: auto;
      width: 250px;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-2 bg-dark sidebar">
        <nav class="navbar navbar-dark">
          <ul class="navbar-nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="#">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Slider</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="produkDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Produk</a>
              <div class="dropdown-menu" aria-labelledby="produkDropdown">
                <a class="dropdown-item" href="#">Kategori</a>
                <a class="dropdown-item" href="#">Daftar Produk</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="penggunaDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Pengguna</a>
              <div class="dropdown-menu" aria-labelledby="penggunaDropdown">
                <a class="dropdown-item" href="#">Grup Pengguna</a>
                <a class="dropdown-item" href="#">Daftar Pengguna</a>
              </div>
            </li>
          </ul>
        </nav>
      </div>
      <div class="col-10">
        <div class="container mt-4">
          <h3>Welcome to the Dashboard</h3>
          <br>
          <div class="row">
            @foreach ($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="{{ $product['image'] }}" alt="{{ $product['name'] }}">
                    <div class="card-body">
                      <h5 class="card-title">{{ $product['name'] }}</h5>
                      <p class="card-text">{{ $product['description'] }}</p>
                    </div>
                </div>
            </div>      
            @endforeach
          </div>
          <!-- Content -->
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.dropdown-toggle').dropdown();
    });
  </script>
</body>

</html>
