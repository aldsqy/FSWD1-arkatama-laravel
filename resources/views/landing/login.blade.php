@extends('layout.index')

@section('content')
  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Login</h2>
      <ol>
        <li><a href="{{ route('landingpage') }}">Home</a></li>
        <li>Login</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <form action="{{ route('proses') }}" method="POST" role="form" class="php-email-form">
              @csrf
              <div class="row gy-4">
                <div class="col-lg-12 form-group">
                  <h4>Email</h4>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
                <div class="col-lg-12 form-group">
                  <h4>Password</h4>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Your Password" required>
                </div>
                <div class="col-lg-12 form-group">
                  <div class="d-flex justify-content-between align-items-center">
                    <button type="submit" class="btn btn-primary">Login</button>
                    <a href="{{ route('register') }}" class="text-primary">Belum punya akun? Register</a>
                  </div>
                </div>
              </div>
            </form>
          </div><!-- End Contact Form -->

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->
        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
          class="bi bi-arrow-up-short"></i></a>
  
    
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      @if ($message = Session::get('error'))
        <script>
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ $message }}',
          });
        </script>
      @endif
      
      @if ($message = Session::get('success'))
        <script>
          Swal.fire({
            icon: 'success',
            title: 'Yess...',
            text: '{{ $message }}',
          });
        </script>
      @endif
@endsection


