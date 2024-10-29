@extends('front.fixe')
@section('titre', 'Liste des projets')
@section('body')

    <!--==============================
        Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ $infos->GetCoverProjet() }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Liste des projets</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ route('home') }}">Accueil</a></li>
                            <li>Projets</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Property Page Area
    ==============================-->
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="rent-tab-pane" role="tabpanel" aria-labelledby="rent-tab"
                    tabindex="0">
                    <form class="property-search-form" method="get" action="{{ Request::url() }}">
                        <label>Recherche de propriété</label>
                        <div class="form-group">
                            <i class="far fa-search"></i>
                            <input class="form-control" type="text" name="key" value="{{ $key }}" placeholder="Recherche par mot clés">
                        </div>
                        <select class="form-select" name="type">
                            <option value="offer_type" selected="selected">Type</option>
                            <option value="résidentiel" @selected($type == "résidentiel")>Résidentiel</option>
                            <option value="commercial" @selected($type == "commercial")>Commercial</option>
                        </select>
                        <button class="th-btn" type="submit"><i class="far fa-search"></i> Search</button>
                    </form>
                </div>
            </div>
            <div class="th-sort-bar">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md">
                        <p class="woocommerce-result-count">
                            Affichage de {{ $projets->count() }} sur {{ $total }} résultats
                        </p>
                    </div>

                    <div class="col-md-auto">
                        <div class="sorting-filter-wrap">
                            <form class="woocommerce-ordering" method="get">
                                <select name="orderby" class="orderby" aria-label="Shop order">
                                    <option value="menu_order" selected="selected">Default Sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by latest</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                            </form>
                            <div class="nav" role=tablist>
                                <a class="active" href="#" id="tab-shop-list" data-bs-toggle="tab"
                                    data-bs-target="#tab-list" role="tab" aria-controls="tab-grid"
                                    aria-selected="false"><i class="fa-light fa-grid-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade active show" id="tab-list" role="tabpanel" aria-labelledby="tab-shop-list">
                    <div class="row gy-40">

                        @foreach ($projets as $projet)
                        <div class="col-md-6 col-xl-4">
                            <div class="property-card2">
                                <div class="property-card-thumb img-shine">
                                    <img src="{{ Storage::url($projet->photo)}}" alt="img">
                                </div>
                                <div class="property-card-details">
                                    <div class="media-left">
                                        <h4 class="property-card-title">
                                            <a href="{{ route('projet_details',['id'=>$projet->id,'nom'=>$projet->nom]) }}">
                                                {{ Str::limit($projet->nom, 30)}}
                                                </a>
                                            </h4>
                                       {{--  <h5 class="property-card-price">$ 1500.00 USD/night</h5> --}}
                                        <p class="property-card-location text-capitalize">{{ $projet->type }}</p>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <a href="{{ route('projet_details',['id'=>$projet->id,'nom'=>$projet->nom]) }}"
                                        class="th-btn style-border2 th-btn-icon">Details</a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>

                </div>
            </div>
            <div class="mt-60 text-center">
                <div class="th-pagination ">
                    <ul>
                        <!-- <li><a class="prev-page" href="blog.html"><i class="far fa-arrow-left me-2"></i>Previous</a></li> -->
                        <li><a class="active" href="blog.html">1</a></li>
                        <li><a class="next-page" href="blog.html">Next<i class="far fa-arrow-right ms-2"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Footer Area
    ==============================-->

@endsection
