<!doctype html>
<html class="no-js" lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('titre') - {{ $infos->app_name }}</title>
    <meta name="author" content="Realar">
    <meta name="description" content="Realar - Real Estate Apartment Complex HTML Template">
    <meta name="keywords" content="Realar - Real Estate Apartment Complex HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ $infos->GetIcon() }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ $infos->GetIcon() }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ $infos->GetIcon() }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ $infos->GetIcon() }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ $infos->GetIcon() }}">
    <link rel="manifest" href="/front/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ $infos->GetIcon() }}">

    <meta name="theme-color" content="#ffffff">

    <!--==============================
 Google Fonts
 ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet">

    <!--==============================
 All CSS File
 ============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/front/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="/front/css/fontawesome.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="/front/css/magnific-popup.min.css">
    <!-- Swiper Js -->
    <link rel="stylesheet" href="/front/css/swiper-bundle.min.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="/front/css/style.css">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('header')

</head>

<body class="bg-light">
    <!--********************************
   Code Start From Here
 ******************************** -->
    <div class="cursor-follower"></div>



    <!--==============================
     Preloader
  ==============================-->
    <div id="preloader" class="preloader ">
        <div id="loader" class="th-preloader">
            <div class="animation-preloader">
                <div class="txt-loading">
                    @php
                        $appNameLetters = str_split($infos->app_name);
                    @endphp
                    @foreach ($appNameLetters as $letter)
                        <span preloader-text="{{ $letter }}" class="characters">{{ $letter }}</span>
                    @endforeach
                </div>

            </div>
        </div>
    </div> <!--==============================
    Mobile Menu
  ============================== -->
    <div class="th-menu-wrapper onepage-nav">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="{{ route('home') }}">
                    <img src="{{ $infos->GetLogo() }}"  style="Max-height: 30px !important;" alt="{{ $infos->app_name }}">
                </a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li>
                        <a href="{{ route('home') }}">
                            accueil
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}">
                            À propos de nous
                        </a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ route('projet') }}">
                            Projets
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{ route('projet', 'en cours') }}">
                                    Projets en cours
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('projet', 'terminé') }}">
                                    Projets réalisés
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('articles') }}">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div><!--==============================
    Sidemenu
============================== -->
    <div class="sidemenu-wrapper sidemenu-info d-none d-lg-block ">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget  ">
                <div class="th-widget-about">
                    <div class="about-logo">
                        <a href="{{ route('home') }}"><img src="/front/img/logo.svg"
                                alt="{{ $infos->app_name }}"></a>
                    </div>
                    <p class="about-text">
                        {{ $infos->text_footer ?? '' }}
                    </p>
                </div>
            </div>
            <div class="widget">
                <h3 class="widget_title">Entrer en contact</h3>
                <div class="th-widget-contact">
                    <div class="info-box_text">
                        <div class="icon">
                            <img src="{{ $infos->GetLogo() }}" alt="img">
                        </div>
                        <div class="details">
                            <p>{{ $infos->adresse1 }}</p>
                        </div>
                    </div>
                    <div class="info-box_text">
                        <div class="icon">
                            <img src="/front/img/icon/phone.svg" alt="img">
                        </div>
                        <div class="details">
                            @if ($infos->tel1)
                                <p>
                                    <a href="tel:{{ $infos->tel1 }}" class="info-box_link">{{ $infos->tel1 }}</a>
                                </p>
                            @endif
                            @if ($infos->tel2)
                                <p>
                                    <a href="tel:{{ $infos->tel2 }}" class="info-box_link">{{ $infos->tel2 }}</a>
                                </p>
                            @endif
                        </div>
                    </div>
                    <div class="info-box_text">
                        <div class="icon">
                            <img src="/front/img/icon/envelope.svg" alt="img">
                        </div>
                        <div class="details">
                            @if ($infos->email1)
                                <p>
                                    <a href="mailto:{{ $infos->email1 }}"
                                        class="info-box_link">{{ $infos->email1 }}</a>
                                </p>
                            @endif
                            @if ($infos->email1)
                                <p>
                                    <a href="mailto:{{ $infos->email2 }}"
                                        class="info-box_link">{{ $infos->email2 }}</a>
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget newsletter-widget  ">
                <h3 class="widget_title">Abonnez-vous !</h3>
                <form class="newsletter-form">
                    <div class="form-group">
                        <input class="form-control" type="email" placeholder="Email Address" required="">
                        <button type="submit" class="th-btn"><i class="far fa-paper-plane text-theme"></i></button>
                    </div>
                </form>
                <div class="th-social style2">
                    @if ($infos->facebook)
                        <a href="{{ $infos->facebook }}" target="__blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    @endif
                    @if ($infos->twitter)
                        <a href="{{ $infos->twitter }}" target="__blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                    @endif
                    @if ($infos->linkedin)
                        <a href="{{ $infos->linkedin }}" target="__blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    @endif
                    @if ($infos->instagram)
                        <a href="{{ $infos->instagram }}" target="__blank">
                            <i class="fab fa-instagram-in"></i>
                        </a>
                    @endif
                    @if ($infos->youtube)
                        <a href="{{ $infos->youtube }}" target="__blank">
                            <i class="fab fa-youtube-in"></i></a>
                    @endif
                </div>
            </div>
        </div>
    </div><!--==============================
 Header Area
==============================-->
    <header class="th-header header-default onepage-nav">
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ $infos->GetLogo() }}" style="Max-height: 60px !important;"
                                        alt="{{ $infos->app_name }}">
                                </a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li>
                                        <a href="{{ route('home') }}">
                                            Accueil
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about') }}">
                                            À propos de nous
                                        </a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{ route('projet') }}">
                                            Projets
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="{{ route('projet', 'en cours') }}">
                                                    Projets en cours
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('projet', 'terminé') }}">
                                                    Projets réalisés
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('articles') }}">
                                            Blog
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}#contact-sec">
                                            Contactez-nous
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="header-button d-flex d-lg-none">
                                <button type="button" class="th-menu-toggle sidebar-btn">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-auto d-none d-xxl-block">
                            <div class="header-button">
                                <a href="{{ route('contact') }}" class="th-btn style-border th-btn-icon">Demande
                                    Client</a>
                                <button type="button" class="simple-icon sideMenuInfo sidebar-btn style2 d-none">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>



    @yield('body')




    <footer class="footer-wrapper footer-layout3 bg-light">
        <div class="container th-container2">
            <div class="widget-area bg-theme">
                <div class="footer-container">
                    <div class="row justify-content-between">
                        <div class="col-md-6 col-xl-auto">
                            <div class="widget footer-widget">
                                <div class="th-widget-about">
                                    <div class="about-logo">
                                        <a href="{{ route('home') }}">
                                            <img src="{{ $infos->GetLogo() }}" style="Max-height: 80px !important;" alt="{{ $infos->app_name }}">
                                        </a>
                                    </div>
                                    <p class="about-text">
                                        {{ $infos->text_footer ?? '' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto">
                            <div class="widget footer-widget">
                                <h3 class="widget_title">Entrer en contact</h3>
                                <div class="th-widget-contact">
                                    <div class="info-box_text">
                                        <div class="icon">
                                            <img src="/front/img/icon/location-dot.svg" alt="img">
                                        </div>
                                        <div class="details">
                                            @if ($infos->adresse1)
                                                <p>
                                                    {{ $infos->adresse1 }}
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="info-box_text">
                                        <div class="icon">
                                            <img src="/front/img/icon/phone.svg" alt="img">
                                        </div>
                                        <div class="details">
                                            @if ($infos->tel1)
                                                <p>
                                                    <a href="tel:{{ $infos->tel1 }}" class="info-box_link">
                                                        {{ $infos->tel1 }}
                                                    </a>
                                                </p>
                                            @endif
                                            @if ($infos->tel2)
                                                <p>
                                                    <a href="tel:{{ $infos->tel2 }}" class="info-box_link">
                                                        {{ $infos->tel2 }}
                                                    </a>
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="info-box_text">
                                        <div class="icon">
                                            <img src="/front/img/icon/envelope.svg" alt="img">
                                        </div>
                                        <div class="details">
                                            @if ($infos->email1)
                                                <p>
                                                    <a href="mailto:{{ $infos->email1 }}" class="info-box_link">
                                                        {{ $infos->email1 }}
                                                    </a>
                                                </p>
                                            @endif
                                            @if ($infos->email2)
                                                <p>
                                                    <a href="mailto:{{ $infos->email2 }}" class="info-box_link">
                                                        {{ $infos->email2 }}
                                                    </a>
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto">
                            <div class="widget widget_nav_menu footer-widget">
                                <h3 class="widget_title">Lien utile</h3>
                                <div class="menu-all-pages-container">
                                    <ul class="menu">
                                        <li><a href="{{ route('about') }}">À propos de nous</a></li>
                                        <li><a href="{{ route('projet', 'en cours') }}">Projets en cours</a></li>
                                        <li><a href="{{ route('projet', 'terminé') }}">Projets terminés</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto">
                            <div class="widget widget_nav_menu footer-widget">
                                <h3 class="widget_title"><br></h3>
                                <div class="menu-all-pages-container">
                                    <ul class="menu">
                                        <li><a href="{{ route('about') }}">À propos de nous</a></li>
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area" data-bg-src="/front/img/bg/x-footer-bg-3-1.png">
            <div class="container th-container2">
                <div class="copyright-wrap bg-light">
                    <div class="footer-container">
                        <div class="row gy-3 align-items-center">
                            <div class="col-lg-6">
                                <p class="copyright-text">
                                    Copyright <i class="fal fa-copyright"></i> 2024 <a
                                        href="{{ route('home') }}">{{ $infos->app_name }}</a>, All rights reserved,
                                    build by <a href="https://e-build.tn" style="color: #ff0000;"
                                        target="__blank"><b>E-Build</b></a> .</p>
                            </div>
                            <div class="col-lg-6">
                                <div class="th-social justify-content-lg-end justify-content-center">
                                    @if ($infos->facebook)
                                        <a href="{{ $infos->facebook }}" target="__blank">
                                            <i class="fab fa-facebook-f"></i></a>
                                    @endif
                                    @if ($infos->twitter)
                                        <a href="{{ $infos->twitter }}" target="__blank">
                                            <i class="fab fa-twitter"></i></a>
                                    @endif
                                    @if ($infos->linkedin)
                                        <a href="{{ $infos->linkedin }}" target="__blank">
                                            <i class="fab fa-linkedin-in"></i></a>
                                    @endif
                                    @if ($infos->instagram)
                                        <a href="{{ $infos->instagram }}" target="__blank">
                                            <i class="fab fa-instagram-in"></i></a>
                                    @endif
                                    @if ($infos->youtube)
                                        <a href="{{ $infos->youtube }}" target="__blank">
                                            <i class="fab fa-youtube-in"></i></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--********************************
Code End  Here
******************************** -->


    <div class="compare-btn d-none" id="compare-btn">
        <img width="30" height="30" src="https://img.icons8.com/hatch/30/FFFFFF/scales.png" alt="scales" />
        <br>
        <span class="count" id="count-total-compare">
            0
        </span>
    </div>

    <style>
        .compare-btn {
            position: fixed;
            right: 35px;
            bottom: 90px;
            background-color: #b69364;
            z-index: 100;
            padding: 5px;
            border-radius: 100%;
            border: solid 4px white;
        }

        .compare-btn .count {
            position: absolute;
            top: -15px;
            right: -10px;
            background-color: black;
            color: white;
            padding: 0px 8px 0px 8px;
            border-radius: 100%;
            font-size: 10px;
        }
    </style>

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>

    <!--==============================
All Js File
============================== -->
    <!-- Jquery -->
    <script src="/front/js/vendor/jquery-3.7.1.min.js"></script>

    <!-- Swiper Js -->
    <script src="/front/js/swiper-bundle.min.js"></script>
    <!-- Bootstrap -->
    <script src="/front/js/bootstrap.min.js"></script>
    <!-- Magnific Popup -->
    <script src="/front/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up -->
    <script src="/front/js/jquery.counterup.min.js"></script>
    <!-- Range Slider -->
    <script src="/front/js/jquery-ui.min.js"></script>
    <!-- Isotope Filter -->
    <script src="/front/js/imagesloaded.pkgd.min.js"></script>
    <script src="/front/js/isotope.pkgd.min.js"></script>
    <!-- Gsap -->
    <script src="/front/js/gsap.min.js"></script>



    <!-- Main Js File -->
    <script src="/front/js/main.js?v={{ time() }}"></script>

    <script src="/compare.js?v={{ time() }}"></script>
</body>

</html>
