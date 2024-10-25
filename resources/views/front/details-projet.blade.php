@extends('front.fixe')
@section('titre', $projet->nom)
@section('body')


    <!--==============================
                Breadcumb
            ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ Storage::url($projet->photo) }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">{{ $projet->nom }}</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ route('home') }}">accueil</a></li>
                            <li>{{ $projet->nom }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
            Property Page Area
            ==============================-->
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="slider-area property-slider1">
                <div class="swiper th-slider mb-4" id="propertySlider"
                    data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".property-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="property-slider-img">
                                <img src="{{ Storage::url($projet->photo) }}" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="property-slider-img">
                                <img src="/front/img/property/property_inner_2.jpg" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper th-slider property-thumb-slider"
                    data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}},"autoplayDisableOnInteraction":"true"}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="property-slider-img">
                                <img src="{{ Storage::url($projet->photo) }}" alt="Image">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="property-slider-img">
                                <img src="/front/img/property/property_inner_2.jpg" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>

                <button data-slider-prev="#propertySlider" class="slider-arrow style3 slider-prev"><img
                        src="/front/img/icon/arrow-left.svg" alt="icon"></button>
                <button data-slider-next="#propertySlider" class="slider-arrow style3 slider-next"><img
                        src="/front/img/icon/arrow-right.svg" alt="icon"></button>
            </div>
            <div class="row gx-30">
                <div class="col-xxl-8 col-lg-7">
                    <div class="property-page-single">
                        <div class="page-content">
                            <div class="property-meta mb-30">
                                <span class="property-tag text-capitalize">{{ $projet->type }}</span>
                                <span>
                                    <img src="/front/img/icon/calendar.svg" alt="img">
                                    {{ $projet->created_at->format('d-m-Y H:m') }}
                                </span>
                            </div>
                            <h2 class="page-title">À propos de ce projet</h2>
                            <p class="mb-30">
                                {!! $projet->description !!}
                            </p>
                            <h2 class="page-title mb-20">Aperçu de la propriété</h2>
                            <ul class="property-grid-list">
                                <li>
                                    <div class="property-grid-list-icon">
                                        <img src="/front/img/icon/property-single-icon1-1.svg" alt="img">
                                    </div>
                                    <div class="property-grid-list-details">
                                        <h4 class="property-grid-list-title">ID NO.</h4>
                                        <p class="property-grid-list-text">#{{ $projet->id }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="property-grid-list-icon">
                                        <img src="/front/img/icon/property-single-icon1-2.svg" alt="img">
                                    </div>
                                    <div class="property-grid-list-details">
                                        <h4 class="property-grid-list-title">Type</h4>
                                        <p class="property-grid-list-text text-capitalize">{{ $projet->type }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="property-grid-list-icon">
                                        <img src="/front/img/icon/property-single-icon1-3.svg" alt="img">
                                    </div>
                                    <div class="property-grid-list-details">
                                        <h4 class="property-grid-list-title">Appartements</h4>
                                        <p class="property-grid-list-text">{{ $projet->appartements->count() }}</p>
                                    </div>
                                </li>
                            </ul>
                            <h3 class="page-title mt-50 mb-30">De notre galerie</h3>
                            <div class="row gy-4">
                                <div class="col-xl-5">
                                    <div class="property-gallery-card">
                                        <div class="property-gallery-card-img">
                                            <img class="w-100" src="/front/img/property/property_inner_6.jpg"
                                                alt="img">
                                        </div>
                                        <a class="icon-btn popup-image" href="/front/img/property/property_inner_6.jpg"><i
                                                class="fal fa-magnifying-glass-plus"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-7">
                                    <div class="property-gallery-card">
                                        <div class="property-gallery-card-img">
                                            <img class="w-100" src="/front/img/property/property_inner_7.jpg"
                                                alt="img">
                                        </div>
                                        <a class="icon-btn popup-image" href="/front/img/property/property_inner_7.jpg"><i
                                                class="fal fa-magnifying-glass-plus"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-7">
                                    <div class="property-gallery-card">
                                        <div class="property-gallery-card-img">
                                            <img class="w-100" src="/front/img/property/property_inner_8.jpg"
                                                alt="img">
                                        </div>
                                        <a class="icon-btn popup-image" href="/front/img/property/property_inner_8.jpg"><i
                                                class="fal fa-magnifying-glass-plus"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-5">
                                    <div class="property-gallery-card">
                                        <div class="property-gallery-card-img">
                                            <img class="w-100" src="/front/img/property/property_inner_9.jpg"
                                                alt="img">
                                        </div>
                                        <a class="icon-btn popup-image" href="/front/img/property/property_inner_9.jpg"><i
                                                class="fal fa-magnifying-glass-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <h3 class="page-title mt-50 mb-25">Liste des plans</h3>
                            <div class="row gy-3">
                                @foreach ($projet->appartements as $appartement)
                                    <div>
                                        <div>
                                            <div>
                                                <h6 class="text-capitalize"> {{ $appartement->nom }} </h6>
                                            </div>
                                            <div></div>
                                        </div>
                                        <div>
                                            <table class="table">
                                                <thead>
                                                    <th>Numéro</th>
                                                    <th>Etage</th>
                                                    <th>Type</th>
                                                    <th>Pièce</th>
                                                    <th>Surface</th>
                                                    <th>Plan</th>
                                                    <th>Demande d'infos</th>
                                                    <th>Comparaison</th>
                                                </thead>
                                                <tbody>
                                                    @forelse ($appartement->DetailsAppartement as $details)
                                                        <tr>
                                                            <td>{{ $details->numero }}</td>
                                                            <td>{{ $details->etage }}</td>
                                                            <td>{{ $details->type }}</td>
                                                            <td>{{ $details->piece }}</td>
                                                            <td>{{ $details->surface }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ Storage::url($details->plan) }}"
                                                                    download="{{ $details->etage }}" target="__blank">
                                                                    <img width="25" height="25" src="https://img.icons8.com/ios-filled/25/FFFFFF/pdf--v1.png" alt="pdf--v1"/>
                                                                </a>
                                                            </td>
                                                            <td><a href="#" class="btn btn-sm btn-outline-light">Demander</a></td>
                                                            <td class="text-center">
                                                                <img width="25" height="25" src="https://img.icons8.com/glyph-neue/25/FFFFFF/bookmark-ribbon.png" alt="bookmark-ribbon"/>
                                                            </td>
                                                        </tr>
                                                        @empty
                                                        <tr>
                                                            <td colspan="8" class="text-center">Aucun résultat</td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <h3 class="page-title mt-45 mb-30">Localisation</h3>
                            <div class="location-map">
                                <div class="contact-map">
                                    @if ($projet->map)
                                        <iframe src="{{ $projet->map }}" allowfullscreen="" loading="lazy"></iframe>
                                    @endif

                                </div>
                                {{-- <div class="location-map-address">
                                    <div class="thumb">
                                        <img src="/front/img/property/property_inner_1.jpg" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="title">Address:</h4>
                                        <p class="text">Brooklyn, New York 11233, United States</p>
                                        <h4 class="title">Post Code:</h4>
                                        <p class="text">12345</p>
                                    </div>
                                </div> --}}
                            </div>
                            <h3 class="page-title mt-50 mb-30">Vidéo de la propriété</h3>
                            <div class="video-box2 mb-30">
                                <img src="{{ Storage::url($projet->photo) }}" alt="img">
                                @if ($projet->video)
                                    <a href="{{ $projet->video }}" class="play-btn style4 popup-video"><i
                                            class="fa-sharp fa-solid fa-play"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget-property-contact">
                            <h4 class="widget_subtitle">For Rent</h4>
                            <h4 class="widget_price">$45, 000, 000</h4>
                            <p class="widget_text">I am interested in this property</p>
                            <form action="#" class="widget-property-contact-form">
                                <div class="form-group">
                                    <input type="text" class="form-control style-border" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control style-border" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control style-border" placeholder="Phone Number">
                                </div>
                                <button class="th-btn style-white th-btn-icon mt-15">Request Al Video</button>
                            </form>
                        </div>
                        <div class="widget  ">
                            <h3 class="widget_title">Featured Listing</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="/front/img/blog/recent-post-1-1.jpg"
                                                alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Exploring
                                                The Green Spaces Of Realar Residence</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="far fa-calendar"></i>22/6/2024</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="/front/img/blog/recent-post-1-2.jpg"
                                                alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Harmony
                                                With Nature Of Realar Residence</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="far fa-calendar"></i>25/6/2024</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="/front/img/blog/recent-post-1-3.jpg"
                                                alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Exploring
                                                The Green Spaces Of Realar Residence</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="far fa-calendar"></i>27/6/2024</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget_banner  " data-bg-src="/front/img/widget/widget-banner.png">
                            <div class="widget-banner text-center">
                                <h3 class="title">Besoin d'aide ? Nous sommes là pour vous aider</h3>
                                <div class="logo"><img src="{{ $infos->GetLogo() }}" alt="img"></div>
                                <h4 class="subtitle">Vous bénéficiez d'une assistance en ligne</h4>
                                @if ($infos->tel1)
                                    <h5 class="link">
                                        <a href="tel:{{ $infos->tel1 }}">
                                            {{ $infos->tel1 }}
                                        </a>
                                    </h5>
                                @endif
                                <a href="{{ route('contact') }}" class="th-btn style-border th-btn-icon">Contact</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section><!--==============================
            Footer Area
            ==============================-->


@endsection
