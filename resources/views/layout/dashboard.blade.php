<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Aldstore</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a href="{{ url('/') }}" class="navbar-brand ps-3">
            <img src="{{ asset('images/Aldstore2.jpg') }}" alt="AdminYve" width="150">
        </a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
            <i class="fas fa-bars"></i>
        </button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('images/' . Auth::user()->avatar) }}" alt="User Image"
                        style="width: 38px; height: 38px; border-radius: 50%;">
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" id="logout" href="#">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">General</div>
                        <a class="nav-link {{ request()->url('/testimoni') == url('/testimoni') ? 'active' : '' }}"
                            href="{{ url('/testimoni') }}">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-star"></i>
                            </div>
                            Testimoni
                        </a>
                        <a class="nav-link {{ request()->url('/slider') == url('/slider') ? 'active' : '' }}"
                            href="{{ url('/slider') }}">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-pause"></i>
                            </div>
                            Slider
                        </a>
                        <div class="sb-sidenav-menu-heading">Produk</div>
                        <a class="nav-link {{ request()->url('/kategori') == url('/kategori') ? 'active' : '' }}"
                            href="{{ url('/kategori') }}">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-th-large"></i>
                            </div>
                            Kategori
                        </a>

                        <a class="nav-link {{ request()->url('/produks') == url('/produks') ? 'active' : '' }}"
                            href="{{ url('/produks') }}">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-list"></i>
                            </div>
                            Daftar Produk
                        </a>
                        <div class="sb-sidenav-menu-heading">Pengguna</div>
                        <a class="nav-link {{ request()->url('/grup') == url('/grup') ? 'active' : '' }}"
                            href="{{ url('/grup') }}">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            Grup Pengguna
                        </a>

                        <a class="nav-link {{ request()->url('/pengguna') == url('/pengguna') ? 'active' : '' }}"
                            href="{{ url('/pengguna') }}">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-list"></i>
                            </div>
                            Daftar Pengguna
                        </a>
                        <div class="sb-sidenav-menu-heading">Lainnya</div>
                        <a class="nav-link {{ request()->url('/') == url('/') ? 'active' : '' }}"
                            href="{{ url('/') }}">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-home"></i>
                            </div>
                            Kembali ke Menu
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">{{ Auth::user()->nama }} : Sebagai {{ Auth::user()->role }}</div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    @yield('content')
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Aldstore 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/js/chart-area-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/datatables-simple-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.slim.js"
        integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>

    <script>
        $('#logout').click(function(event) {
            event.preventDefault(); // Menghentikan aksi default dari tautan

            Swal.fire({
                title: 'Are you sure?',
                text: "You will be logged out.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, logout!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect ke URL logout setelah dikonfirmasi
                    window.location.href = "{{ url('logout') }}";
                }
            });
        });
    </script>
    <script>
        // Sorting function
        function sortTable(columnIndex, order) {
            var table, rows, switching, i, x, y, shouldSwitch;
            table = document.querySelector("table");
            switching = true;
            while (switching) {
                switching = false;
                rows = table.rows;
                for (i = 1; i < (rows.length - 1); i++) {
                    shouldSwitch = false;
                    x = rows[i].getElementsByTagName("td")[columnIndex];
                    y = rows[i + 1].getElementsByTagName("td")[columnIndex];
                    if (order === "asc") {
                        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                            shouldSwitch = true;
                            break;
                        }
                    } else if (order === "desc") {
                        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                            shouldSwitch = true;
                            break;
                        }
                    }
                }
                if (shouldSwitch) {
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                }
            }
        }

        // Add event listeners to the sortable columns
        var sortableColumns = document.querySelectorAll("th[data-sort]");
        sortableColumns.forEach(function (column) {
            column.addEventListener("click", function () {
                var columnIndex = Array.prototype.indexOf.call(column.parentNode.children, column);
                var order = column.getAttribute("data-order");
                if (order === "asc") {
                    column.setAttribute("data-order", "desc");
                    sortTable(columnIndex, "desc");
                } else {
                    column.setAttribute("data-order", "asc");
                    sortTable(columnIndex, "asc");
                }
            });
        });
    </script>
</body>

</html>
