<!doctype html>
<html lang="en" dir="ltr">

<!-- Mirrored from demo.dashboardmarket.com/hexadash-html/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Jun 2023 14:56:08 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nikahlah - Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('public/assets2') }}/css/plugin.min.css">
    <link rel="stylesheet" href="{{ url('public/assets2') }}/style.css">

    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('public/assets') }}/images/logobaru.png">

    <link rel="stylesheet" href="../../../unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body class="layout-light side-menu">
    <div class="mobile-search">
        <form action="https://demo.dashboardmarket.com/" class="search-form">
            <img src="{{ url('public/assets2') }}/img/svg/search.svg" alt="search" class="svg">
            <input class="form-control me-sm-2 box-shadow-none" type="search" placeholder="Search..."
                aria-label="Search">
        </form>
    </div>
    <div class="mobile-author-actions"></div>
    @include('layouts/section2/header')
    <main class="main-content">
        @include('layouts/section2/sidebar')
        @yield('conten')
        @include('layouts/section2/footer')
    </main>
    <div id="overlayer">
        <div class="loader-overlay">
            <div class="dm-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </div>
    </div>
    <div class="overlay-dark-sidebar"></div>
    <div class="customizer-overlay"></div>
    <div class="customizer-wrapper">
        <div class="customizer">
            <div class="customizer__head">
                <h4 class="customizer__title">Customizer</h4>
                <span class="customizer__sub-title">Customize your overview page layout</span>
                <a href="#" class="customizer-close">
                    <img class="svg" src="{{ url('public/assets2') }}/img/svg/x2.svg" alt>
                </a>
            </div>
            <div class="customizer__body">
                <div class="customizer__single">
                    <h4>Layout Type</h4>
                    <ul class="customizer-list d-flex layout">
                        <li class="customizer-list__item">
                            <a href="https://demo.dashboardmarket.com/hexadash-html/ltr" class="active">
                                <img src="{{ url('public/assets2') }}/img/ltr.png" alt>
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                        <li class="customizer-list__item">
                            <a href="https://demo.dashboardmarket.com/hexadash-html/rtl">
                                <img src="{{ url('public/assets2') }}/img/rtl.png" alt>
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="customizer__single">
                    <h4>Sidebar Type</h4>
                    <ul class="customizer-list d-flex l_sidebar">
                        <li class="customizer-list__item">
                            <a href="#" data-layout="light" class="dark-mode-toggle active">
                                <img src="{{ url('public/assets2') }}/img/light.png" alt>
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                        <li class="customizer-list__item">
                            <a href="#" data-layout="dark" class="dark-mode-toggle">
                                <img src="{{ url('public/assets2') }}/img/dark.png" alt>
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="customizer__single">
                    <h4>Navbar Type</h4>
                    <ul class="customizer-list d-flex l_navbar">
                        <li class="customizer-list__item">
                            <a href="#" data-layout="side" class="active">
                                <img src="{{ url('public/assets2') }}/img/side.png" alt>
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                        <li class="customizer-list__item top">
                            <a href="#" data-layout="top">
                                <img src="{{ url('public/assets2') }}/img/top.png" alt>
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                        <li class="colors"></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgYKHZB_QKKLWfIRaYPCadza3nhTAbv7c"></script>

    <script src="{{ url('public/assets2') }}/js/plugins.min.js"></script>
    <script src="{{ url('public/assets2') }}/js/script.min.js"></script>

</body>

<!-- Mirrored from demo.dashboardmarket.com/hexadash-html/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Jun 2023 14:56:09 GMT -->

</html>
