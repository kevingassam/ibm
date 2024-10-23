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

</head>

<body class="bg-light">
    <!--********************************
   Code Start From Here
 ******************************** -->
    <div class="cursor-follower"></div>

    <!-- slider drag cursor -->
    <div class="slider-drag-cursor"><i class="fas fa-angle-left me-2"></i> DRAG <i class="fas fa-angle-right ms-2"></i>
    </div>

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
                    <img src="/front/img/logo-white.svg" alt="{{ $infos->app_name }}">
                </a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="{{ route('home') }}">
                            accueil
                        </a>
                    </li>
                    <li><a href="about.html">
                            About Us
                        </a></li>
                    <li class="menu-item-has-children">
                        <a href="property.html">
                            Properties
                        </a>
                        <ul class="sub-menu">
                            <li><a href="property.html">
                                    Properties
                                </a></li>
                            <li><a href="property-details.html">
                                    Property Details
                                </a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="agency.html">
                            Agencies
                        </a>
                        <ul class="sub-menu">
                            <li><a href="agency.html">
                                    Agencies
                                </a></li>
                            <li><a href="agency-details.html">
                                    Agencies Details
                                </a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">
                            Pages
                        </a>
                        <ul class="sub-menu">
                            <li><a href="team.html">
                                    Agent Page
                                </a></li>
                            <li><a href="team-details.html">
                                    Agent Details
                                </a></li>
                            <li><a href="pricing.html">
                                    Pricing Page
                                </a></li>
                            <li class="menu-item-has-children"><a href="shop.html">
                                    Shop Page
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="shop.html">
                                            Shop Page
                                        </a></li>
                                    <li><a href="shop-details.html">
                                            Shop Details
                                        </a></li>
                                    <li><a href="cart.html">
                                            Cart Page
                                        </a></li>
                                    <li><a href="checkout.html">
                                            Checkout Page
                                        </a></li>
                                    <li><a href="wishlist.html">
                                            Wistlist Page
                                        </a></li>
                                </ul>
                            </li>
                            <li><a href="error.html">
                                    Error Page
                                </a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="blog.html">
                            Blog
                        </a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">
                                    Blog Page
                                </a></li>
                            <li><a href="blog-details.html">
                                    Blog Details
                                </a></li>
                        </ul>
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
                    <p class="about-text"> Rapidiously myocardinate cross-platform intellectual capital model.
                        Appropriately create interactive infrastructures</p>
                </div>
            </div>
            <div class="widget  ">
                <h3 class="widget_title">Get In Touch</h3>
                <div class="th-widget-contact">
                    <div class="info-box_text">
                        <div class="icon"><img src="/front/img/icon/location-dot.svg" alt="img"></div>
                        <div class="details">
                            <p>789 Inner Lane, Holy park,</p>
                            <p>California, USA</p>
                        </div>
                    </div>
                    <div class="info-box_text">
                        <div class="icon">
                            <img src="/front/img/icon/phone.svg" alt="img">
                        </div>
                        <div class="details">
                            <p><a href="tel:+0123456789" class="info-box_link">+01 234 567 890</a></p>
                            <p><a href="tel:+09876543210" class="info-box_link">+09 876 543 210</a></p>
                        </div>
                    </div>
                    <div class="info-box_text">
                        <div class="icon">
                            <img src="/front/img/icon/envelope.svg" alt="img">
                        </div>
                        <div class="details">
                            <p><a href="mailto:mailinfo00@realar.com" class="info-box_link">mailinfo00@realar.com</a>
                            </p>
                            <p><a href="mailto:support24@realar.com" class="info-box_link">support24@realar.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget newsletter-widget  ">
                <h3 class="widget_title">Subscribe Now</h3>
                <form class="newsletter-form">
                    <div class="form-group">
                        <input class="form-control" type="email" placeholder="Email Address" required="">
                        <button type="submit" class="th-btn"><i class="far fa-paper-plane text-theme"></i></button>
                    </div>
                </form>
                <div class="th-social style2">
                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.behance.com/"><i class="fab fa-behance"></i></a>
                    <a href="https://www.vimeo.com/"><i class="fab fa-vimeo-v"></i></a>
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
                                    <img src="{{ $infos->GetLogo() }}" alt="{{ $infos->app_name }}">
                                </a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li >
                                        <a href="{{ route('home') }}">
                                            Accueil
                                        </a>
                                    </li>
                                    <li><a href="#about-sec">
                                            About Us
                                        </a></li>
                                    <li>
                                        <a href="#property-sec">
                                            Properties
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#team-sec">
                                            Agents
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#blog-sec">
                                            Blog
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}#contact-sec">
                                            Contact Us
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
                                <a href="{{ route('contact') }}" class="th-btn style-border th-btn-icon">Request A Visit</a>
                                <button type="button" class="simple-icon sideMenuInfo sidebar-btn style2">
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
                                        <a href="{{ route('home') }}"><img src="{{ $infos->GetLogo() }}"
                                                alt="{{ $infos->app_name }}"></a>
                                    </div>
                                    <p class="about-text"> Rapidiously myocardinate cross-platform intellectual
                                        capital model. Appropriately create interactive infrastructures</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto">
                            <div class="widget footer-widget">
                                <h3 class="widget_title">Get In Touch</h3>
                                <div class="th-widget-contact">
                                    <div class="info-box_text">
                                        <div class="icon"><img src="/front/img/icon/location-dot.svg"
                                                alt="img"></div>
                                        <div class="details">
                                            <p>789 Inner Lane, Holy park,</p>
                                            <p>California, USA</p>
                                        </div>
                                    </div>
                                    <div class="info-box_text">
                                        <div class="icon">
                                            <img src="/front/img/icon/phone.svg" alt="img">
                                        </div>
                                        <div class="details">
                                            <p><a href="tel:+0123456789" class="info-box_link">+01 234 567 890</a>
                                            </p>
                                            <p><a href="tel:+09876543210" class="info-box_link">+09 876 543 210</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="info-box_text">
                                        <div class="icon">
                                            <img src="/front/img/icon/envelope.svg" alt="img">
                                        </div>
                                        <div class="details">
                                            <p><a href="mailto:mailinfo00@realar.com"
                                                    class="info-box_link">mailinfo00@realar.com</a></p>
                                            <p><a href="mailto:support24@realar.com"
                                                    class="info-box_link">support24@realar.com</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto">
                            <div class="widget widget_nav_menu footer-widget">
                                <h3 class="widget_title">Useful Link</h3>
                                <div class="menu-all-pages-container">
                                    <ul class="menu">
                                        <li><a href="about.html">About us</a></li>
                                        <li><a href="property.html">Featured Properties</a></li>
                                        <li><a href="agency.html">Our Best Services</a></li>
                                        <li><a href="{{ route('contact') }}">Request Visit</a></li>
                                        <li><a href="{{ route('contact') }}">FAQ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto">
                            <div class="widget widget_nav_menu footer-widget">
                                <h3 class="widget_title">Explore</h3>
                                <div class="menu-all-pages-container">
                                    <ul class="menu">
                                        <li><a href="property.html">All Properties</a></li>
                                        <li><a href="team.html">Our Agents</a></li>
                                        <li><a href="property.html">All Projects</a></li>
                                        <li><a href="about.html">Our Process</a></li>
                                        <li><a href="{{ route('contact') }}">Neighborhood</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area" data-bg-src="/front/img/bg/footer-bg-3-1.png">
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
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.instagram.com/"><i class="fab fa-youtube"></i></a>
                                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
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
    <script src="/front/js/main.js"></script>
</body>

</html>
