@extends('front.fixe')
@section('titre', 'Accueil')
@section('body')
    <!--==============================
                                                                        Hero Area
                                                                        ==============================-->
    <div class="th-hero-wrapper hero-3" id="hero" data-bg-src="{{ $infos->GetVideo() }}">
        @if ($infos->GetTypeMedia() == 'video')
            <video class="hero-video" id="video" src="{{ $infos->GetVideo() }}" loop="" muted="" autoplay="">
            </video>
        @endif
        <div class="container">
            <div class="row gy-5 justify-content-center">
                <div class="col-12">
                    <div class="hero-style3 text-center">
                        <div class="btn-wrap justify-content-center">
                            <a href="{{ route('projet') }}?type=résidentiel" class="th-btn style-border th-btn-icon">Résidentiel</a>
                            <a href="{{ route('projet') }}?type=commercial" class="th-btn style-border th-btn-icon">Commercial</a>
                        </div>
                        <h1 class="hero-title text-white">
                            Découvrez le mélange harmonieux du luxe
                        </h1>
                        <form class="property-search-form">
                            <label>Recherche de propriété</label>
                            <select class="form-select" name="type" id="type">
                                <option value="offer_type" selected="selected">Type</option>
                                <option value="résidentiel">Résidentiel</option>
                                <option value="commercial">Commercial</option>
                            </select>
                            <div class="form-group">
                                <i class="far fa-search"></i>
                                <input class="form-control" type="text" placeholder="Recherche par clé">
                            </div>
                            <select class="form-select" name="piece" id="piece">
                                <option value="" selected="selected">Pièces</option>
                                @foreach ($pieces as $piece)
                                    <option value="{{ $piece }}">{{ $piece }}</option>
                                @endforeach
                            </select>
                            <button class="th-btn" type="submit"><i class="far fa-search"></i> Recherche</button>
                        </form>
                        <div class="scroll-down">
                            <a href="#property-sec" class="hero-scroll-wrap"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--======== / Hero Section ========--><!--==============================
                                                                        About Area
                                                                        ==============================-->
    <div class="overflow-hidden space-top overflow-hidden" id="about-sec">
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
                            <h2 class="sec-title text-theme mb-2">Immobilière Ben Mokthar </h2>
                            <h4 class="sec-title text-theme mb-2">l'immobilier en toute confiance</h4>
                            <p class="mb-0 text-theme">Chez IBM, nous plaçons la satisfaction de nos futurs propriétaires au
                                centre de nos préoccupations. C’est pourquoi toutes nos réalisations associent des
                                emplacements étudiés à une architecture moderne pour faire de votre logement un espace où il
                                fait bon vivre.</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="img-box3">
                            <div class="img1">
                                <img src="/front/img/normal/about_3_1.png" alt="About">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
                                                                        Property Area 2
                                                                        ==============================-->

        <br>

    <div class="client-area-1 bg-theme space">
        <div class="container th-container2">
            <div class="swiper th-slider has-shadow" id="clientSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"3"},"768":{"slidesPerView":"4"},"992":{"slidesPerView":"5"},"1200":{"slidesPerView":"6"}}}'>
                <div class="swiper-wrapper">

                    @foreach ($partenaires as $partenaire)
                        <div class="swiper-slide">
                            <a href="#" class="client-card">
                                <img src="{{ Storage::url($partenaire->logo) }}" alt="{{ $partenaire->nom }}">
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>


    <section class="space overflow-hidden" id="property-sec">
        <div class="sec-bg-shape2-1 spin shape-mockup d-xl-block d-none" data-top="40%" data-right="1%">
            <img src="/front/img/shape/section_shape_2_1.jpg" alt="img">
        </div>
        <div class="sec-bg-shape2-3 jump shape-mockup d-xl-block d-none" data-bottom="35%" data-left="0%">
            <img src="/front/img/shape/section_shape_2_3.jpg" alt="img">
        </div>
        <div class="container th-container2">
            <div class="row justify-content-between align-items-center">
                <div class="col-xxl-5 col-lg-8">
                    <div class="title-area">
                        <span class="sub-title">Annonce en vedette</span>
                        <h2 class="sec-title text-theme">Trouvez la maison de vos rêves aujourd'hui </h2>
                        <p class="text-theme">Quis nulla blandit vulputate morbi adipiscing sem vestibulum. Nulla
                            turpis integer dui sed posuere sem. Id molestie mi arcu gravida lorem potenti.</p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <ul class="nav nav-tabs property-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="buy-tab" data-bs-toggle="tab"
                                    data-bs-target="#buy-tab-pane" type="button" role="tab"
                                    aria-controls="buy-tab-pane" aria-selected="false">Buy</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content property-tab-content position-relative">
                <div class="tab-pane fade show active" id="rent-tab-pane" role="tabpanel" aria-labelledby="rent-tab"
                    tabindex="0">
                    <div class="slider-area property-slider2 slider-drag-wrap">
                        <div class="swiper th-slider"
                            data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1500":{"slidesPerView":"4"}},"spaceBetween":"32","grabCursor":"true","slideToClickedSlide":"true"}'>
                            <div class="swiper-wrapper">

                                @foreach ($projets as $projet)
                                    <div class="swiper-slide">
                                        <div class="property-card2">
                                            <div class="property-card-thumb img-shine">
                                                <img src="{{ Storage::url($projet->photo) }}" alt="img">
                                            </div>
                                            <div class="property-card-meta">
                                                <span>
                                                    <img src="/front/img/icon/property-icon1-1.svg" alt="img">
                                                    {{ $projet->type }}
                                                </span>
                                                <span>
                                                    <img src="/front/img/icon/property-icon1-3.svg" alt="img">
                                                    {{ $projet->appartements->count() }} propriétés
                                                </span>
                                            </div>
                                            <div class="property-card-details">
                                                <div class="media-left">
                                                    <h4 class="property-card-title">
                                                        <a
                                                            href="{{ route('projet_details', ['slug' => $projet->slug ]) }}">
                                                            {{ Str::limit($projet->nom, 30) }}
                                                        </a>
                                                    </h4>
                                                    <p class="property-card-location text-capitalize">{{ $projet->type }}
                                                    </p>
                                                </div>
                                                <div class="btn-wrap">
                                                    <a href="{{ route('projet_details', ['slug' => $projet->slug ]) }}"
                                                        class="th-btn style-border2 th-btn-icon">Details
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!--==============================
                                                                        Counter Area
                                                                        ==============================-->
    <div class="space bg-theme">
        <div class="container th-container2">
            <div class="counter-card-wrap style2">
                <div class="counter-card style2">
                    <div class="media-body">
                        <h2 class="box-number text-white"><span class="counter-number text-white">20</span>+</h2>
                        <p class="box-text text-light">Années d'xperiences</p>
                    </div>
                </div>
                <div class="counter-card style2">
                    <div class="media-body">
                        <h2 class="box-number text-white"><span class="counter-number text-white"> {{ $total_projets }} </span></h2>
                        <p class="box-text text-light">Projets</p>
                    </div>
                </div>
                <div class="counter-card style2">
                    <div class="media-body">
                        <h2 class="box-number text-white"><span class="counter-number text-white">{{ $total_appartements }}</span>+</h2>
                        <p class="box-text text-light">Appartements</p>
                    </div>
                </div>
                <div class="counter-card style2">
                    <div class="media-body">
                        <h2 class="box-number text-white"><span class="counter-number text-white">40</span>+</h2>
                        <p class="box-text text-light">Satisfied clieants</p>
                    </div>
                </div>
                <div class="counter-card style2">
                    <div class="media-body">
                        <h2 class="box-number text-white"><span class="counter-number text-white">{{ $total_partenaires }}</span></h2>
                        <p class="box-text text-light">Partenaires</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
                                                                        Service Area
                                                                        ==============================-->
    {{--     <section class="service-area-3 space overflow-hidden">
        <div class="sec-bg-shape2-3 jump shape-mockup d-xl-block d-none" data-top="-2%" data-right="30%">
            <img src="/front/img/shape/section_shape_2_3.jpg" alt="img">
        </div>
        <div class="container th-container2">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="title-area">
                        <span class="sub-title">Services</span>
                        <h2 class="sec-title text-theme">NOS ATOUTS</h2>
                        <p class="text-theme">
                            Notre objectif principal est de fournir des emplacements incroyables à nos partenaires et clients. Au sein de
                            l'immobilier de luxe
                            marché, notre agence vous propose des solutions personnalisées.
                        </p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <a href="{{ route('contact') }}" class="th-btn style2 th-btn-icon">
                            Contactez-nous
                            <img src="/front/img/icon/arrow-right.svg" alt="img">
                        </a>
                        </a>
                    </div>
                </div>
            </div>
            <div class="swiper th-slider service-slider3"
                data-slider-options='{"paginationType":"progressbar","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    @foreach ($atouts as $atout)
                        <div class="swiper-slide">
                            <div class="service-card style3">
                                <div class="service-card-icon">
                                    <img src="/front/img/icon/service-icon3-1.svg" alt="Icon">
                                </div>
                                <h3 class="box-title"><a href="property-details.html">Trusted Developer</a></h3>
                                <p class="box-text">Generous amounts of south facing glazing maximize the solar gains for
                                    most of the year.</p>
                                <div class="service-img img-shine">
                                    <img src="/front/img/service/1-1.png" alt="img">
                                    <a href="property-details.html" class="icon-btn">
                                        <img src="/front/img/icon/arrow-right.svg" alt="img">
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="slider-pagination"></div>
            </div>
        </div>
    </section> --}}

    <!--==============================
                                                                        About Area
                                                                        ==============================-->
    {{--   <div class="overflow-hidden bg-theme space overflow-hidden">
        <div class="about-3-bg-shape text-white sec-bg-shape2-1 spin shape-mockup d-xl-block d-none" data-bottom="15%"
            data-left="3%">
            <img src="/front/img/shape/section_shape_2_1.jpg" alt="img">
        </div>
        <div class="about-3-bg-shape sec-bg-shape2-2 text-white wave-anim shape-mockup d-xl-block d-none" data-top="30%"
            data-right="3%" data-bg-src="/front/img/shape/section_shape_2_2.jpg">
        </div>
        <div class="about-3-bg-shape text-white sec-bg-shape2-3 jump-reverse shape-mockup d-xl-block d-none"
            data-top="25%" data-left="3%">
            <img src="/front/img/shape/section_shape_2_3.jpg" alt="img">
        </div>
        <div class="about-3-bg-shape text-white sec-bg-shape2-1 spin shape-mockup d-xl-block d-none" data-bottom="37%"
            data-right="38%">
            <img src="/front/img/shape/section_shape_2_1.jpg" alt="img">
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-5">
                    <div class="title-area text-center">
                        <span class="sub-title text-white">About Us</span>
                        <h2 class="sec-title text-white">Our Behind Story</h2>
                        <p class="text-light">While surrounded by the splendor of nature, a concept of balancing luxury
                            and sustainability. Realar Residence therefore became a symbol of this admirable endeavor.
                        </p>
                        <div class="btn-wrap justify-content-center">
                            <a href="{{ route('about') }}" class="th-btn mb-0 style-white2 th-btn-icon">
                                En savoir plus sur {{ $infos->app_name }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container th-container2">
            <ul class="about-3-thumb-list">
                <li class="gallery-card">
                    <a class="popup-image jump" href="/front/img/gallery/3-1.png">
                        <img src="/front/img/gallery/3-1.png" alt="img">
                        <i class="fal fa-plus"></i>
                    </a>
                </li>
                <li class="gallery-card">
                    <a class="popup-image jump-reverse" href="/front/img/gallery/3-2.png">
                        <img src="/front/img/gallery/3-2.png" alt="img">
                        <i class="fal fa-plus"></i>
                    </a>
                </li>
                <li class="gallery-card">
                    <a class="popup-image jump-reverse" href="/front/img/gallery/3-3.png">
                        <img src="/front/img/gallery/3-3.png" alt="img">
                        <i class="fal fa-plus"></i>
                    </a>
                </li>
                <li class="gallery-card">
                    <a class="popup-image" href="/front/img/gallery/3-4.png">
                        <img src="/front/img/gallery/3-4.png" alt="img">
                        <i class="fal fa-plus"></i>
                    </a>
                </li>
                <li class="gallery-card">
                    <a class="popup-image jump" href="/front/img/gallery/3-5.png">
                        <img src="/front/img/gallery/3-5.png" alt="img">
                        <i class="fal fa-plus"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div> --}}<!--==============================
                                                                        Portfolio Area
                                                                        ==============================-->
    <section class="space overflow-hidden overflow-hidden">
        <div class="project-bg-shape3-1 sec-bg-shape2-1 jump shape-mockup d-xxl-block d-none" data-bottom="5%"
            data-right="0%">
            <img src="/front/img/shape/section_shape_2_3.jpg" alt="img">
        </div>
        <div class="container th-container2">
            <div class="row justify-content-lg-between align-items-center">
                <div class="col-xxl-6 col-xl-7 col-lg-6">
                    <div class="title-area">
                        <span class="sub-title">Projets</span>
                        <h2 class="sec-title text-theme">Nos derniers projets</h2>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <a href="property.html" class="th-btn style2 th-btn-icon">Browse All Project</a>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider slider-drag-wrap" id="projectSlider3"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1400":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">

                        @foreach ($projets as $key => $projet)
                            <div class="swiper-slide">
                                <div class="portfolio-card style3">
                                    <div class="portfolio-img">
                                        <img src="{{ Storage::url($projet->photo) }}" alt="project image" style="height: 250px !important;" >
                                        <a href="{{ route('projet_details', ['slug' => $projet->slug ]) }}"
                                            class="icon-btn">
                                            <div class="icon">
                                                <img src="/front/img/icon/arrow-right.svg" alt="img">
                                            </div>
                                            Voir
                                        </a>
                                    </div>
                                    <div class="portfolio-content">
                                        <h3 class="portfolio-title">
                                            <a
                                                href="{{ route('projet_details', ['slug' => $projet->slug ]) }}">
                                                {{ $key+1 }}.
                                                {{ Str::limit($projet->nom, 20) }}
                                            </a>
                                        </h3>
                                        <p class="portfolio-text">
                                            {{ Str::limit(html_entity_decode(strip_tags($projet->description)), 100, '...') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="overflow-hidden space">
        <div class="sec-bg-shape2-1 spin shape-mockup d-xl-block d-none" data-bottom="2%" data-left="-1%">
            <img src="/front/img/shape/section_shape_2_1.jpg" alt="img">
        </div>
        <div class="sec-bg-shape2-3 jump shape-mockup d-xl-block d-none" data-top="-1%" data-right="10%">
            <img src="/front/img/shape/section_shape_2_3.jpg" alt="img">
        </div>
        <div class="container th-container2">
            <div class="row justify-content-lg-between align-items-center">
                <div class="col-xxl-6 col-lg-7">
                    <div class="title-area">
                        <span class="sub-title">Témoignage</span>
                        <h2 class="sec-title text-theme">Ce que disent nos clients</h2>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <div class="icon-box">
                            <button data-slider-prev="#testiSlider3" class="slider-arrow style5 default slider-prev"><img
                                    src="/front/img/icon/arrow-left.svg" alt=""></button>
                            <button data-slider-next="#testiSlider3" class="slider-arrow style5 default slider-next"><img
                                    src="/front/img/icon/arrow-right.svg" alt=""></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="swiper th-slider testi-slider3" id="testiSlider3"
                data-slider-options='{"spaceBetween":"32","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2"},"1400":{"slidesPerView":"3"}},"centeredSlides": "true"}'>
                <div class="swiper-wrapper">

                    @foreach ($temoignages as $temoignage)
                        <div class="swiper-slide">
                            <div class="testi-card style3">
                                <p class="testi-card_text">“{{ $temoignage->message }}”</p>
                                <div class="testi-grid_review">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $temoignage->note)
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                        @endif
                                    @endfor
                                </div>
                                <div class="testi-card_profile">
                                    <div class="quote-icon">
                                        <img src="/front/img/icon/qoute.svg" alt="icon">
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
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="overflow-hidden space" id="blog-sec">
        <div class="sec-bg-shape2-3 jump shape-mockup d-xl-block d-none" data-bottom="0%" data-right="4%">
            <img src="/front/img/shape/section_shape_2_3.jpg" alt="img">
        </div>
        <div class="container th-container2">
            <div class="row justify-content-lg-between align-items-center">
                <div class="col-xxl-5 col-xl-6 col-lg-7">
                    <div class="title-area">
                        <span class="sub-title">Actualités et blogs</span>
                        <h2 class="sec-title text-theme">Lisez nos idées</h2>
                        <p class="sec-text text-theme">
                            Les architectes et les ingénieurs collaborent pour créer une conception détaillée
                            des plans qui traduisent les concepts en structures réalisables.
                        </p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <a href="{{ route('articles') }}" class="th-btn style2 th-btn-icon">Parcourir tous les
                            blogs</a>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow slider-drag-wrap" id="blogSlider3"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1500":{"slidesPerView":"4"}},"autoHeight":true}'>
                    <div class="swiper-wrapper">
                        @foreach ($autres as $article)
                            <div class="swiper-slide">
                                <div class="blog-card style3">
                                    <div class="blog-img">
                                        <img src="{{ Storage::url($article->photo) }}" alt="blog image">
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-meta">
                                            <span>{{ $article->created_at->format('d-m-Y H:m') }}</span>
                                        </div>
                                        <h3 class="box-title">
                                            <a
                                                href="{{ route('article', ['id' => $article->id, 'titre' => $article->titre]) }}">
                                                {{ Str::limit($article->titre, 70) }}
                                            </a>
                                        </h3>
                                        <a href="{{ route('article', ['id' => $article->id, 'titre' => $article->titre]) }}"
                                            class="th-btn style-border2 th-btn-icon">
                                            Lire l'article
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section><!--==============================
                                                                        Footer Area
                                                                        ==============================-->
@endsection
