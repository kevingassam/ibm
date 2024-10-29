@extends('front.fixe')
@section('titre', 'À propos de nous')
@section('body')

    <!--==============================
                    Breadcumb
                ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ $infos->GetCoverAbout() }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">À propos de nous</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ route('home') }}">Accueil</a></li>
                            <li>À propos de nous</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
                About Area
                ==============================-->
    <div class="overflow-hidden space" id="about-sec">
        <div class="sec-bg-shape2-1 spin shape-mockup d-xl-block d-none" data-bottom="25%" data-right="12%">
            <img src="/front/img/shape/section_shape_2_1.jpg" alt="img">
        </div>
        <div class="sec-bg-shape2-1 jump shape-mockup d-xl-block d-none" data-bottom="0%" data-left="5%">
            <img src="/front/img/shape/section_shape_2_3.jpg" alt="img">
        </div>
        <div class="container">
            <div class="about-page-wrap">
                <div class="row gy-40 justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <div class="title-area mb-0">
                            <h2 class="sec-title text-theme mb-2">Realar Vission & Mission</h2>
                            <p class="mb-0 text-theme">You are the center of our process. Your needs, your wants, and your
                                goals. We actively listen, always keep it even keel — never rushing you or pushing something
                                you don’t need. </p>
                            <p class="text-theme">Full transparency is our goal. We stay connected while building your home,
                                clearly outlining next steps and collaborating with you to select personal design details.
                                From day one, your peace of mind is our highest priority.</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="img-box3">
                            <div class="img1">
                                <img src="/front/img/normal/about_3_1.png" alt="About">
                            </div>
                            <div class="about-tag">
                                <div class="about-experience-tag">
                                    <span class="circle-title-anime">Realar Living Solutions</span>
                                </div>
                                <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i
                                        class="fa-sharp fa-solid fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="img-box3">
                            <div class="img1">
                                <img src="/front/img/normal/about_3_2.png" alt="About">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <p class="text-theme">We design homes for how people live. Centered Design is our philosophy, our
                            approach to creating spaces that energize and inspire.</p>
                        <p class="text-theme">Our floor plan designs focus on three elements: natural light, color, and
                            clean air all qualities that support your wellbeing and energy levels. When you walk into our
                            homes, you’ll see design that puts people first, and more importantly, you’ll feel it.</p>
                    </div>
                    <div class="col-lg-6">
                        <p class="text-theme">That’s why we build every home like it’s our own. Building locally since 1988,
                            we hold ourselves to the highest standards of quality and construction integrity. In addition to
                            the 28 required county inspections, we complete nine formal Inland inspections, plus nine more
                            third-party critical inspections — that’s 18 additional formal inspections on every Inland Home,
                            by choice. Our goal is that each home will serve your family, and others, for generations to
                            come.</p>
                        <div class="about-wrap2 style-theme mt-50">
                            <div class="checklist style4">
                                <ul>
                                    <li><img src="/front/img/icon/checkmark.svg" alt="img">Quality real estate services
                                    </li>
                                    <li><img src="/front/img/icon/checkmark.svg" alt="img">100% Satisfaction guarantee
                                    </li>
                                    <li><img src="/front/img/icon/checkmark.svg" alt="img">Highly professional team
                                    </li>
                                    <li><img src="/front/img/icon/checkmark.svg" alt="img">Dealing always on time</li>
                                </ul>
                            </div>
                            <div class="call-btn">
                                <div class="icon-btn bg-theme">
                                    <img src="/front/img/icon/phone.svg" alt="img">
                                </div>
                                <div class="btn-content">
                                    <h6 class="btn-title text-theme">Appelez-nous 24h/24 et 7j/7</h6>
                                    <span class="btn-text">
                                        @if ($infos->tel)
                                            <a class="text-theme" href="tel:{{ $infos->tel }}">
                                                {{ $infos->tel }}inde
                                            </a>
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="img-box3">
                            <div class="img1">
                                <img src="/front/img/normal/about_3_3.png" alt="About">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
                Why Choose Us Area
                ==============================-->
    <div class="why-sec-1 overflow-hidden space bg-theme">
        <div class="sec-bg-shape2-1 text-white spin shape-mockup d-xl-block d-none" data-bottom="15%" data-left="12%">
            <img src="/front/img/shape/section_shape_2_1.jpg" alt="img">
        </div>
        <div class="sec-bg-shape2-3 text-white jump shape-mockup d-xl-block d-none" data-bottom="0%" data-right="7%">
            <img src="/front/img/shape/section_shape_2_3.jpg" alt="img">
        </div>
        <div class="container">
            <div class="row justify-content-lg-between align-items-center">
                <div class="col-lg-6">
                    <div class="title-area">
                        <h2 class="sec-title text-white">Pourquoi nous choisir ?</h2>
                        <p class="text-light">
                            Nous sommes une société immobilière avec plus de 20 ans d'expertise et notre objectif principal
                            est de fournir des emplacements incroyables à nos partenaires et clients. Au sein de l'immobilier de luxe
                            marché, notre agence vous propose des solutions personnalisées.
                        </p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <a href="{{ route('contact') }}" class="th-btn style-border th-btn-icon">
                            <span class="th-btn-text">Nous contacter</span>
                        </a>
                        </a>
                    </div>
                </div>
            </div>
            <div class="swiper th-slider"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="service-card style4">
                            <div class="service-card-icon">
                                <img src="/front/img/icon/service-icon4-1.svg" alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="property-details.html">Property Valuation</a></h3>
                            <p class="box-text">Generous amounts of south facing glazing maximize the solar gains for most
                                of the year.</p>
                            <div class="service-img img-shine">
                                <img src="/front/img/service/1-1.png" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-card style4">
                            <div class="service-card-icon">
                                <img src="/front/img/icon/service-icon4-2.svg" alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="property-details.html">Property Management</a></h3>
                            <p class="box-text">All living, dining, kitchen and play areas were devised by attached to the
                                home.</p>
                            <div class="service-img img-shine">
                                <img src="/front/img/service/1-2.png" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-card style4">
                            <div class="service-card-icon">
                                <img src="/front/img/icon/service-icon4-1.svg" alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="property-details.html">Invest Opportunities</a></h3>
                            <p class="box-text">All-inclusive real estate services to facilitate the easy management of
                                your properties.</p>
                            <div class="service-img img-shine">
                                <img src="/front/img/service/1-3.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
                Testimonial Area
                ==============================-->
    <section class="overflow-hidden space">
        <div class="sec-bg-shape2-1 spin shape-mockup d-xxl-block d-none" data-bottom="8%" data-left="8%">
            <img src="/front/img/shape/section_shape_2_1.jpg" alt="img">
        </div>
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-xxl-6 col-lg-7">
                    <div class="title-area text-lg-start text-center">
                        <h2 class="sec-title text-theme">Ce que disent nos clients</h2>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <div class="icon-box">
                            <button data-slider-prev="#testiSlider2" class="slider-arrow style5 default slider-prev"><img
                                    src="/front/img/icon/arrow-left.svg" alt=""></button>
                            <button data-slider-next="#testiSlider2" class="slider-arrow style5 default slider-next"><img
                                    src="/front/img/icon/arrow-right.svg" alt=""></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="testi-wrap2">
                <div class="swiper th-slider testi-slider2" id="testiSlider2"
                    data-slider-options='{"spaceBetween":"48","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"1"},"1200":{"slidesPerView":"2"}}}'>
                    <div class="swiper-wrapper">

                        @foreach ($temoignages as $temoignage)
                            <div class="swiper-slide">
                                <div class="testi-grid-wrap2">
                                    <div class="testi-grid-thumb">
                                        <img src="/front/img/testimonial/testi_thumb_2_1.png" alt="img">
                                    </div>
                                    <div class="testi-card style2">
                                        <div class="testi-grid_review">
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= $temoignage->note)
                                                    <i class="fa-sharp fa-solid fa-star"></i>
                                                @endif
                                            @endfor
                                        </div>
                                        <p class="testi-card_text">"{{ $temoignage->message }}"</p>
                                        <div class="testi-card_profile">
                                            <div class="quote-icon">
                                                <img src="/front/img/icon/qoute2.svg" alt="icon">
                                            </div>
                                            <div class="avatar">
                                                <img src="{{ Storage::url($temoignage->photo) }}" alt="avatar">
                                            </div>
                                            <div class="testi-card_profile-details">
                                                <h3 class="testi-card_name">{{ $temoignage->nom }}</h3>
                                                <span class="testi-card_desig">{{ $temoignage->poste }}</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
                Client Area
                ==============================-->
    <div class="client-area-1 space" data-bg-src="/front/img/hero/hero_bg_4_1.jpg">
        <div class="container">
            <div class="slider-area client-slider3">
                <div class="swiper th-slider has-shadow" id="clientSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"3"},"768":{"slidesPerView":"4"},"992":{"slidesPerView":"5"},"1200":{"slidesPerView":"6"}}}'>
                    <div class="swiper-wrapper">
                        @foreach ($partenaires as $partenaire)
                            <div class="swiper-slide">
                                <a href="#" class="client-card">
                                    <img src="{{ Storage::url($partenaire->photo) }}" alt="{{ $partenaire->nom }}">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
                Footer Area
                ==============================-->

@endsection
