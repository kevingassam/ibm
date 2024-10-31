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
                            <h2 class="sec-title text-theme mb-2">{{ $infos->about_titre }}</h2>
                            <p class="mb-0 text-theme"> {{ $infos->about_texte1 }} </p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="img-box3">
                            <div class="img1">
                                <img src="{{ Storage::url($infos->about_photo1)}}" alt="About">
                            </div>
                            <div class="about-tag">
                                <div class="about-experience-tag">
                                    <span class="circle-title-anime">{{ $infos->app_name }}</span>
                                </div>
                                <a href="{{ Storage::url($infos->about_video) }}" class="play-btn popup-video"><i
                                        class="fa-sharp fa-solid fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="img-box3">
                            <div class="img1">
                                <img src="{{ Storage::url($infos->about_photo2)}}" alt="About">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <p class="text-theme">{{ $infos->about_texte2 }}</p>
                    </div>
                    <div class="col-lg-6">
                        <p class="text-theme">{{ $infos->about_texte3 }}</p>
                        <div class="about-wrap2 style-theme mt-50">
                            <div class="checklist style4">
                                <ul>
                                    <li><img src="/front/img/icon/checkmark.svg" alt="img">Des services immobiliers de qualité
                                    </li>
                                    <li><img src="/front/img/icon/checkmark.svg" alt="img">Garantie de satisfaction à 100%
                                    </li>
                                    <li><img src="/front/img/icon/checkmark.svg" alt="img">Équipe très professionnelle
                                    </li>
                                    <li><img src="/front/img/icon/checkmark.svg" alt="img">Traiter toujours à temps</li>
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
                                <img src="{{ Storage::url($infos->about_photo3)}}" alt="About">
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
                                        <img src="https://as2.ftcdn.net/v2/jpg/01/91/47/87/1000_F_191478790_eCF3nQLD3wCTDxOKsagzRZKMkr6hbRE6.jpg" alt="img">
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

@endsection
