@extends('front.fixe')
@section('titre', 'Contactez-nous')
@section('body')
    <!--==============================
        Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="/front/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Contactez-nous</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.html">Home</a></li>
                            <li>Contactez-nous</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
    Contact Area
    ==============================-->
    <div class="space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Contactez-nous</span>
                <h2 class="sec-title text-theme">Nos coordonnées</h2>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-xl-4 col-lg-6">
                    <div class="about-contact-grid style2">
                        <div class="about-contact-icon">
                            <i class="fal fa-location-dot"></i>
                        </div>
                        <div class="about-contact-details">
                            <h6 class="about-contact-details-title">Notre adresse</h6>
                            <p class="about-contact-details-text">{{ $infos->adresse1 }}</p>
                            <p class="about-contact-details-text">{{ $infos->adresse2 }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="about-contact-grid style2">
                        <div class="about-contact-icon">
                            <i class="fal fa-phone"></i>
                        </div>
                        <div class="about-contact-details">
                            <h6 class="about-contact-details-title">Numéro de téléphone</h6>
                            <p class="about-contact-details-text"><a href="tel:{{ $infos->tel1 }}">{{ $infos->tel1 }}</a></p>
                            <p class="about-contact-details-text"><a href="tel:{{ $infos->tel2 }}">{{ $infos->tel2 }}</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="about-contact-grid style2">
                        <div class="about-contact-icon">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <div class="about-contact-details">
                            <h6 class="about-contact-details-title">Adresse email</h6>
                            <p class="about-contact-details-text"><a
                                    href="mailto:{{ $infos->email1 }}">{{ $infos->email1 }}</a></p>
                            <p class="about-contact-details-text"><a
                                    href="mailto:{{ $infos->email2 }}">{{ $infos->email2 }}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
    Contact Area
    ==============================-->
    <div class="space contact-area-3 z-index-common" data-bg-src="/front/img/bg/contact-bg-1-1.png" data-overlay="title"
        data-opacity="3" id="contact-sec">
        <div class="contact-bg-shape3-1 spin shape-mockup " data-bottom="5%" data-left="12%">
            <img src="/front/img/shape/section_shape_2_1.jpg" alt="img">
        </div>
        <div class="container">
            <div class="row gx-35">
                <div class="col-lg-6">
                    <div class="appointment-wrap2 bg-white me-xxl-5">
                        <h2 class="form-title text-theme">Planifier une visite</h2>
                        <form action="mail.php" method="POST" class="appointment-form ajax-contact">
                            <div class="row">
                                <div class="form-group style-border style-radius col-12">
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Your Name*">
                                    <i class="fal fa-user"></i>
                                </div>
                                <div class="form-group style-border style-radius col-12">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email*">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="form-group style-border style-radius col-md-12">
                                    <select name="subject" id="subject" class="form-select">
                                        <option value="" disabled selected hidden>Select Service Type</option>
                                        <option value="Real Estate">Real Estate</option>
                                        <option value="Apartment">Apartment</option>
                                        <option value="Residencial">Residencial</option>
                                        <option value="Deluxe">Deluxe</option>
                                    </select>
                                    <i class="fal fa-angle-down"></i>
                                </div>
                                <div class="col-12 form-group style-border style-radius">
                                    <i class="far fa-comments"></i>
                                    <textarea placeholder="Type Your Message" class="form-control"></textarea>
                                </div>
                                <div class="col-12 form-btn mt-4">
                                    <button class="th-btn">Submit Message <span class="btn-icon"><img
                                                src="/front/img/icon/paper-plane.svg" alt="img"></span></button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="location-map contact-sec-map z-index-common">
            <div class="contact-map">
                <iframe
                    src="{{ $infos->map }}"
                    allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="location-map-address bg-theme">
                <div class="thumb">
                    <img src="/front/img/property/property_inner_1.jpg" alt="img">
                </div>
            </div>
        </div>
    </div><!--==============================
    Footer Area
    ==============================-->
@endsection
