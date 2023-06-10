@extends('layout.index')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 data-aos="fade-down">Selamat Datang di <span>Aldstore</span></h2>
                        <p data-aos="fade-up">Kami adalah perusahaan kreatif yang menyediakan layanan desain UI, desain grafis, pengembangan aplikasi web dll. Kami fokus pada menciptakan pengalaman yang menarik dan intuitif untuk produk dan layanan Anda.</p>
                        <a data-aos="fade-up" data-aos-delay="200" href="#services" class="btn-get-started">Explore
                            Sekarang</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            @foreach ($slider as $key => $row)
                <div class="carousel-item active {{ $key == 0 ? 'active' : '' }}"
                    style="background-image: url({{ asset('images/' . $row->banner) }})">
                </div>
            @endforeach
            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>
        </div>

    </section><!-- End Hero Section -->

    <main id="main">
        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Kategori</h2>
                    <p>Temukan layanan yang menginspirasi dan membawa ide-ide Anda ke level berikutnya.</p>
                </div>
                <div class="row gy-4">
                    @foreach ($kategori as $row)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item  position-relative">
                                <div class="icon">
                                    <i class="fa-solid fa-mountain-city"></i>
                                </div>
                                <h3>{{ $row->kategori }}</h3>
                                <p>{{ $row->deskripsi }}</p>
                            </div>
                        </div><!-- End Service Item -->
                    @endforeach
                </div>
            </div>
        </section><!-- End Services Section -->


        <!-- ======= Our Projects Section ======= -->
        <section id="projects" class="projects">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Produk Populer</h2>
                    <p>Lihat produk-produk terbaru yang memikat dan memberikan solusi inovatif untuk kebutuhan bisnis Anda.</p>
                </div>

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order">
                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                        <?php $count = 0; ?>
                        <?php foreach ($produk as $produks): ?>
                        <?php if ($count >= 6) {
                            break;
                        } ?>
                        <div class="col-lg-4 col-md-6 portfolio-item">
                            @auth
                                <a href="{{ route('produk.show', ['id' => $produks->id]) }}" class="portfolio-link">
                                @else
                                    <a href="{{ url('login') }}" class="portfolio-link">
                                    @endauth
                                    <div class="portfolio-content h-100" data-aos="fade-up" data-aos-delay="200">
                                        <div class="portfolio-card">
                                            <div class="category-title"><?php echo $produks->kategori->kategori; ?></div>
                                            <img src="<?php echo asset('images/' . $produks->gambar); ?>" class="img-fluid" alt="">
                                            <div class="portfolio-info">
                                                <h4><?php echo $produks->nama; ?></h4>
                                                <div class="portfolio-details">
                                                    <p>Rp <span class="portfolio-price"><?php echo number_format($produks->harga, 0, ',', '.'); ?></span></p>
                                                </div>
                                                @auth
                                                    <a href="https://mail.google.com/mail/?view=cm&to=aldiarya2002@gmail.com&su=Pesanan%20Produk&body=Saya%20ingin%20memesan%20produk"
                                                        class="portfolio-buy" target="_blank">Pesan Sekarang</a>
                                                @else
                                                    <a href="{{ url('login') }}" class="portfolio-buy">Pesan Sekarang</a>
                                                @endauth
                                            </div>
                                        </div>
                                    </div>
                                </a>
                        </div><!-- End Projects Item -->
                        <?php $count++; ?>
                        <?php endforeach; ?>
                    </div><!-- End Projects Container -->
                    <div class="text-center mt-4">
                        @auth
                            <a href="{{ url('landingpage/product') }}" class="btn-get-started">Lihat Lebih Banyak</a>
                        @else
                            <a href="{{ url('login') }}" class="btn-get-started">Lihat Lebih Banyak</a>
                        @endauth
                    </div>
                </div>

            </div>
        </section><!-- End Our Projects Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Daftar Testimoni</h2>
                    <p>Dengarkan pengalaman klien kami dan bagaimana layanan kami telah memberikan nilai tambah bagi mereka.</p>
                </div>

                <div class="slides-2 swiper">
                    <div class="swiper-wrapper">
                        @foreach ($testimoni as $item)
                            <div class="swiper-slide">
                                <div class="testimonial-wrap">
                                    <div class="testimonial-item">
                                        <img src="{{ asset('images/' . $item->foto) }}" class="testimonial-img"
                                            alt="">
                                        <h3>{{ $item->nama }}</h3>
                                        <h4>{{ $item->jabatan }}</h4>
                                        <div class="stars">
                                            @for ($i = 0; $i < $item->rating; $i++)
                                                <i class="bi bi-star-fill"></i>
                                            @endfor
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            {{ $item->deskripsi }}
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End swiper-slide -->
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

    </main><!-- End #main -->
@endsection
