<div class="sidebar-wrapper">
    <div class="sidebar sidebar-collapse" id="sidebar">
        <div class="sidebar__menu-group">
            <ul class="sidebar_nav">
                <li>
                    <a href="{{ url('admin') }}" class="{{ Request::is('report') ? 'active' : '' }}">
                        <span class="nav-icon uil uil-window-section"></span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>
                <li class="has-child ">
                    <a href="#" class="">
                        <span class="nav-icon uil uil-create-dashboard"></span>
                        <span class="menu-text">Template</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li class="active">
                            <a href="index.html">Heaader</a>
                        </li>
                        <li class>
                            <a href="demo2.html">Sidebar</a>
                        </li>
                        <li class>
                            <a href="demo3.html">Footer</a>
                        </li>
                    </ul>
                </li>
                <li class="has-child ">
                    <a href="#" class="">
                        <span class="nav-icon uil uil-create-dashboard"></span>
                        <span class="menu-text">Conten</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li class="active">
                            <a href="index.html">Gambar</a>
                        </li>
                        <li class>
                            <a href="demo2.html">Blog</a>
                        </li>
                        <li class>
                            <a href="demo2.html">produk </a>
                        </li>
                    </ul>
                </li>
                {{-- <li>
                    <a href="changelog.html" class>
                        <span class="nav-icon uil uil-arrow-growth"></span>
                        <span class="menu-text">Changelog</span>
                        <span class="badge badge-info-10 menuItem rounded-pill">1.1.6</span>
                    </a>
                </li> --}}
                <li class="menu-title mt-30">
                    <span>User</span>
                </li>
                <li class="has-child ">
                    <a href="#" class="">
                        <span class="nav-icon uil uil-create-dashboard"></span>
                        <span class="menu-text">Account</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li class="active">
                            <a href="account-admin">Admin</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
