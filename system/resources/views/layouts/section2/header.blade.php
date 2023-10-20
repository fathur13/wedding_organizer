<header class="header-top">
    <nav class="navbar navbar-light">
        <div class="navbar-left">
            <div class="logo-area">
                <a class="navbar-brand" href="index.html">
                    <img class="dark" src="{{ url('public/assets') }}/images/logobaru.png" alt="logo">
                    <img class="light" src="{{ url('public/assets2') }}/img/logo-white.png" alt="logo">
                </a>
                <a href="#" class="sidebar-toggle">
                    <img class="svg" src="{{ url('public/assets2') }}/img/svg/align-center-alt.svg"
                        alt="img"></a>
            </div>
        </div>

        <div class="navbar-right">
            <ul class="navbar-right__menu">
                <li class="nav-author">
                    <div class="dropdown-custom">
                        <a href="javascript:;" class="nav-item-toggle"><img
                                src="{{ url('public/assets') }}/images/fotoaku.jpg" alt class="rounded-circle">
                            @if (Auth::check())
                                <span class="nav-item__title">{{ Auth::user()->name }} <i
                                        class="las la-angle-down nav-item__arrow"></i></span>
                            @else
                                <span class="nav-item__title">fathur <i
                                        class="las la-angle-down nav-item__arrow"></i></span>
                            @endif

                        </a>
                        <div class="dropdown-parent-wrapper">
                            <div class="dropdown-wrapper">
                                <div class="nav-author__info">
                                    <div class="author-img">
                                        <img src="{{ url('public/assets') }}/images/fotoaku.jpg" alt
                                            class="rounded-circle">
                                    </div>
                                    <div>
                                        <h6>Fathur</h6>
                                        <span>Depolover</span>
                                    </div>
                                </div>
                                <div class="nav-author__options">
                                    <ul>
                                        
                                        <li>
                                            <a href>
                                                <i class="uil uil-setting"></i>
                                                Settings</a>
                                        </li>
                                        
                                    </ul>
                                    <a href="logout" class="nav-author__signout">
                                        <i class="uil uil-sign-out-alt"></i> Sign Out</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </li>

            </ul>

            <div class="navbar-right__mobileAction d-md-none">
                <a href="#" class="btn-search">
                    <img src="{{ url('public/assets2') }}/img/svg/search.svg" alt="search" class="svg feather-search">
                    <img src="{{ url('public/assets2') }}/img/svg/x.svg" alt="x" class="svg feather-x"></a>
                <a href="#" class="btn-author-action">
                    <img class="svg" src="{{ url('public/assets2') }}/img/svg/more-vertical.svg"
                        alt="more-vertical"></a>
            </div>
        </div>

    </nav>
</header>
