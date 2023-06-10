<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Aldstore</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('images/aldstore2.png') }}" alt="AdminYve" width="150" style="margin: 12px 32px;">
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ url('/') }}"
                            class="nav-link {{ request()->url('/') == url('/') ? 'active' : '' }}">Home</a>
                    </li>
                    @auth
                        <li><a href="{{ url('landingpage/product') }}"
                                class="nav-link {{ request()->url('landingpage/product') == url('landingpage/product') ? 'active' : '' }}">Product</a>
                        </li>
                    @endauth
                    @auth
                        @if (Auth::user()->role == 'admin' || Auth::user()->role == 'staff')
                            <li><a href="{{ url('testimoni') }}"
                                    class="nav-link {{ request()->url('testimoni') == url('testimoni') ? 'active' : '' }}">Dashboard</a>
                            </li>
                        @endif
                        <li>
                            <a href="#" id="logout" class="nav-link text-warning">Logout</a>
                        </li>
                    @else
                        <li><a href="{{ url('login') }}"
                                class="nav-link text-warning {{ request()->url('login') == url('login') ? 'active' : '' }}">Login</a>
                        </li>
                    @endauth
                </ul>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->
    @yield('content')
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-content position-relative">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <img src="{{ asset('images/aldstore2.png') }}" alt="AdminYve" width="150" style="margin: 0px 0px 16px 0px;">
                            <p>
                                Tangerang, Banten<br>
                                Graha Raya, Indonesia<br><br>
                                <strong>Phone:</strong> +62 8523 2040 531<br>
                                <strong>Email:</strong> aldiarya2002@gmail.com<br>
                            </p>
                            <div class="social-links d-flex mt-3">
                                <a href="#" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-twitter"></i></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-facebook"></i></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-instagram"></i></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div><!-- End footer info column-->

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Sitemap</h4>
                        <ul>
                            <li><a href="#hero">Home</a></li>
                            <li><a href="#services">Kategori</a></li>
                            <li><a href="#projects">Produk</a></li>
                            <li><a href="#testimonials">Testimoni</a></li>
                        </ul>
                    </div><!-- End footer links column-->

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Produk Kami</h4>
                        <ul>
                            <li><a href="#">Software Development</a></li>
                            <li><a href="#">User Interface</a></li>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">App Development</a></li>
                        </ul>
                    </div><!-- End footer links column-->

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Produk Terkenal</h4>
                        <ul>
                            <li><a href="#">Job Finder</a></li>
                            <li><a href="#">Finance</a></li>
                            <li><a href="#">Illustration 3D</a></li>
                            <li><a href="#">NFT</a></li>
                        </ul>
                    </div><!-- End footer links column-->

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Lainnya</h4>
                        <ul>
                            <li><a href="#">Terms of service</a></li>
                            <li><a href="#">Privacy policy</a></li>
                        </ul>
                    </div><!-- End footer links column-->

                </div>
            </div>
        </div>

        <div class="footer-legal text-center position-relative">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Aldstore</span></strong>. All Rights Reserved
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
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
</body>

</html>
