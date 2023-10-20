<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wpocean.com/html/tf/loveme/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Oct 2023 12:40:11 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="{{ url('public/assets') }}/images/logobaru.png">
    <title> Nikahlah - wedding organizer</title>
    <link href="{{ url('public/assets') }}/css/themify-icons.css" rel="stylesheet">
    <link href="{{ url('public/assets') }}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ url('public/assets') }}/css/flaticon.css" rel="stylesheet">
    <link href="{{ url('public/assets') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('public/assets') }}/css/animate.css" rel="stylesheet">
    <link href="{{ url('public/assets') }}/css/owl.carousel.css" rel="stylesheet">
    <link href="{{ url('public/assets') }}/css/owl.theme.css" rel="stylesheet">
    <link href="{{ url('public/assets') }}/css/slick.css" rel="stylesheet">
    <link href="{{ url('public/assets') }}/css/slick-theme.css" rel="stylesheet">
    <link href="{{ url('public/assets') }}/css/swiper.min.css" rel="stylesheet">
    <link href="{{ url('public/assets') }}/css/nice-select.css" rel="stylesheet">
    <link href="{{ url('public/assets') }}/css/owl.transitions.css" rel="stylesheet">
    <link href="{{ url('public/assets') }}/css/jquery.fancybox.css" rel="stylesheet">
    <link href="{{ url('public/assets') }}/css/odometer-theme-default.css" rel="stylesheet">
    <link href="{{ url('public/assets') }}/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div class="loader-line"></div>
                    </div>
                    <img src="{{ url('public/assets') }}/images/logobaru.png" alt="">
                </div>
            </div>
        </div>
        <!-- end preloader -->
        <!-- start-header-topbar -->
        <section class="topbar">
            <h2 class="hidden">some</h2>
            <div class="container-fluid">
                <div class="row">
                    <div class="col col-lg-7 col-md-12 col-12">
                        <div class="contact-intro">
                            <ul>
                                <li><i class="fi flaticon-email"></i>fathur34rahman56@gmail.com</li>
                                <li><i class="fi flaticon-phone-call"></i> +62 895 6031 11989</li>
                                <li><i class="fi flaticon-maps-and-flags"></i> Ketapang – Kalimantan Barat</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-lg-5 col-md-12 col-12">
                        <div class="contact-info">
                            <ul>
                                <li><a href="#"><i class="fi flaticon-facebook-app-symbol"></i></a></li>
                                <li><a href="#"><i class="fi flaticon-twitter"></i></a></li>
                                <li><a href="#"><i class="fi flaticon-linkedin"></i></a></li>
                                <li><a href="#"><i class="fi flaticon-instagram-1"></i></a></li>
                                <li><a href="#"><i class="fi flaticon-pinterest"></i></a></li>
                                <li><a href="#"><i class="fi flaticon-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end-header-topbar -->

        <!-- start wpo-box-style -->
        <div class="wpo-box-style">
            <!-- Start header -->
            @include('layouts/section/header')
            <!-- end of header -->
            @yield('conten')
            <!-- start of wpo-site-footer-section -->
            @include('layouts/section/footer')
            <!-- end of wpo-site-footer-section -->
        </div>
        <!-- end wpo-box-style -->
        
        <!-- color-switcher -->
        <div class="color-switcher-wrap">
            @include('layouts/section/sidebar')
            <div class="color-switcher-item">
            </div>
        </div>
    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->
    <script src="{{ url('public/assets') }}/js/jquery.min.js"></script>
    <script src="{{ url('public/assets') }}/js/bootstrap.bundle.min.js"></script>
    <!-- Plugins for this template -->
    <script src="{{ url('public/assets') }}/js/modernizr.custom.js"></script>
    <script src="{{ url('public/assets') }}/js/jquery.dlmenu.js"></script>
    <script src="{{ url('public/assets') }}/js/jquery-plugin-collection.js"></script>
    <!-- Custom script for this template -->
    <script src="{{ url('public/assets') }}/js/script.js"></script>
</body>


<!-- Mirrored from wpocean.com/html/tf/loveme/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Oct 2023 12:40:39 GMT -->

</html>
