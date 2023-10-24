@extends('layouts/app')
@section('conten')
    <!-- start of hero -->
    <section class="wpo-hero-slider" id="home">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach ($headers as $header)
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image"
                            data-background="{{ asset('system/storage/app/public/' . $header->image_path) }}">
                            <div class="container-fluid">
                                <div class="slide-content">
                                    <div data-swiper-parallax="300" class="slide-title">
                                        <h2>{{ $header->judul }}</h2>
                                    </div>
                                    <div data-swiper-parallax="400" class="slide-text">
                                        <p>{{ $header->teks }}</p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div data-swiper-parallax="500" class="slide-btns">
                                        <a href="about.html" class="theme-btn">Discover More</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end slide-inner -->
                    </div>
                @endforeach
            </div>
            <!-- end swiper-wrapper -->

            <!-- swipper controls -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- end of wpo-hero-slide-section-->

    <!-- about as -->
    <section class="wpo-testimonials-section section-padding" id="tentang">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-12">
                    <div class="wpo-testimonials-img">
                        <img src="{{ url('public/assets') }}/images/logobaru.png" alt="" style="margin-top: 25%">
                        <div class="wpo-testimonials-img-shape">
                            <img src="{{ url('public/assets') }}/images/testimonial/shape.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1 col-12">
                    <div class="wpo-testimonials-wrap">
                        <h2>Tentang Kami</h2>
                        <div class="wpo-testimonials-active owl-carousel">
                            <div class="wpo-testimonials-item">
                                <p>Kami adalah NIKAHLAH!, sebuah perusahaan yang berkomitmen untuk
                                    menciptakan pernikahan yang tak terlupakan dengan sentuhan pribadi dan cinta sejati.</p>
                                <div class="wpo-testimonial-info">
                                    <div class="wpo-testimonial-info-img">
                                        <img src="{{ url('public/assets') }}/images/fotoaku.jpg" alt="">
                                    </div>
                                    <div class="wpo-testimonial-info-text">
                                        <h5>Fathur Rahman</h5>
                                        <span>Depelop 19/10/2023</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- end container -->

        <div class="wpo-testimonials-shape">
            <img src="{{ url('public/assets') }}/images/testimonial/shape2.png" alt="">
        </div>
    </section>
    <!-- abaut as end -->

    <!-- start wpo-video-section -->
    <section class="wpo-video-section section-padding">
        <div class="container">
            <div class="row">
                <div class="wpo-section-title">
                    <span>Memori Pernikahan</span>
                    <h2>MERAYAKAN CINTAMU</h2>
                    <div class="section-title-img">
                        <img src="{{ url('public/assets') }}/images/section-title.png" alt="">
                    </div>
                </div>
            </div>
            <div class="wpo-video-item">
                <div class="wpo-video-img">
                    <img src="{{ url('public/assets') }}/images/cta.jpg" alt="">
                    <a href="https://www.youtube.com/embed/teLhLLlhfzc" class="video-btn" data-type="iframe"><i
                            class="fi flaticon-play"></i></a>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-video-section-->

    <!-- start wpo-partners-section -->
    <section class="wpo-partners-section">
        <h2 class="hidden">Partners</h2>
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="partner-grids partners-slider owl-carousel">
                        <div class="grid">
                            <img src="{{ url('public/assets') }}/images/partners/1.png" alt>
                        </div>
                        <div class="grid">
                            <img src="{{ url('public/assets') }}/images/partners/2.png" alt>
                        </div>
                        <div class="grid">
                            <img src="{{ url('public/assets') }}/images/partners/3.png" alt>
                        </div>
                        <div class="grid">
                            <img src="{{ url('public/assets') }}/images/partners/4.png" alt>
                        </div>
                        <div class="grid">
                            <img src="{{ url('public/assets') }}/images/partners/5.png" alt>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-partners-section-->

    <!-- start wpo-service-section -->
    <section class="wpo-service-section">
        <h2 class="hidden">some</h2>
        <div class="container">
            <div class="row">
                <div class="wpo-section-title">
                    <span>Fitur Kami</span>
                    <h2>KAMI SIAP MENERIMA</h2>
                    <div class="section-title-img">
                        <img src="{{ url('public/assets') }}/images/section-title.png" alt="">
                    </div>
                </div>
            </div>
            <div class="wpo-service-active owl-carousel">
                <div class="wpo-service-item">
                    <div class="wpo-service-img">
                        <img src="{{ url('public/assets') }}/images/service/img-1.jpg" alt="">

                        <div class="wpo-service-text">
                            <div class="s-icon">
                                <i class="fi flaticon-gallery"></i>
                            </div>
                            <a href="service-single.html">Photography</a>
                        </div>
                    </div>
                </div>
                <div class="wpo-service-item">
                    <div class="wpo-service-img">
                        <img src="{{ url('public/assets') }}/images/service/img-2.jpg" alt="">

                        <div class="wpo-service-text">
                            <div class="s-icon">
                                <i class="fi flaticon-serving-dish"></i>
                            </div>
                            <a href="service-single.html">Fine Dining</a>
                        </div>
                    </div>
                </div>
                <div class="wpo-service-item">
                    <div class="wpo-service-img">
                        <img src="{{ url('public/assets') }}/images/service/img-3.jpg" alt="">

                        <div class="wpo-service-text">
                            <div class="s-icon">
                                <i class="fi flaticon-edit"></i>
                            </div>
                            <a href="service-single.html">Wedding Registry</a>
                        </div>
                    </div>
                </div>
                <div class="wpo-service-item">
                    <div class="wpo-service-img">
                        <img src="{{ url('public/assets') }}/images/service/img-4.jpg" alt="">

                        <div class="wpo-service-text">
                            <div class="s-icon">
                                <i class="fi flaticon-wedding"></i>
                            </div>
                            <a href="service-single.html">Guest List</a>
                        </div>
                    </div>
                </div>
                <div class="wpo-service-item">
                    <div class="wpo-service-img">
                        <img src="{{ url('public/assets') }}/images/service/img-5.jpg" alt="">

                        <div class="wpo-service-text">
                            <div class="s-icon">
                                <i class="fi flaticon-cake"></i>
                            </div>
                            <a href="service-single.html">Perfect Cake</a>
                        </div>
                    </div>
                </div>
                <div class="wpo-service-item">
                    <div class="wpo-service-img">
                        <img src="{{ url('public/assets') }}/images/service/img-6.jpg" alt="">

                        <div class="wpo-service-text">
                            <div class="s-icon">
                                <i class="fi flaticon-wedding-rings"></i>
                            </div>
                            <a href="service-single.html">Wedding Ceremony</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-service-section-->

    <!-- start wpo-fun-fact-section -->
    <section class="wpo-fun-fact-section" id="fitur">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="wpo-fun-fact-grids clearfix">
                        <div class="grid">
                            <div class="info">
                                <h3><span class="odometer" data-count="1200">00</span></h3>
                                <p>Happy Couples</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="info">
                                <h3><span class="odometer" data-count="1545">00</span></h3>
                                <p>Weddings</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="info">
                                <h3><span class="odometer" data-count="750">00</span>+</h3>
                                <p>Decoration</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="info">
                                <h3><span class="odometer" data-count="265">00</span>+</h3>
                                <p>Locations</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="f-shape-1">
                <img src="{{ url('public/assets') }}/images/f-shape-1.png" alt="">
            </div>
            <div class="f-shape-2">
                <img src="{{ url('public/assets') }}/images/f-shape-2.png" alt="">
            </div>
        </div>
    </section>
    <!-- end wpo-fun-fact-section -->

    <!-- start gambar -->
    <section class="wpo-portfolio-section section-padding" id="portofolio">
        <div class="container-fluid">
            <div class="row">
                <div class="wpo-section-title">
                    <span>Portofolio</span>
                    <h2>Karya Luar Biasa Kami
                    </h2>
                    <div class="section-title-img">
                        <img src="{{ url('public/assets') }}/images/section-title.png" alt="">
                    </div>
                </div>
            </div>
            <div class="sortable-gallery">
                <div class="gallery-filters"></div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="portfolio-grids gallery-container clearfix">
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="{{ url('public/assets') }}/images/portfolio/1.jpg" alt="">
                                    <div class="hover-content">
                                        <h4><a href="portfolio-single.html">Maria & Robin</a></h4>
                                        <span>Austria- Feb 2019</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="{{ url('public/assets') }}/images/portfolio/2.jpg" alt="">
                                    <div class="hover-content">
                                        <h4><a href="portfolio-single.html">Rose & Harry</a></h4>
                                        <span>Austria- Jan 2020</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="{{ url('public/assets') }}/images/portfolio/3.jpg" alt="">
                                    <div class="hover-content">
                                        <h4><a href="portfolio-single.html">Aliana & David</a></h4>
                                        <span>Austria- Mar 2020</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="{{ url('public/assets') }}/images/portfolio/4.jpg" alt="">
                                    <div class="hover-content">
                                        <h4><a href="portfolio-single.html">Aliza & Ken</a></h4>
                                        <span>Austria- April 2020</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="{{ url('public/assets') }}/images/portfolio/5.jpg" alt="">
                                    <div class="hover-content">
                                        <h4><a href="portfolio-single.html">Michel & Dianee</a></h4>
                                        <span>Austria- May 2020</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="{{ url('public/assets') }}/images/portfolio/6.jpg" alt="">
                                    <div class="hover-content">
                                        <h4><a href="portfolio-single.html">Maria & Nevela</a></h4>
                                        <span>Austria- Jul 2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- end container -->
    </section>
    <!-- end gambar -->

    <!-- START DAFTAR KLIEN -->
    <section class="wpo-testimonials-section section-padding" id="">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-12">
                    <div class="wpo-testimonials-img">
                        <img src="{{ url('public/assets') }}/images/testimonial/l-img.jpg" alt="">
                        <div class="wpo-testimonials-img-shape">
                            <img src="{{ url('public/assets') }}/images/testimonial/shape.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1 col-12">
                    <div class="wpo-testimonials-wrap">
                        <h2>Apa Kata Klien Kami</h2>
                        <div class="wpo-testimonials-active owl-carousel">
                            <div class="wpo-testimonials-item">
                                <p>Ini bukan hanya agen perencana pernikahan tetapi juga teman impian.
                                    Saya sangat senang bekerja dengan mereka. Mereka mewujudkan impian saya. Di pernikahanku
                                    Saya menemukan mereka sebagai teman terbaik saya.</p>
                                <div class="wpo-testimonial-info">
                                    <div class="wpo-testimonial-info-img">
                                        <img src="{{ url('public/assets') }}/images/testimonial/img-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="wpo-testimonial-info-text">
                                        <h5>Jenefer Marvella</h5>
                                        <span>Wedding 12/12/22</span>
                                    </div>
                                </div>
                            </div>
                            <div class="wpo-testimonials-item">
                                <p>Ini bukan hanya agen perencana pernikahan tetapi juga teman impian.
                                    Saya sangat senang bekerja dengan mereka. Mereka mewujudkan impian saya. Di pernikahanku
                                    Saya menemukan mereka sebagai teman terbaik saya.</p>
                                <div class="wpo-testimonial-info">
                                    <div class="wpo-testimonial-info-img">
                                        <img src="{{ url('public/assets') }}/images/testimonial/img-3.jpg"
                                            alt="">
                                    </div>
                                    <div class="wpo-testimonial-info-text">
                                        <h5>David Miller</h5>
                                        <span>Wedding 06/12/22</span>
                                    </div>
                                </div>
                            </div>
                            <div class="wpo-testimonials-item">
                                <p>Ini bukan hanya agen perencana pernikahan tetapi juga teman impian.
                                    Saya sangat senang bekerja dengan mereka. Mereka mewujudkan impian saya. Di pernikahanku
                                    Saya menemukan mereka sebagai teman terbaik saya.</p>
                                <div class="wpo-testimonial-info">
                                    <div class="wpo-testimonial-info-img">
                                        <img src="{{ url('public/assets') }}/images/testimonial/img-2.jpg"
                                            alt="">
                                    </div>
                                    <div class="wpo-testimonial-info-text">
                                        <h5>Aliza Anney</h5>
                                        <span>Wedding 08/12/21</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- end container -->

        <div class="wpo-testimonials-shape">
            <img src="{{ url('public/assets') }}/images/testimonial/shape2.png" alt="">
        </div>
    </section>
    <!-- END DAFTAR KLIEN -->

    <!-- start wpo-product-section -->
    <section class="wpo-product-section section-padding">
        <div class="container">
            <div class="row">
                <div class="wpo-section-title">
                    <span>Toko Kami</span>
                    <h2>PRODUK KHUSUS UNTUK ANDA</h2>
                    <div class="section-title-img">
                        <img src="{{ url('public/assets') }}/images/section-title.png" alt="">
                    </div>
                </div>
            </div>
            <div class="wpo-product-wrap">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="wpo-product-item">
                            <div class="wpo-product-img">
                                <img src="{{ url('public/assets') }}/images/product/1.jpg" alt="">
                                <a href="cart.html">Masukkan ke keranjang</a>
                            </div>
                            <div class="wpo-product-text">
                                <h3><a href="shop-single.html">Gaun pernikahan</a></h3>
                                <span>$380.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="wpo-product-item">
                            <div class="wpo-product-img">
                                <img src="{{ url('public/assets') }}/images/product/2.jpg" alt="">
                                <a href="cart.html">Masukkan ke keranjang</a>
                            </div>
                            <div class="wpo-product-text">
                                <h3><a href="shop-single.html">Bunga Pengantin</a></h3>
                                <span>$65.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="wpo-product-item">
                            <div class="wpo-product-img">
                                <img src="{{ url('public/assets') }}/images/product/3.jpg" alt="">
                                <a href="cart.html">Masukkan ke keranjang</a>
                            </div>
                            <div class="wpo-product-text">
                                <h3><a href="shop-single.html">Gaun pernikahan</a></h3>
                                <span>$285.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="wpo-product-item">
                            <div class="wpo-product-img">
                                <img src="{{ url('public/assets') }}/images/product/4.jpg" alt="">
                                <a href="cart.html">Masukkan ke keranjang</a>
                            </div>
                            <div class="wpo-product-text">
                                <h3><a href="shop-single.html">Kue pernikahan</a></h3>
                                <span>$176.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="wpo-product-item">
                            <div class="wpo-product-img">
                                <img src="{{ url('public/assets') }}/images/product/5.jpg" alt="">
                                <a href="cart.html">Masukkan ke keranjang</a>
                            </div>
                            <div class="wpo-product-text">
                                <h3><a href="shop-single.html">Mahkota Pengantin Wanita
                                    </a></h3>
                                <span>$125.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="wpo-product-item">
                            <div class="wpo-product-img">
                                <img src="{{ url('public/assets') }}/images/product/6.jpg" alt="">
                                <a href="cart.html">Masukkan ke keranjang</a>
                            </div>
                            <div class="wpo-product-text">
                                <h3><a href="shop-single.html">Cincin kawin</a></h3>
                                <span>$548.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="wpo-product-item">
                            <div class="wpo-product-img">
                                <img src="{{ url('public/assets') }}/images/product/7.jpg" alt="">
                                <a href="cart.html">Masukkan ke keranjang</a>
                            </div>
                            <div class="wpo-product-text">
                                <h3><a href="shop-single.html">Gaun pernikahan</a></h3>
                                <span>$380.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="wpo-product-item">
                            <div class="wpo-product-img">
                                <img src="{{ url('public/assets') }}/images/product/8.jpg" alt="">
                                <a href="cart.html">Masukkan ke keranjang</a>
                            </div>
                            <div class="wpo-product-text">
                                <h3><a href="shop-single.html">Gaya Rambut</a></h3>
                                <span>$290.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- end container -->
    </section>
    <!-- end wpo-product-section -->

    <!-- start wpo-cta-section -->

    <div class="wpo-cta-section">
        <div class="conatiner-fluid">
            <div class="wpo-cta-item">
                <span><img src="{{ url('public/assets') }}/images/cta/1.png" alt=""></span>
                <h2>Mari Rayakan Cinta Anda</h2>
                <a class="theme-btn-s2" href="contact.html">Hubungi Kami</a>
            </div>
        </div>
    </div>

    <!-- end wpo-cta-section -->

    <!-- start wpo-pricing-section -->
    <section class="wpo-pricing-section section-padding">
        <div class="container">
            <div class="row">
                <div class="wpo-section-title">
                    <span>Harga</span>
                    <h2>Paket Pernikahan</h2>
                    <div class="section-title-img">
                        <img src="{{ url('public/assets') }}/images/section-title.png" alt="">
                    </div>
                </div>
            </div>
            <div class="wpo-pricing-wrap">
                <div class="row">
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="wpo-pricing-item">
                            <div class="wpo-pricing-top">
                                <div class="wpo-pricing-img">
                                    <img src="{{ url('public/assets') }}/images/pricing/1.png" alt="">
                                </div>
                                <div class="wpo-pricing-text">
                                    <h4>Paket Dasar</h4>
                                    <h2>$250<span>/Bulanan</span></h2>
                                </div>
                            </div>
                            <div class="wpo-pricing-bottom">
                                <div class="wpo-pricing-bottom-text">
                                    <ul>
                                        <li>Riasan bergaya untuk pengantin wanita.
                                        </li>
                                        <li>Penataan label atas</li>
                                        <li>Makanan & sarapan yang luar biasa
                                        </li>
                                        <li>Manikur & Pedikur
                                        </li>
                                        <li>Bahasa Indonesia seluruh tubuh
                                        </li>
                                    </ul>
                                    <a href="pricing.html">Pilih Paket</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="wpo-pricing-item">
                            <div class="wpo-pricing-top">
                                <div class="wpo-pricing-img">
                                    <img src="{{ url('public/assets') }}/images/pricing/2.png" alt="">
                                </div>
                                <div class="wpo-pricing-text">
                                    <h4>Paket standar</h4>
                                    <h2>$550<span>/Bulanan</span></h2>
                                </div>
                            </div>
                            <div class="wpo-pricing-bottom">
                                <div class="wpo-pricing-bottom-text">
                                    <ul>
                                        <li>Riasan bergaya untuk pengantin wanita.
                                        </li>
                                        <li>Penataan label atas</li>
                                        <li>Makanan & sarapan yang luar biasa
                                        </li>
                                        <li>Manikur & Pedikur
                                        </li>
                                        <li>Bahasa Indonesia seluruh tubuh
                                        </li>
                                    </ul>
                                    <a href="pricing.html">Pilih Paket</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="wpo-pricing-item">
                            <div class="wpo-pricing-top">
                                <div class="wpo-pricing-img">
                                    <img src="{{ url('public/assets') }}/images/pricing/3.png" alt="">
                                </div>
                                <div class="wpo-pricing-text">
                                    <h4>Paket Mewah</h4>
                                    <h2>$880<span>/Bulanan</span></h2>
                                </div>
                            </div>
                            <div class="wpo-pricing-bottom">
                                <div class="wpo-pricing-bottom-text">
                                    <ul>
                                        <li>Riasan bergaya untuk pengantin wanita.
                                        </li>
                                        <li>Penataan label atas</li>
                                        <li>Makanan & sarapan yang luar biasa
                                        </li>
                                        <li>Manikur & Pedikur
                                        </li>
                                        <li>Bahasa Indonesia seluruh tubuh
                                        </li>
                                    </ul>
                                    <a href="pricing.html">Pilih Paket</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- start wpo-pricing-section -->

    <!-- start wpo-banner-section -->
    <section class="wpo-banner-section">
        <h4>Hanya ada satu kebahagiaan dalam hidup ini, mencintai dan dicintai</h4>
    </section>
    <!-- end wpo-banner-section -->

    <!-- start of wpo-contact-section -->
    <section class="wpo-contact-section section-padding" id="blog">
        <div class="container">
            <div class="wpo-contact-section-wrapper">
                <div class="wpo-contact-form-area">
                    <div class="wpo-section-title">
                        <span>Let’s Meet</span>
                        <h2>Make an inquiry</h2>
                        <div class="section-title-img">
                            <img src="{{ url('public/assets') }}/images/section-title.png" alt="">
                        </div>
                    </div>
                    <form method="post" class="contact-validation-active" id="contact-form-main">
                        <div>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Name">
                        </div>
                        <div>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Email">
                        </div>
                        <div>
                            <input type="text" class="form-control" name="adress" id="adress"
                                placeholder="Adress">
                        </div>
                        <div>
                            <select name="service" class="form-control">
                                <option disabled="disabled" selected>Services</option>
                                <option>Photography</option>
                                <option>The Rehearsal Dinner</option>
                                <option>The Afterparty</option>
                                <option>Videographers</option>
                                <option>Perfect Cake</option>
                                <option>All Of The Above</option>
                            </select>
                        </div>
                        <div>
                            <select name="guest" class="form-control">
                                <option disabled="disabled" selected>Number Of Guests</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                                <option>05</option>
                            </select>
                        </div>
                        <div>
                            <select name="meal" class="form-control last">
                                <option disabled="disabled" selected>Meal Preferences</option>
                                <option>Chicken Soup</option>
                                <option>Motton Kabab</option>
                                <option>Chicken BBQ</option>
                                <option>Mix Salad</option>
                                <option>Beef Ribs </option>
                            </select>
                        </div>
                        <div class="submit-area">
                            <button type="submit" class="theme-btn-s3">Send An Inquiry</button>
                            <div id="c-loader">
                                <i class="ti-reload"></i>
                            </div>
                        </div>
                        <div class="clearfix error-handling-messages">
                            <div id="success">Thank you</div>
                            <div id="error"> Error occurred while sending email. Please try again later.
                            </div>
                        </div>
                    </form>
                    <div class="border-style"></div>
                </div>
                <div class="vector-1">
                    <img src="{{ url('public/assets') }}/images/contact/1.png" alt="">
                </div>
                <div class="vector-2">
                    <img src="{{ url('public/assets') }}/images/contact/2.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- end of wpo-contact-section -->
    <!-- start wpo-blog-section -->
    <section class="wpo-blog-section section-padding" id="kontak">
        <div class="container">
            <div class="row">
                <div class="wpo-section-title">
                    <span>Berita</span>
                    <h2>Dari Blog Kami
                    </h2>
                    <div class="section-title-img">
                        <img src="{{ url('public/assets') }}/images/section-title.png" alt="">
                    </div>
                </div>
            </div>
            <div class="wpo-blog-items">
                <div class="row">
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="wpo-blog-item">
                            <div class="wpo-blog-img">
                                <img src="{{ url('public/assets') }}/images/blog/img-1.jpg" alt="">
                            </div>
                            <div class="wpo-blog-content">
                                <ul>
                                    <li>By <a href="blog-single.html">Loura Sweety</a></li>
                                    <li>25 Sep 2021</li>
                                </ul>
                                <h2><a href="blog.html">Best wedding gift you may
                                        like & choose.</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="wpo-blog-item">
                            <div class="wpo-blog-img">
                                <img src="{{ url('public/assets') }}/images/blog/img-2.jpg" alt="">
                            </div>
                            <div class="wpo-blog-content">
                                <ul>
                                    <li>By <a href="blog-single.html">David Luis</a></li>
                                    <li>23 Sep 2021</li>
                                </ul>
                                <h2><a href="blog.html">Photography is the important part of wedding.</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="wpo-blog-item">
                            <div class="wpo-blog-img">
                                <img src="{{ url('public/assets') }}/images/blog/img-3.jpg" alt="">
                            </div>
                            <div class="wpo-blog-content">
                                <ul>
                                    <li>By <a href="blog-single.html">Aliana de</a></li>
                                    <li>21 Sep 2021</li>
                                </ul>
                                <h2><a href="blog.html">Top 10 wedding fresh flower decoration idea.</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- end container -->
    </section>
    <!-- end wpo-blog-section -->
@endsection
