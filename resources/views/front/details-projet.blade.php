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
                        @if ($firstPhoto = collect(json_decode($projet->photos))->first())
                            <div class="swiper-slide">
                                <div class="property-slider-img">
                                    <img src="{{ Storage::url($firstPhoto) }}" alt="{{ $projet->nom }}">
                                </div>
                            </div>
                        @endif
                        @foreach (json_decode($projet->photos) ?? [] as $pic)
                            <div class="swiper-slide">
                                <div class="property-slider-img">
                                    <img src="{{ Storage::url($pic) }}" alt="{{ $projet->nom }}">
                                </div>
                            </div>
                        @endforeach
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
                        @foreach (json_decode($projet->photos) ?? [] as $pic)
                            <div class="swiper-slide">
                                <div class="property-slider-img">
                                    <img src="{{ Storage::url($pic) }}" alt="Image">
                                </div>
                            </div>
                        @endforeach
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
                            <div class="video-box2 mb-30 mt-5">
                                <img src="{{ Storage::url($projet->photo) }}" alt="img">
                                @if ($projet->video)
                                    <a href="{{ $projet->video }}" class="play-btn style4 popup-video"><i
                                            class="fa-sharp fa-solid fa-play"></i></a>
                                @endif
                            </div>
                            <h3 class="page-title mt-50 mb-25">Liste des plans</h3>
                            <div class="row gy-3">
                                @foreach ($projet->appartements as $appartement)
                                    <div>
                                        <div>
                                            <div>
                                                <h6 class="text-capitalize">
                                                    {{ $appartement->nom }}
                                                    ({{ $appartement->type }})
                                                </h6>
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
                                                                    download="{{ $details->etage }}" target="__blank"
                                                                    class="btn btn-sm btn-danger">
                                                                    <img width="25" height="25"
                                                                        src="https://img.icons8.com/ios-filled/25/FFFFFF/pdf--v1.png"
                                                                        alt="pdf--v1" />
                                                                    Télécharger
                                                                </a>
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($details->statut == 'disponible')
                                                                    <a href="{{ route('demander_appartement', $details->id) }}"
                                                                        class="btn btn-sm btn-light">
                                                                        Demander
                                                                    </a>
                                                                @else
                                                                    <b>
                                                                        <b class="text-danger">Vendu !</b>
                                                                    </b>
                                                                @endif
                                                            </td>
                                                            <td class="text-center">
                                                                <button type="button"
                                                                    class="btn btn-sm btn-dark btn-add-compare"
                                                                    data-id="{{ $details->id }}">
                                                                    <img width="25" height="25"
                                                                        src="https://img.icons8.com/glyph-neue/25/FFFFFF/bookmark-ribbon.png"
                                                                        alt="bookmark-ribbon" />
                                                                    Comparer
                                                                </button>
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
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget-property-contact">
                            <p class="widget_text">
                                Je suis intéressé par ce bien
                            </p>
                            @if (session('success'))
                                <br>
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if (session('error'))
                                <br>
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="text-danger small">
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif
                            <form action="{{ route('demandes.post') }}" class="widget-property-contact-form"
                                method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control style-border" required name="nom"
                                        placeholder="Nom">
                                    <input type="hidden" class="form-control style-border" value="{{ $projet->id }}"
                                        required name="projet_id" placeholder="Nom">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control style-border" required name="email"
                                        placeholder="Email adresse">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control style-border" required name="telephone"
                                        placeholder="Téléphone">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control style-border" required rows="3"></textarea>
                                </div>
                                <button class="th-btn style-white th-btn-icon mt-15" type="submit">
                                    Envoyer le formulaire
                                </button>
                            </form>
                        </div>
                        <div class="widget  ">
                            <h3 class="widget_title">Annonce en vedette</h3>
                            <div class="recent-post-wrap">
                                @foreach ($autres as $autre)
                                    <div class="recent-post">
                                        <div class="media-img">
                                            <a href="{{ route('projet_details', ['slug' => $autre->slug]) }}">
                                                <img src="{{ Storage::url($autre->photo) }}" alt="{{ $autre->nom }}">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="post-title"><a class="text-inherit"
                                                    href="{{ route('projet_details', ['slug' => $autre->slug]) }}">
                                                    {{ Str::limit($autre->nom, 20) }}
                                                </a>
                                            </h4>
                                            <div class="recent-post-meta">
                                                <span>
                                                    <i class="far fa-calendar"></i>
                                                    {{ $autre->created_at->format('d-m-Y ') }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="widget widget_banner  "
                            data-bg-src="https://www.magazineb2b.com/wp-content/uploads/sites/467/2019/02/classification-immeubles-bureaux-1.jpg">
                            <div class="widget-banner text-center">
                                <h3 class="title">Besoin d'aide ? Nous sommes là pour vous aider</h3>
                                <div class="mb-3">
                                    <img src="{{ $infos->GetLogo() }}" style="height: 50px !important;" alt="img">
                                </div>
                                <h5 class="subtitle">Vous bénéficiez d'une assistance en ligne</h5>
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
    </section>


@endsection
