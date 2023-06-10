@extends('layout.index')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('{{ asset('assets/img/breadcrumbs-bg.jpg') }}');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <h2>{{ $produk->nama }}</h2>
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Detail</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Projet Details Section ======= -->
    <section id="project-details" class="project-details">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="position-relative h-100 portfolio-details-slider">
                <div class="swiper-slide">
                    <img src="{{ asset('images/' . $produk->gambar) }}" alt="">
                </div>
            </div>

            <div class="row justify-content-between gy-4 mt-4">

                <div class="col-lg-8">
                    <div class="portfolio-description">
                        <h2>Apa itu produk {{ $produk->nama }}?</h2>
                        <p>{{ $produk->deskripsi }}</p>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="portfolio-info1">
                        <h3>Detail Informasi</h3>
                        <ul>
                            <li><strong>Category</strong> <span>{{ $produk->kategori->kategori }}</span></li>
                            <li><strong>Dibuat</strong> <span>{{ $produk->created_at->format('d F Y') }}</span></li>
                            <li><strong>Harga</strong> <span>Rp {{ number_format($produk->harga, 0, ',', '.') }}</span></li>
                            <li><a href="https://api.whatsapp.com/send?phone=nomor-telepon-anda&text=Saya%20ingin%20memesan%20{{ $produk->kategori->kategori }}"
                                    class="btn-visit align-self-start">Pesan Sekarang</a></li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Projet Details Section -->
@endsection
