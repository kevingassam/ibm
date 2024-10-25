@extends('front.fixe')
@section('titre', $article->titre)
@section('body')

    <!--==============================
            Breadcumb
        ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ Storage::url($article->photo) }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">{{ $article->titre }}</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ route('home') }}">Accueil</a></li>
                            <li>Détails</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
        Blog Area
        ==============================-->
    <section class="th-blog-wrapper blog-details overflow-hidden space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-30">
                <div class="col-xxl-8 col-lg-7">
                    <div class="th-blog blog-single mb-0">
                        <div class="blog-img">
                            <img src="{{ Storage::url($article->photo) }}" alt="Blog Image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="author"><i class="far fa-user"></i>admin</span>
                                <span><i class="far fa-clock"></i>{{ $article->created_at->format('d-m-Y H:m') }}</span>
                                <span><i class="far fa-house-building"></i>{{ $infos->app_name }}</span>
                            </div>
                            <div>
                                {!! $article->description !!}
                            </div>
                        </div>
                    </div>
                    <div class="share-links clearfix ">
                        <div class="row justify-content-between">
                            <div class="col-md-auto">
                                <span class="share-links-title">Tags:</span>
                                <div class="tagcloud">
                                    <a href="blog.html">Apartment</a>
                                    <a href="blog.html">Buyer</a>
                                    <a href="blog.html">Modern</a>
                                    <a href="blog.html">Luxury</a>
                                </div>
                            </div>
                            <div class="col-md-auto text-xl-end">
                                <span class="share-links-title">Share:</span>
                                <div class="th-social style2 align-items-center">
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div><!-- Share Links Area end -->
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_search  ">
                            <form class="search-form" action="{{ route('articles') }}" method="get">
                                <input type="text" placeholder="Recherche..." name="key">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget  ">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                @foreach ($autres as $article)
                                    <div class="recent-post">
                                        <div class="media-img">
                                            <a
                                                href="{{ route('article', ['id' => $article->id, 'titre' => $article->titre]) }}">
                                                <img src="{{ Storage::url($article->photo) }}" alt="Blog Image">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="post-title"><a class="text-inherit"
                                                    href="{{ route('article', ['id' => $article->id, 'titre' => $article->titre]) }}">
                                                    {{ Str::limit($article->titre, 40) }}
                                                </a>
                                            </h4>
                                            <div class="recent-post-meta">
                                                <a href="blog.html"><i
                                                        class="far fa-calendar"></i>{{ $article->created_at->format('d-m-Y H:m') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
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
        Popup Modal v1
        ============================== -->
    <div class="th-modal modal fade" id="portfolioModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="container">
                    <button type="button" class="icon-btn btn-close bg-title-dark" data-bs-dismiss="modal"
                        aria-label="Close"><i class="fa-regular fa-xmark"></i></button>
                    <div class="page-single bg-title-dark">
                        <div class="page-img mb-30">
                            <img class="w-100 rounded-20" src="/front/img/project/project_pop1_1.png" alt="portfolio Image">
                        </div>
                        <div class="page-content">
                            <h2 class="h3 page-title text-white fw-medium">Where Visibility Meets Success</h2>
                            <div class="row gy-30">
                                <div class="col-xl-7">
                                    <p class="mb-20 text-light">The timeline varies depending on the complexity of the
                                        project. Simple projects may take a few weeks, while more complex ones could extend
                                        to several months. Timelines are influenced by factors like scope, feedback
                                        iterations, and client responsiveness.</p>

                                    <p class="mb-xl-4 mb-0 text-light">Project timelines vary based on complexity and
                                        scope. Small projects may take a few weeks, while larger ones could span several
                                        months. Timelines are established during project kickoff. We use a range of
                                        industry-standard tools such as Sketch.</p>
                                </div>
                                <div class="col-xl-5">
                                    <div class="checklist">
                                        <ul>
                                            <li class="text-light"><strong>Service Category:</strong> Rubix Carabil Tower
                                            </li>
                                            <li class="text-light"><strong>Clients:</strong> David Malan</li>
                                            <li class="text-light"><strong>Project Date:</strong> 13 June, 2020</li>
                                            <li class="text-light"><strong>Avenue End Date:</strong> 22 July, 2023</li>
                                            <li class="text-light"><strong>Locations:</strong> NewYork - 2546 Firs, USA
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="row gy-30 gx-40 align-items-center">
                                <div class="col-xl-6">
                                    <div class="page-img mb-0">
                                        <img class="w-100 rounded-20" src="/front/img/project/project_pop2_1.png"
                                            alt="portfolio Image">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <h4 class="box-title text-white fw-medium">Services Benefits:</h4>
                                    <p class="text-light">We can do both. We can adhere to existing brand guidelines,
                                        ensuring consistency, or help develop new ones if a client is looking for a fresh
                                        identity. Our goal is to align the UI/UX design with the brand's overall strategy
                                        product meets the needs.</p>
                                    <div class="checklist style3">
                                        <ul>
                                            <li class="text-light"><i class="far fa-check-circle"></i>We use the latest
                                                diagnostic equipment</li>
                                            <li class="text-light"><i class="far fa-check-circle"></i>Automotive service
                                                our clients receive</li>
                                            <li class="text-light"><i class="far fa-check-circle"></i>We are a member of
                                                Professional Service</li>
                                            <li class="text-light"><i class="far fa-check-circle"></i>Digital how will
                                                activities impact traditional</li>
                                            <li class="text-light"><i class="far fa-check-circle"></i>Architect and
                                                technical engineer</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
        Footer Area
        ==============================-->

@endsection
