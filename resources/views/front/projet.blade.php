@extends('front.fixe')
@section('titre', 'Liste des projets')
@section('body')

    <!--==============================
        Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="/front/img/bg/breadcumb-bg.jpg">
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
            <ul class="nav nav-tabs property-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="rent-tab" data-bs-toggle="tab" data-bs-target="#rent-tab-pane"
                        type="button" role="tab" aria-controls="rent-tab-pane" aria-selected="true">Rent</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="buy-tab" data-bs-toggle="tab" data-bs-target="#buy-tab-pane"
                        type="button" role="tab" aria-controls="buy-tab-pane" aria-selected="false">Buy</button>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="rent-tab-pane" role="tabpanel" aria-labelledby="rent-tab"
                    tabindex="0">
                    <form class="property-search-form">
                        <label>Property Search</label>
                        <div class="form-group">
                            <i class="far fa-search"></i>
                            <input class="form-control" type="text" placeholder="Lisiting ID or Location">
                        </div>
                        <select class="form-select">
                            <option value="category" selected="selected">Category</option>
                            <option value="luxury">Luxury</option>
                            <option value="commercial">Commercial</option>
                        </select>
                        <select class="form-select">
                            <option value="offer_type" selected="selected">Offer Type</option>
                            <option value="popularity">Popularity</option>
                            <option value="rating">Rating</option>
                            <option value="date">Latest</option>
                        </select>
                        <button class="th-btn" type="submit"><i class="far fa-search"></i> Search</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="buy-tab-pane" role="tabpanel" aria-labelledby="buy-tab" tabindex="0">
                    <form class="property-search-form">
                        <label>Property Search</label>
                        <div class="form-group">
                            <i class="far fa-search"></i>
                            <input class="form-control" type="text" placeholder="Lisiting ID or Location">
                        </div>
                        <select class="form-select">
                            <option value="category" selected="selected">Category</option>
                            <option value="luxury">Luxury</option>
                            <option value="commercial">Commercial</option>
                        </select>
                        <select class="form-select">
                            <option value="offer_type" selected="selected">Offer Type</option>
                            <option value="popularity">Popularity</option>
                            <option value="rating">Rating</option>
                            <option value="date">Latest</option>
                        </select>
                        <button class="th-btn" type="submit"><i class="far fa-search"></i> Search</button>
                    </form>
                </div>
            </div>
            <div class="th-sort-bar">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md">
                        <p class="woocommerce-result-count">Showing 1–9 of 16 results</p>
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
                        <div class="col-md-6 col-xl-4">
                            <div class="property-card2">
                                <div class="property-card-thumb img-shine">
                                    <img src="/front/img/property/property-s-1-1.jpg" alt="img">
                                </div>
                                <div class="property-card-details">
                                    <div class="media-left">
                                        <h4 class="property-card-title"><a href="property-details.html">Toronto
                                                Townhouse</a></h4>
                                        <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                        <p class="property-card-location">2715 Ash, South Dakota 83475</p>
                                    </div>
                                    <div class="btn-wrap">
                                        <a href="property-details.html"
                                            class="th-btn style-border2 th-btn-icon">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-4">
                            <div class="property-card2">
                                <div class="property-card-thumb img-shine">
                                    <img src="/front/img/property/property-s-1-2.jpg" alt="img">
                                </div>
                                <div class="property-card-details">
                                    <div class="media-left">
                                        <h4 class="property-card-title"><a href="property-details.html">Serenity Villa</a>
                                        </h4>
                                        <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                        <p class="property-card-location">2464 Royal, New Jersey</p>
                                    </div>
                                    <div class="btn-wrap">
                                        <a href="property-details.html"
                                            class="th-btn style-border2 th-btn-icon">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-4">
                            <div class="property-card2">
                                <div class="property-card-thumb img-shine">
                                    <img src="/front/img/property/property-s-1-3.jpg" alt="img">
                                </div>
                                <div class="property-card-details">
                                    <div class="media-left">
                                        <h4 class="property-card-title"><a href="property-details.html">Loft Pent
                                                House</a></h4>
                                        <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                        <p class="property-card-location">6391 Elgin St. Celina</p>
                                    </div>
                                    <div class="btn-wrap">
                                        <a href="property-details.html"
                                            class="th-btn style-border2 th-btn-icon">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-4">
                            <div class="property-card2">
                                <div class="property-card-thumb img-shine">
                                    <img src="/front/img/property/property-s-1-4.jpg" alt="img">
                                </div>
                                <div class="property-card-details">
                                    <div class="media-left">
                                        <h4 class="property-card-title"><a href="property-details.html">Villa Qubic</a>
                                        </h4>
                                        <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                        <p class="property-card-location">4517 Washington Manchester</p>
                                    </div>
                                    <div class="btn-wrap">
                                        <a href="property-details.html"
                                            class="th-btn style-border2 th-btn-icon">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-4">
                            <div class="property-card2">
                                <div class="property-card-thumb img-shine">
                                    <img src="/front/img/property/property-s-1-5.jpg" alt="img">
                                </div>
                                <div class="property-card-details">
                                    <div class="media-left">
                                        <h4 class="property-card-title"><a href="property-details.html">Spectral
                                                Houses</a></h4>
                                        <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                        <p class="property-card-location">1901 Thornridge, Hawaii 81063</p>
                                    </div>
                                    <div class="btn-wrap">
                                        <a href="property-details.html"
                                            class="th-btn style-border2 th-btn-icon">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-4">
                            <div class="property-card2">
                                <div class="property-card-thumb img-shine">
                                    <img src="/front/img/property/property-s-1-6.jpg" alt="img">
                                </div>
                                <div class="property-card-details">
                                    <div class="media-left">
                                        <h4 class="property-card-title"><a href="property-details.html">Modern House</a>
                                        </h4>
                                        <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                        <p class="property-card-location">2715 Ash Dr. San Jose</p>
                                    </div>
                                    <div class="btn-wrap">
                                        <a href="property-details.html"
                                            class="th-btn style-border2 th-btn-icon">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-4">
                            <div class="property-card2">
                                <div class="property-card-thumb img-shine">
                                    <img src="/front/img/property/property-s-1-7.jpg" alt="img">
                                </div>
                                <div class="property-card-details">
                                    <div class="media-left">
                                        <h4 class="property-card-title"><a href="property-details.html">Villa
                                                Archetype</a></h4>
                                        <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                        <p class="property-card-location">3517 W. Gray St. Utica</p>
                                    </div>
                                    <div class="btn-wrap">
                                        <a href="property-details.html"
                                            class="th-btn style-border2 th-btn-icon">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-4">
                            <div class="property-card2">
                                <div class="property-card-thumb img-shine">
                                    <img src="/front/img/property/property-s-1-8.jpg" alt="img">
                                </div>
                                <div class="property-card-details">
                                    <div class="media-left">
                                        <h4 class="property-card-title"><a href="property-details.html">Alpina house</a>
                                        </h4>
                                        <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                        <p class="property-card-location">6391 Elgin St. Celina</p>
                                    </div>
                                    <div class="btn-wrap">
                                        <a href="property-details.html"
                                            class="th-btn style-border2 th-btn-icon">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-4">
                            <div class="property-card2">
                                <div class="property-card-thumb img-shine">
                                    <img src="/front/img/property/property-s-1-9.jpg" alt="img">
                                </div>
                                <div class="property-card-details">
                                    <div class="media-left">
                                        <h4 class="property-card-title"><a href="property-details.html">Emma House</a>
                                        </h4>
                                        <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                        <p class="property-card-location">4517 Washington Manchester</p>
                                    </div>
                                    <div class="btn-wrap">
                                        <a href="property-details.html"
                                            class="th-btn style-border2 th-btn-icon">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="mt-60 text-center">
                <div class="th-pagination ">
                    <ul>
                        <!-- <li><a class="prev-page" href="blog.html"><i class="far fa-arrow-left me-2"></i>Previous</a></li> -->
                        <li><a class="active" href="blog.html">1</a></li>
                        <li><a href="blog.html">2</a></li>
                        <li><a href="blog.html">3</a></li>
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
