@extends('layout.index')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url('{{ asset('assets/img/foto1.jpg') }}');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Daftar Produk</h2>
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Produk</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Our Projects Section ======= -->
        <section id="projects" class="projects">
            <div class="container" data-aos="fade-up">


                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order">

                    <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <?php foreach ($kategori as $category): ?>
                        <li data-filter=".filter-<?php echo $category->id; ?>"><?php echo $category->kategori; ?></li>
                        <?php endforeach; ?>
                    </ul>

                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                        <?php foreach ($produk as $produks): ?>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $produks->kategori->id; ?>">
                            <a href="{{ route('produk.show', ['id' => $produks->id]) }}" class="portfolio-link">
                                <div class="portfolio-content h-100">
                                    <div class="portfolio-card">
                                        <div class="category-title"><?php echo $produks->kategori->kategori; ?></div>
                                        <img src="<?php echo asset('images/' . $produks->gambar); ?>" class="img-fluid" alt="">
                                        <div class="portfolio-info">
                                            <h4><?php echo $produks->nama; ?></h4>
                                            <div class="portfolio-details">
                                                <p>Rp <span class="portfolio-price"><?php echo number_format($produks->harga, 0, ',', '.'); ?></span></p>
                                            </div>
                                            <a href="https://api.whatsapp.com/send?phone=6285232040531&text=Halo%20admin%20aldstore,%20saya%20ingin%20memesan%20produk"
                                                class="portfolio-buy" target="_blank">Pesan Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div><!-- End Projects Item -->
                        <?php endforeach; ?>
                    </div><!-- End Projects Container -->
                </div>

            </div>
        </section><!-- End Our Projects Section -->

    </main><!-- End #main -->
@endsection
