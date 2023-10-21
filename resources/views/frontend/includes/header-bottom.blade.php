<div class="header-bottom  header-sticky">
    <div class="container-fluid">
        <div class="row align-items-center">

            <div class="col-xl-2 col-lg-2">
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('/') }}front/assets/img/logo/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-xl-10 col-lg-10">

                <div class="main-menu f-right d-none d-lg-block">
                    <nav>
                        <ul id="navigation">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="javascript:void(0)">Blog Categories</a>
                                <ul class="submenu">
                                    <li><a href="{{ route('category-blogs') }}">Blog One</a></li>
                                    <li><a href="{{ route('category-blogs') }}">Blog Two</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                            <li>
                                <div class="header-right-btn f-right  ml-15">
                                    <a href="login.html" class="header-btn">Login</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="col-12">
                <div class="mobile_menu d-block d-lg-none"></div>
            </div>
        </div>
    </div>
</div>
