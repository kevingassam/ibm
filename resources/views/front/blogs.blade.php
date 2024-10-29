@extends('front.fixe')
@section('titre', 'Blog')
@section('body')

    <!--==============================
                Breadcumb
            ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ $infos->GetCoverBlog() }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Blog</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ route('home') }}">Accueil</a></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
            Blog Area
            ==============================-->
    <section class="th-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    @forelse ($articles as $article)
                        <div class="th-blog blog-single has-post-thumbnail">
                            <div class="blog-img">
                                <a href="{{ route('article', ['id' => $article->id, 'titre' => $article->titre]) }}">
                                    <img src="{{ Storage::url($article->photo) }}" alt="Blog Image"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span class="author"><i class="far fa-user"></i>admin</span>
                                    <span><i class="far fa-clock"></i>{{ $article->created_at->format('d-m-Y H:m') }}</span>
                                    <span><i class="far fa-house-building"></i>{{ $infos->app_name }}</span>
                                </div>
                                <h2 class="blog-title">
                                    <a href="{{ route('article', ['id' => $article->id, 'titre' => $article->titre]) }}">
                                        {{ $article->titre }}
                                    </a>
                                </h2>
                                <p class="blog-text">
                                    {{ Str::limit(strip_tags($article->description), 250) }}
                                </p>
                                <a href="{{ route('article', ['id' => $article->id, 'titre' => $article->titre]) }}"
                                    class="th-btn style-border2 th-btn-icon">
                                    Lire l'article
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="text-center">
                            <img src="/img/error-404.png" class="w-50" alt="404" srcset="">
                        </div>
                    @endforelse

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
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_search  ">
                            <form class="search-form" action="{{ route('articles') }}" method="GET">
                                <input type="text" placeholder="Recherche..." name="key" value="{{ $key }}">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget  ">
                            <h3 class="widget_title">Posts récents</h3>
                            <div class="recent-post-wrap">
                                @foreach ($autres as $article)
                                    <div class="recent-post">
                                        <div class="media-img">
                                            <a href="{{ route('article', ['id' => $article->id, 'titre' => $article->titre]) }}">
                                                <img src="{{ Storage::url($article->photo) }}" alt="Blog Image">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="post-title"><a class="text-inherit"
                                                    href="{{ route('article', ['id' => $article->id, 'titre' => $article->titre]) }}">
                                                    {{ Str::limit($article->titre , 40)}}
                                                </a>
                                                </h4>
                                            <div class="recent-post-meta">
                                                <a href="blog.html"><i class="far fa-calendar"></i>{{ $article->created_at->format('d-m-Y H:m') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="widget widget_tag_cloud  ">
                            <h3 class="widget_title">Tags populaires</h3>
                            <div class="tagcloud">
                                <a href="blog.html">Business</a>
                                <a href="blog.html">Buyer</a>
                                <a href="blog.html">Rent</a>
                                <a href="blog.html">Innovate</a>
                                <a href="blog.html">Real estate</a>
                                <a href="blog.html">Modern</a>
                                <a href="blog.html">Luxury</a>
                                <a href="blog.html">Sale</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
            Footer Area
            ==============================-->

@endsection
