@extends('layout.index')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 data-aos="fade-down">Selamat Datang di <span>Aldstore</span></h2>
                        <p data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a data-aos="fade-up" data-aos-delay="200" href="#services" class="btn-get-started">Mulai
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
                    <h2>Services</h2>
                    <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti
                        fignissimos eos
                        quam</p>
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
                    <h2>Our Projects</h2>
                    <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto
                        accusamus fugit aut qui distinctio</p>
                </div>

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order">

                    <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-remodeling">Remodeling</li>
                        <li data-filter=".filter-construction">Construction</li>
                        <li data-filter=".filter-repairs">Repairs</li>
                        <li data-filter=".filter-design">Design</li>
                    </ul><!-- End Projects Filters -->

                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/remodeling-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Remodeling 1</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/projects/remodeling-1.jpg" title="Remodeling 1"
                                        data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/construction-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Construction 1</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/projects/construction-1.jpg" title="Construction 1"
                                        data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/repairs-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Repairs 1</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/projects/repairs-1.jpg" title="Repairs 1"
                                        data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/design-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Design 1</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/projects/design-1.jpg" title="Repairs 1"
                                        data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/remodeling-2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Remodeling 2</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/projects/remodeling-2.jpg" title="Remodeling 2"
                                        data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/construction-2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Construction 2</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/projects/construction-2.jpg" title="Construction 2"
                                        data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/repairs-2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Repairs 2</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/projects/repairs-2.jpg" title="Repairs 2"
                                        data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/design-2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Design 2</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/projects/design-2.jpg" title="Repairs 2"
                                        data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/remodeling-3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Remodeling 3</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/projects/remodeling-3.jpg" title="Remodeling 3"
                                        data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/construction-3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Construction 3</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/projects/construction-3.jpg" title="Construction 3"
                                        data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/repairs-3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Repairs 3</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/projects/repairs-3.jpg" title="Repairs 2"
                                        data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/design-3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Design 3</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/projects/design-3.jpg" title="Repairs 3"
                                        data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="project-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                    </div><!-- End Projects Container -->

                </div>

            </div>
        </section><!-- End Our Projects Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Testimonials</h2>
                    <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem
                        uia
                        reprehenderit sunt deleniti</p>
                </div>

                <div class="slides-2 swiper">
                    <div class="swiper-wrapper">
                        @foreach ($testimoni as $item)
                            <div class="swiper-slide">
                                <div class="testimonial-wrap">
                                    <div class="testimonial-item">
                                        <img src="{{ asset('images/' . $item->foto) }}" class="testimonial-img" alt="">
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
