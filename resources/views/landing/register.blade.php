@extends('layout.index')

@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Register</h2>
      <ol>
        <li><a href="{{ route('landingpage') }}">Home</a></li>
        <li>Register</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data" role="form" class="php-email-form">
              @csrf
              <div class="row gy-4">
                <div>
                  <input type="hidden" name="avatar" value="{{ asset('images/default.png') }}">
                </div>                  
                <div class="col-lg-12 form-group">
                  <h4>Nama Lengkap</h4>
                  <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama lengkap" >
                </div>
                <div class="col-lg-12 form-group">
                  <h4>No. Handphone</h4>
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Masukkan nomor handphone" >
                </div>
                <div class="col-lg-12 form-group">
                  <h4>Alamat</h4>
                  <input type="text" class="form-control" name="address" id="address" placeholder="Masukkan alamat">
                </div>                  
                <div class="col-lg-12 form-group">
                  <h4>Email</h4>
                  <input type="text" class="form-control" name="email" id="email" placeholder="Your Email" >
                </div>
                <div class="col-lg-12 form-group">
                  <h4>Password</h4>
                  <input type="text" class="form-control" name="password" id="password" placeholder="Your Password" >
                </div>
                <div class="col-lg-12 form-group">
                  <div class="d-flex justify-content-between align-items-center">
                    <button type="submit" class="btn btn-primary">Register</button>
                    <a href="{{ route('login') }}" class="text-primary">Sudah punya akun? Login</a>
                  </div>
                </div>
              </div>
            </form>
          </div><!-- End Contact Form -->

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection
