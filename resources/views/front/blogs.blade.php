@extends('front.fixe')
@section('titre', 'Blog')
@section('body')

    <!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="/front/img/bg/breadcumb-bg.jpg">
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
                <div class="th-blog blog-single has-post-thumbnail">
                    <div class="blog-img">
                        <a href="blog-details.html"><img src="/front/img/blog/blog-s-1-1.jpg" alt="Blog Image"></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a class="author" href="blog.html"><i class="far fa-user"></i>by David Smith</a>
                            <a href="blog.html"><i class="far fa-clock"></i>05 June, 2024</a>
                            <a href="blog.html"><i class="far fa-house-building"></i>Modern House</a>
                        </div>
                        <h2 class="blog-title"><a href="blog-details.html">Living sustainability: A day in the life at realar residences</a></h2>
                        <p class="blog-text">Uniquely pursue emerging experiences before liemerging content. Efficiently underwhelm customer directed total linkage after B2C synergy. Dynamically simplify superior human capital whereas efficient infrastructures generate business web-readiness after wireless outsourcing.</p>
                        <a href="blog-details.html" class="th-btn style-border2 th-btn-icon">Read More</a>
                    </div>
                </div>

                <div class="th-blog blog-single has-post-thumbnail">
                    <div class="blog-img th-slider" data-slider-options='{"effect":"fade"}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="blog-details.html"><img src="/front/img/blog/blog-s-1-2.jpg" alt="Blog Image"></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="blog-details.html"><img src="/front/img/blog/blog-s-1-3.jpg" alt="Blog Image"></a>
                            </div>
                        </div>
                        <button class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                        <button class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a class="author" href="blog.html"><i class="far fa-user"></i>by David Smith</a>
                            <a href="blog.html"><i class="far fa-clock"></i>10 June, 2024</a>
                            <a href="blog.html"><i class="far fa-house-building"></i>Modern House</a>
                        </div>
                        <h2 class="blog-title"><a href="blog-details.html">Exploring The Green Spaces Of Realar Residence Harmony with Nature</a></h2>
                        <p class="blog-text">Uniquely pursue emerging experiences before liemerging content. Efficiently underwhelm customer directed total linkage after B2C synergy. Dynamically simplify superior human capital whereas efficient infrastructures generate business web-readiness after wireless outsourcing.</p>
                        <a href="blog-details.html" class="th-btn style-border2 th-btn-icon">Read More</a>
                    </div>
                </div>

                <div class="th-blog blog-single">
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a class="author" href="blog.html"><i class="far fa-user"></i>by David Smith</a>
                            <a href="blog.html"><i class="far fa-clock"></i>12 June, 2024</a>
                            <a href="blog.html"><i class="far fa-house-building"></i>Modern House</a>
                        </div>
                        <h2 class="blog-title"><a href="blog-details.html">Enrich Your Mind Envision Your Future Education for Success</a>
                        </h2>
                        <p class="blog-text">An effective marketing involves market research target audience identification, competitive. providing opportunities for professional growth a maintaining positive work environment. To enhance online presence, consider optimizing your web utilizing social with your channels</p>
                        <a href="blog-details.html" class="th-btn style-border2 th-btn-icon">Read More</a>
                    </div>
                </div>

                <div class="th-blog blog-single has-post-thumbnail">
                    <div class="blog-img" data-overlay="black" data-opacity="5">
                        <a href="blog-details.html"><img src="/front/img/blog/blog-s-1-3.jpg" alt="Blog Image"></a>
                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a class="author" href="blog.html"><i class="far fa-user"></i>by David Smith</a>
                            <a href="blog.html"><i class="far fa-clock"></i>12 June, 2024</a>
                            <a href="blog.html"><i class="far fa-house-building"></i>Modern House</a>
                        </div>
                        <h2 class="blog-title"><a href="blog-details.html">University class starting soon while the lovely valley team work</a>
                        </h2>
                        <p class="blog-text">From strategic planning to operational optimization, our business consulting team is committed to guiding you through every stage of development, ensuring sustainable growth.Our seasoned consultants bring a wealth of experience to the table.</p>
                        <a href="blog-details.html" class="th-btn style-border2 th-btn-icon">Read More</a>
                    </div>
                </div>

                <div class="th-blog blog-single has-post-thumbnail">
                    <div class="blog-audio">
                        <iframe title="Tell Me U Luv Me (with Trippie Redd) by Juice WRLD" src="https://w.soundcloud.com/player/?visual=true&amp;url=https%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F830279092&amp;show_artwork=true&amp;maxwidth=751&amp;maxheight=1000&amp;dnt=1"></iframe>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a class="author" href="blog.html"><i class="far fa-user"></i>by David Smith</a>
                            <a href="blog.html"><i class="far fa-clock"></i>12 June, 2024</a>
                            <a href="blog.html"><i class="far fa-house-building"></i>Modern House</a>
                        </div>
                        <h2 class="blog-title"><a href="blog-details.html">Discover unparalleled expertise in market</a>
                        </h2>
                        <p class="blog-text">Take the first step towards a brighter business future. Contact us today to explore how our business consulting services can drive innovation, increase efficiency, and position your company for enduring success. At the core of our business consulting philosophy.</p>
                        <a href="blog-details.html" class="th-btn style-border2 th-btn-icon">Read More</a>
                    </div>
                </div>

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
                        <form class="search-form">
                            <input type="text" placeholder="Search...">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget widget_categories  ">
                        <h3 class="widget_title">Post Categories</h3>
                        <ul>
                            <li>
                                <a href="blog.html">Apartment <span>(8)</span></a>

                            </li>
                            <li>
                                <a href="blog.html">Real Estate <span>(10)</span></a>
                            </li>
                            <li>
                                <a href="blog.html">Property <span>(12)</span></a>
                            </li>
                            <li>
                                <a href="blog.html">News & Tips <span>(6)</span></a>
                            </li>
                            <li>
                                <a href="blog.html">Modern Houses <span>(8)</span></a>
                            </li>
                            <li>
                                <a href="blog.html">Banglow <span>(11)</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget  ">
                        <h3 class="widget_title">Recent Posts</h3>
                        <div class="recent-post-wrap">
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="blog-details.html"><img src="/front/img/blog/recent-post-1-1.jpg" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Exploring The Green Spaces Of Realar Residence</a></h4>
                                    <div class="recent-post-meta">
                                        <a href="blog.html"><i class="far fa-calendar"></i>22/6/2024</a>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="blog-details.html"><img src="/front/img/blog/recent-post-1-2.jpg" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Harmony With Nature Of Realar Residence</a></h4>
                                    <div class="recent-post-meta">
                                        <a href="blog.html"><i class="far fa-calendar"></i>25/6/2024</a>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="blog-details.html"><img src="/front/img/blog/recent-post-1-3.jpg" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Exploring The Green Spaces Of Realar Residence</a></h4>
                                    <div class="recent-post-meta">
                                        <a href="blog.html"><i class="far fa-calendar"></i>27/6/2024</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget_tag_cloud  ">
                        <h3 class="widget_title">Popular Tags</h3>
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
                    <div class="widget widget_banner  " data-bg-src="/front/img/widget/widget-banner.png">
                        <div class="widget-banner text-center">
                            <h3 class="title">Need Help? We Are Here To Help You</h3>
                            <div class="logo"><img src="/front/img/logo.svg" alt="img"></div>
                            <h4 class="subtitle">You Get Online support</h4>
                            <h5 class="link"><a href="tel:256214203215">+256 214 203 215</a></h5>
                            <a href="blog-details.html" class="th-btn style-border th-btn-icon">Read More</a>
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
