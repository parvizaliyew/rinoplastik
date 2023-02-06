<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="@yield('description')">
        <meta name="keywords" content="@yield('keywords')">
        <!-- Links of CSS files -->
        <link rel="stylesheet" href="{{ asset('front/') }}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('front/') }}/css/aos.css">
        <link rel="stylesheet" href="{{ asset('front/') }}/css/animate.min.css">
        <link rel="stylesheet" href="{{ asset('front/') }}/css/meanmenu.css">
        <link rel="stylesheet" href="{{ asset('front/') }}/css/remixicon.css">
        <link rel="stylesheet" href="{{ asset('front/') }}/css/flaticon.css">
        <link rel="stylesheet" href="{{ asset('front/') }}/css/odometer.min.css">
        <link rel="stylesheet" href="{{ asset('front/') }}/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{ asset('front/') }}/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="{{ asset('front/') }}/css/jquery-ui.min.css">
        <link rel="stylesheet" href="{{ asset('front/') }}/css/magnific-popup.min.css">
        <link rel="stylesheet" href="{{ asset('front/') }}/css/fancybox.min.css">
        <link rel="stylesheet" href="{{ asset('front/') }}/css/selectize.min.css">
        <link rel="stylesheet" href="{{ asset('front/') }}/css/twentytwenty.min.css">
        <link rel="stylesheet" href="{{ asset('front/') }}/css/style.css">
        <link rel="stylesheet" href="{{ asset('front/') }}/css/navbar.css">
        <link rel="stylesheet" href="{{ asset('front/') }}/css/footer.css">
        <link rel="stylesheet" href="{{ asset('front/') }}/css/dark.css">
		<link rel="stylesheet" href="{{ asset('front/') }}/css/responsive.css">
		
		<title>@yield('title','Turkan')</title>

        <link rel="icon" type="{{ asset('front/') }}/image/png" href="images/favicon.png">
    </head>

    <body class="box-style-container">

        <!-- Start Preloader Area -->
        <div class="preloader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                </div>
            </div>
        </div>
        <!-- End Preloader Area -->
        <!-- Start Topbar -->
        <div class="topbar-area bg-1F242F">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <ul class="topbar-list">
                            <li><a href="{{ route('contact') }}"><i class="flaticon-emergency-call-1"></i> Emergency 24 hours</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <ul class="topbar-action">
                            <li>
                                <a href="tel:{{ str_replace(' ','',$contact->phone_1) }}"><i class="flaticon-telephone"></i>{{ $contact->phone_1 }}</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->
        <!-- Start Navbar Area -->
        <div class="navbar-area navbar-style-two">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="{{ route('index') }}">
                                <img src="{{ asset('front/') }}/images/logo.png" class="black-logo" alt="image">
                                <img src="{{ asset('front/') }}/images/logo-2.png" class="white-logo" alt="image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{ route('index') }}">
                            <img src="{{ asset('front/') }}/images/logo.png" class="black-logo" alt="image" loading="lazy">
                            <img src="{{ asset('front/') }}/images/logo-2.png" class="white-logo" alt="image" loading="lazy">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li  class="nav-item @if(Route::is('index')) active @endif">
                                    <a href="{{ route('index') }}" class="nav-link">Əsas Səhifə</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('about') }}" class="nav-link @if(Route::is('about')) active @endif">Haqqımızda</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('blog') }}" class="nav-link @if(Route::is('blog')) active @endif">Yeniliklər və Xəbərlər</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('qal') }}" class="nav-link @if(Route::is('qal')) active @endif">Qalereya</a>
                                </li>
                                <li class="nav-item @if(Route::is('contact')) active @endif">
                                    <a href="{{ route('contact') }}" class="nav-link">Əlaqə</a>
                                </li>
                            </ul>

                        </div>
                    </nav>
                </div>
            </div>  
        </div>
        <!-- End Navbar Area -->
        <!-- Search Overlay -->
        <div class="search-overlay">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="search-overlay-layer"></div>
                    <div class="search-overlay-layer"></div>
                    <div class="search-overlay-layer"></div>
                    
                    <div class="search-overlay-close">
                        <span class="search-overlay-close-line"></span>
                        <span class="search-overlay-close-line"></span>
                    </div>
                </div>
            </div>
        </div>