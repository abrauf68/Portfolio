@extends('frontend.layouts.master')

@section('title', __('Home'))
@section('description', '')
@section('keywords', '')
@section('author', '')

@section('css')
@endsection

@section('content')
    <!-- tmp banner area start -->
    <div class="tmp-banner-one-area">
        <div class="container">
            <div class="banner-one-main-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="banner-right-content">
                            <img class="tmp-scroll-trigger tmp-zoom-in animation-order-1"
                                src="{{ asset('frontAssets/images/banner/banner-user-image-one.png') }}" alt="banner-img">
                            <h2 class="banner-big-text-1 up-down">WEB DEVELOPER</h2>
                            <h2 class="banner-big-text-2 up-down-2">WEB DEVELOPER</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="inner">
                            <span class="sub-title tmp-scroll-trigger tmp-fade-in animation-order-1">Hello</span>
                            <h1 class="title tmp-scroll-trigger tmp-fade-in animation-order-2 mt--5">i’m
                                Abdul Rauf a <br>
                                <span class="header-caption">
                                    <span class="cd-headline clip is-full-width">
                                        <span class="cd-words-wrapper">
                                            <b class="is-visible theme-gradient">Full Stach Developer.</b>
                                            <b class="is-hidden theme-gradient">Laravel Developer.</b>
                                            <b class="is-hidden theme-gradient">RestFul API Builder.</b>
                                            <b class="is-hidden theme-gradient">Freelancer.</b>
                                            <b class="is-hidden theme-gradient">Dashboard Designer.</b>
                                        </span>
                                    </span>
                                </span>
                            </h1>
                            <p class="disc tmp-scroll-trigger tmp-fade-in animation-order-3"> I’m a Full Stack Web Developer
                                specializing in Laravel/PHP, Vue.js, JavaScript, jQuery, and MySQL.
                                I build dynamic, scalable, and efficient web applications tailored to meet your business
                                needs. </p>
                            <div class="button-area-banner-one tmp-scroll-trigger tmp-fade-in animation-order-4">
                                <a class="tmp-btn hover-icon-reverse radius-round" href="project.html">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">View Portfolio</span>
                                        <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tmp banner area end -->


    <!-- Tpm Service Area Start -->
    <section class="service-area tmp-section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="service-card-v1 tmp-scroll-trigger tmp-fade-in animation-order-1 tmp-link-animation">
                        <div class="service-card-icon">
                            <i class="fa-light fa-pen-ruler"></i>
                        </div>
                        <h4 class="service-title"><a href="service-details.html">Web Design</a></h4>
                        <p class="service-para">120 Projects</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="service-card-v1 tmp-scroll-trigger tmp-fade-in animation-order-2 tmp-link-animation">
                        <div class="service-card-icon">
                            <i class="fa-light fa-bezier-curve"></i>
                        </div>
                        <h4 class="service-title"><a href="service-details.html">Ui/Ux Design</a></h4>
                        <p class="service-para">241 Projects</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="service-card-v1 tmp-scroll-trigger tmp-fade-in animation-order-3 tmp-link-animation">
                        <div class="service-card-icon">
                            <i class="fa-light fa-lightbulb"></i>
                        </div>
                        <h4 class="service-title"><a href="service-details.html">Web Research</a></h4>
                        <p class="service-para">240 Projects</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="service-card-v1 tmp-scroll-trigger tmp-fade-in animation-order-4 tmp-link-animation">
                        <div class="service-card-icon">
                            <i class="fa-light fa-envelope"></i>
                        </div>
                        <h4 class="service-title"><a href="service-details.html">Marketing</a></h4>
                        <p class="service-para">331 Prodect</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tpm Service Area End -->


    <!-- Tpm Counter Area Start -->
    <section class="counter-area">
        <div class="container">
            <div class="row g-5">
                <div class="col-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div
                        class="year-of-expariance-wrapper bg-blur-style-one tmp-scroll-trigger tmp-fade-in animation-order-1">
                        <div class="year-expariance-wrap">
                            <!-- <h2 class="year-number"><span class="counter">25 </span> </h2> -->
                            <h2 class="counter year-number"><span class="odometer" data-count="25">00</span>
                            </h2>
                            <h3 class="year-title">Years Of <br> experience</h3>
                        </div>
                        <p class="year-para">Business consulting consultants provide expert advice and guida the a
                            businesses to help theme their performance efficiency</p>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="counter-area-right-content">
                        <div class="row g-5">
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="counter-card tmponhover tmp-scroll-trigger tmp-fade-in animation-order-1">
                                    <h3 class="counter counter-title"><span class="odometer" data-count="20">00</span>k+
                                    </h3>
                                    <p class="counter-para">Our Project Complete</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="counter-card tmponhover tmp-scroll-trigger tmp-fade-in animation-order-2">
                                    <h3 class="counter counter-title"><span class="odometer" data-count="10">00</span>k+
                                    </h3>
                                    <p class="counter-para">Our Natural Products</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="counter-card tmponhover tmp-scroll-trigger tmp-fade-in animation-order-3">
                                    <h3 class="counter counter-title"><span class="odometer" data-count="200">00</span>+
                                    </h3>
                                    <p class="counter-para">Clients Reviews</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="counter-card tmponhover tmp-scroll-trigger tmp-fade-in animation-order-4">
                                    <h3 class="counter counter-title"><span class="odometer" data-count="1000">00</span>+
                                    </h3>
                                    <p class="counter-para">our Satisfied Clientd</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tpm Counter Area End -->

    <!-- tmp skill area start -->
    <div class="tmp-skill-area tmp-section-gapTop">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="progress-wrapper">
                        <div class="content">
                            <h2 class="custom-title mb--30 tmp-scroll-trigger tmp-fade-in animation-order-1">
                                Design Skill <span><img src="{{ asset('frontAssets/images/custom-line/custom-line.png') }}"
                                        alt="custom-line"></span>
                            </h2>
                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts">
                                <h6 class="heading heading-h6">
                                    PHOTOSHOT</h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s"
                                        data-wow-delay=".3s" role="progressbar"
                                        style="width: 100%; visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInLeft;"
                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <span class="percent-label">100%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->

                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts">
                                <h6 class="heading heading-h6">
                                    FIGMA</h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.6s"
                                        data-wow-delay=".4s" role="progressbar"
                                        style="width: 95%; visibility: visible; animation-duration: 0.6s; animation-delay: 0.4s; animation-name: fadeInLeft;"
                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <span class="percent-label">95%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->

                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts">
                                <h6 class="heading heading-h6">
                                    ADOBE XD</h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.7s"
                                        data-wow-delay=".5s" role="progressbar"
                                        style="width: 60%; visibility: visible; animation-duration: 0.7s; animation-delay: 0.5s; animation-name: fadeInLeft;"
                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <span class="percent-label">60%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->

                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts">
                                <h6 class="heading heading-h6">
                                    ADOBE ILLUSTRATOR</h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s"
                                        data-wow-delay=".6s" role="progressbar"
                                        style="width: 70%; visibility: visible; animation-duration: 0.8s; animation-delay: 0.6s; animation-name: fadeInLeft;"
                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <span class="percent-label">70%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="progress-wrapper">
                        <div class="content">
                            <h2 class="custom-title mb--30 tmp-scroll-trigger tmp-fade-in animation-order-1">
                                Development Skill <span><img src="{{ asset('frontAssets/images/custom-line/custom-line.png') }}"
                                        alt="custom-line"></span>
                            </h2>
                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts">
                                <h6 class="heading heading-h6">
                                    HTML</h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s"
                                        data-wow-delay=".3s" role="progressbar"
                                        style="width: 100%; visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInLeft;"
                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <span class="percent-label">100%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->

                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts">
                                <h6 class="heading heading-h6">
                                    CSS</h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.6s"
                                        data-wow-delay=".4s" role="progressbar"
                                        style="width: 95%; visibility: visible; animation-duration: 0.6s; animation-delay: 0.4s; animation-name: fadeInLeft;"
                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <span class="percent-label">95%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->

                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts">
                                <h6 class="heading heading-h6">
                                    Javascript</h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.7s"
                                        data-wow-delay=".5s" role="progressbar"
                                        style="width: 60%; visibility: visible; animation-duration: 0.7s; animation-delay: 0.5s; animation-name: fadeInLeft;"
                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <span class="percent-label">60%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->

                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts">
                                <h6 class="heading heading-h6">
                                    Wordpress</h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s"
                                        data-wow-delay=".6s" role="progressbar"
                                        style="width: 70%; visibility: visible; animation-duration: 0.8s; animation-delay: 0.6s; animation-name: fadeInLeft;"
                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <span class="percent-label">70%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tmp skill area end -->

    <!-- Tpm Latest Service Area Start -->
    <section class="latest-service-area tmp-section-gapTop">
        <div class="container">
            <div class="section-head mb--50">
                <div class="section-sub-title center-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                    <span class="subtitle">Latest Service</span>
                </div>
                <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">Inspiring The World One
                    <br> Project
                </h2>
                <p class="description section-sm tmp-scroll-trigger tmp-fade-in animation-order-3"> Business consulting
                    consultants provide expert advice and guida
                    businesses to help them improve their performance, efficiency, and organizational </p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="service-card-v2 tmponhover tmp-scroll-trigger tmp-fade-in animation-order-1">
                        <h2 class="service-card-num"><span>01.</span>A Portfolio of Creativity</h2>
                        <p class="service-para">Business consulting consultants provide expert advice and guida the a
                            businesses to help theme their performance efficiency</p>
                    </div>
                    <div class="service-card-v2 tmponhover tmp-scroll-trigger tmp-fade-in animation-order-2">
                        <h2 class="service-card-num"><span>02.</span>My Portfolio of Innovation</h2>
                        <p class="service-para">My work is driven by the belief that thoughtful design and strategic
                            planning can empower brands, transform businesses</p>
                    </div>
                    <div class="service-card-v2 tmponhover tmp-scroll-trigger tmp-fade-in animation-order-3">
                        <h2 class="service-card-num"><span>03.</span>A Showcase of My Projects</h2>
                        <p class="service-para">In this portfolio, you’ll find a curated selection of projects that
                            highlight my skills in [Main Areas, e.g., responsive web design</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-card-user-image">
                        <img class="tmp-scroll-trigger tmp-zoom-in animation-order-1"
                            src="{{ asset('frontAssets/images/services/latest-services-user-image.png') }}" alt="latest-user-image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tpm Latest Service Area End -->

    <!-- Tpm Education Experience Area Start -->
    <section class="education-experience tmp-section-gapTop">
        <div class="container">
            <div class="section-head mb--50">
                <div class="section-sub-title center-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                    <span class="subtitle">Education & Experience</span>
                </div>
                <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">Empowering Creativity
                    <br> through
                </h2>
                <p class="description section-sm tmp-scroll-trigger tmp-fade-in animation-order-3">Business consulting
                    consultants provide expert advice and guida
                    businesses to help them improve their performance, efficiency, and organizational</p>
            </div>
            <h2 class="custom-title mb-32 tmp-scroll-trigger tmp-fade-in animation-order-1">Education <span><img
                        src="{{ asset('frontAssets/images/custom-line/custom-line.png') }}" alt="custom-line"></span>
            </h2>
            <div class="row g-5">
                <div class="col-lg-6 col-sm-6">
                    <div class="education-experience-card tmponhover tmp-scroll-trigger tmp-fade-in animation-order-1">
                        <h4 class="edu-sub-title">Trainer Marketing</h4>
                        <h2 class="edu-title">2005-2009</h2>
                        <p class="edu-para">A personal portfolio is a curated collection of an individual's professional
                            work, showcasing their skills, experience A personal portfolio.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="education-experience-card tmponhover tmp-scroll-trigger tmp-fade-in animation-order-2">
                        <h4 class="edu-sub-title">Assistant Director</h4>
                        <h2 class="edu-title">2010-2014</h2>
                        <p class="edu-para">Each project here showcases my commitment to excellence and adaptability,
                            tailored to meet each client’s unique needs.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="education-experience-card tmponhover tmp-scroll-trigger tmp-fade-in animation-order-3">
                        <h4 class="edu-sub-title">Design Assistant</h4>
                        <h2 class="edu-title">2008-2012</h2>
                        <p class="edu-para">I’ve had the privilege of working with various clients, from startups to
                            established companies, helping bring their visions to life.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="education-experience-card tmponhover tmp-scroll-trigger tmp-fade-in animation-order-4">
                        <h4 class="edu-sub-title">Design Assistant</h4>
                        <h2 class="edu-title">2008-2012</h2>
                        <p class="edu-para">Each project here showcases my commitment to excellence and adaptability,
                            tailored to meet each client’s unique needs a personal.</p>
                    </div>
                </div>
            </div>
            <div class="experiences-wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="experiences-wrap-left-content">
                            <h2 class="custom-title mb-32 tmp-scroll-trigger tmp-fade-in animation-order-1">Experiences
                                <span><img src="{{ asset('frontAssets/images/custom-line/custom-line.png') }}" alt="custom-line"></span></h2>

                            <div class="experience-content tmp-scroll-trigger tmp-fade-in animation-order-1">
                                <p class="ex-subtitle">experience</p>
                                <h2 class="ex-name">Soft Tech (2 Years)</h2>
                                <h3 class="ex-title">UI/UX Designer</h3>
                                <p class="ex-para">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                    desi dolore eu fugiat nulla pariatu Duis aute irure.</p>
                            </div>
                            <div class="experience-content tmp-scroll-trigger tmp-fade-in animation-order-2">
                                <p class="ex-subtitle">experience</p>
                                <h2 class="ex-name">ModernTech (3 Years)</h2>
                                <h3 class="ex-title">App Developer</h3>
                                <p class="ex-para">In this portfolio, you’ll find a curated selection of projects that
                                    highlight my skills in [Main Areas, e.g., responsive web design.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="experiences-wrap-right-content">
                            <img class="tmp-scroll-trigger tmp-zoom-in animation-order-1"
                                src="{{ asset('frontAssets/images/experiences/expert-img.jpg') }}" alt="expert-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tpm Education Experience Area End -->

    <!-- Tpm Our Supported Company Area Start -->
    <div class="our-supported-company-area tmp-section-gapTop">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="support-company-logo tmp-scroll-trigger tmp-fade-in animation-order-1">
                        <img src="{{ asset('frontAssets/images/our-supported-company/company-logo-1.svg') }}"
                            alt="Reeni - Personal Portfolio HTML Template">
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="support-company-logo tmp-scroll-trigger tmp-fade-in animation-order-2">
                        <img src="{{ asset('frontAssets/images/our-supported-company/company-logo-2.svg') }}"
                            alt="Reeni - Personal Portfolio HTML Template">
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="support-company-logo tmp-scroll-trigger tmp-fade-in animation-order-3">
                        <img src="{{ asset('frontAssets/images/our-supported-company/company-logo-3.svg') }}"
                            alt="Reeni - Personal Portfolio HTML Template">
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="support-company-logo tmp-scroll-trigger tmp-fade-in animation-order-4">
                        <img src="{{ asset('frontAssets/images/our-supported-company/company-logo-4.svg') }}"
                            alt="Reeni - Personal Portfolio HTML Template">
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="support-company-logo tmp-scroll-trigger tmp-fade-in animation-order-5">
                        <img src="{{ asset('frontAssets/images/our-supported-company/company-logo-5.svg') }}"
                            alt="Reeni - Personal Portfolio HTML Template">
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="support-company-logo tmp-scroll-trigger tmp-fade-in animation-order-6">
                        <img src="{{ asset('frontAssets/images/our-supported-company/company-logo-6.svg') }}"
                            alt="Reeni - Personal Portfolio HTML Template">
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="support-company-logo tmp-scroll-trigger tmp-fade-in animation-order-7">
                        <img src="{{ asset('frontAssets/images/our-supported-company/company-logo-7.svg') }}"
                            alt="Reeni - Personal Portfolio HTML Template">
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="support-company-logo tmp-scroll-trigger tmp-fade-in animation-order-8">
                        <img src="{{ asset('frontAssets/images/our-supported-company/company-logo-8.svg') }}"
                            alt="Reeni - Personal Portfolio HTML Template">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tpm Our Supported Company Area End -->

    <!-- Tpm Latest Portfolio Area Start -->
    <div class="latest-portfolio-area custom-column-grid tmp-section-gapTop">
        <div class="container">
            <div class="section-head mb--60">
                <div class="section-sub-title center-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                    <span class="subtitle">Latest Portfolio</span>
                </div>
                <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">Transforming Ideas into
                    <br> Exceptional
                </h2>
                <p class="description section-sm tmp-scroll-trigger tmp-fade-in animation-order-3">Business consulting
                    consultants provide expert advice and guida
                    businesses to help them improve their performance, efficiency, and organizational</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="latest-portfolio-card tmp-hover-link tmp-scroll-trigger tmp-fade-in animation-order-1">
                        <div class="portfoli-card-img">
                            <div class="img-box v2">
                                <a class="tmp-scroll-trigger tmp-zoom-in animation-order-1" href="project-details.html">
                                    <img class="w-100" src="{{ asset('frontAssets/images/latest-portfolio/portfoli-img-1.jpg') }}"
                                        alt="Thumbnail">
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-card-content-wrap">
                            <div class="content-left">
                                <h3 class="portfolio-card-title"><a class="link" href="project-details.html">Digital
                                        Transformation Advisors</a></h3>
                                <p class="portfoli-card-para">Development Coaches</p>
                            </div>
                            <a href="project-details.html" class="tmp-arrow-icon-btn">
                                <div class="btn-inner">
                                    <i class="tmp-icon fa-solid fa-arrow-up-right"></i>
                                    <i class="tmp-icon-bottom fa-solid fa-arrow-up-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <div class="latest-portfolio-card tmp-hover-link tmp-scroll-trigger tmp-fade-in animation-order-2">
                        <div class="portfoli-card-img">
                            <div class="img-box v2">
                                <a class="tmp-scroll-trigger tmp-zoom-in animation-order-1" href="project-details.html">
                                    <img class="w-100" src="{{ asset('frontAssets/images/latest-portfolio/portfoli-img-2.jpg') }}"
                                        alt="Thumbnail">
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-card-content-wrap">
                            <div class="content-left">
                                <h3 class="portfolio-card-title"><a class="link" href="project-details.html">My work is
                                        driven by the belief that thoughtful.</a></h3>
                                <p class="portfoli-card-para">Development App</p>
                            </div>
                            <a href="project-details.html" class="tmp-arrow-icon-btn">
                                <div class="btn-inner">
                                    <i class="tmp-icon fa-solid fa-arrow-up-right"></i>
                                    <i class="tmp-icon-bottom fa-solid fa-arrow-up-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <div class="latest-portfolio-card tmp-hover-link tmp-scroll-trigger tmp-fade-in animation-order-3">
                        <div class="portfoli-card-img">
                            <div class="img-box v2">
                                <a class="tmp-scroll-trigger tmp-zoom-in animation-order-1" href="project-details.html">
                                    <img class="w-100" src="{{ asset('frontAssets/images/latest-portfolio/portfoli-img-3.jpg') }}"
                                        alt="Thumbnail">
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-card-content-wrap">
                            <div class="content-left">
                                <h3 class="portfolio-card-title"><a class="link" href="project-details.html">In this
                                        portfolio, you’ll find a curated selection</a></h3>
                                <p class="portfoli-card-para">Web Design</p>
                            </div>
                            <a href="project-details.html" class="tmp-arrow-icon-btn">
                                <div class="btn-inner">
                                    <i class="tmp-icon fa-solid fa-arrow-up-right"></i>
                                    <i class="tmp-icon-bottom fa-solid fa-arrow-up-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <div class="latest-portfolio-card tmp-hover-link tmp-scroll-trigger tmp-fade-in animation-order-4">
                        <div class="portfoli-card-img">
                            <div class="img-box v2">
                                <a class="tmp-scroll-trigger tmp-zoom-in animation-order-1" href="project-details.html">
                                    <img class="w-100" src="{{ asset('frontAssets/images/latest-portfolio/portfoli-img-4.jpg') }}"
                                        alt="Thumbnail">
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-card-content-wrap">
                            <div class="content-left">
                                <h3 class="portfolio-card-title"><a class="link" href="project-details.html">I’ve had
                                        the privilege of working with various</a></h3>
                                <p class="portfoli-card-para">App Development</p>
                            </div>
                            <a href="project-details.html" class="tmp-arrow-icon-btn">
                                <div class="btn-inner">
                                    <i class="tmp-icon fa-solid fa-arrow-up-right"></i>
                                    <i class="tmp-icon-bottom fa-solid fa-arrow-up-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tpm Latest Portfolio Area End -->

    <!-- Tpm My Skill Area Start -->
    <section class="my-skill tmp-section-gapTop">
        <div class="container">
            <div class="section-head text-align-left mb--50">
                <div class="section-sub-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                    <span class="subtitle">My Skill</span>
                </div>
                <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">Elevated Designs
                    Personalized <br> the best Experiences</h2>
            </div>
            <div class="services-widget v1">
                <div class="service-item current tmp-scroll-trigger tmp-fade-in animation-order-1">
                    <div class="my-skill-card">
                        <div class="card-icon">
                            <i class="fa-light fa-building-columns"></i>
                        </div>
                        <div class="card-title">
                            <h3 class="main-title">Ui/visual Design</h3>
                            <p class="sub-title">21 Done</p>
                        </div>
                        <p class="card-para">My work is driven by the belief that thoughtful design and strategic planning
                            can empower brands strategic planning can empower brands</p>
                        <a href="#" class="read-more-btn">Read More <span class="read-more-icon"><i
                                    class="fa-solid fa-angle-right"></i></span></a>
                    </div>
                    <button class="service-link modal-popup"></button>
                </div>
                <div class="service-item tmp-scroll-trigger tmp-fade-in animation-order-2">
                    <div class="my-skill-card">
                        <div class="card-icon">
                            <i class="fa-light fa-calendar"></i>
                        </div>
                        <div class="card-title">
                            <h3 class="main-title">Ui/visual Design</h3>
                            <p class="sub-title">21 Done</p>
                        </div>
                        <p class="card-para">In this portfolio, you’ll find a curated selection of projects that highlight
                            my skills in [Main Areas, e.g., responsive web design</p>
                        <a href="#" class="read-more-btn">Read More <span class="read-more-icon"><i
                                    class="fa-solid fa-angle-right"></i></span></a>
                    </div>
                    <button class="service-link modal-popup"></button>
                </div>
                <div class="service-item tmp-scroll-trigger tmp-fade-in animation-order-3">
                    <div class="my-skill-card">
                        <div class="card-icon">
                            <i class="fa-light fa-pen-nib"></i>
                        </div>
                        <div class="card-title">
                            <h3 class="main-title">Motion Design</h3>
                            <p class="sub-title">20 Done</p>
                        </div>
                        <p class="card-para">Each project here showcases my commitment to excellence and adaptability,
                            tailored to meet each client’s unique needs</p>
                        <a href="#" class="read-more-btn">Read More <span class="read-more-icon"><i
                                    class="fa-solid fa-angle-right"></i></span></a>
                    </div>
                    <button class="service-link modal-popup"></button>
                </div>
                <div class="active-bg wow fadeInUp mleave"></div>
            </div>
        </div>
    </section>
    <!-- Tpm My Skill Area End -->

    <!-- Tpm Testimonial Area Start -->
    <section class="testimonial tmp-section-gapTop">
        <div class="testimonial-wrapper">
            <div class="container">
                <div class="swiper testimonial-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="card-content-wrap">
                                    <h2 class="text-doc">Working with themespark was an absolute pleasure! They understood
                                        my vision immediately and brought it to life even better than I’d imagined.</h2>
                                    <h3 class="card-title">Cameron Williamson</h3>
                                    <p class="card-para">Ui/Ux Designer</p>
                                    <div class="testimonital-icon">
                                        <img src="{{ asset('frontAssets/images/testimonial/testimonial-icon.svg') }}" alt="testimonial-icon">
                                    </div>
                                </div>
                                <div class="testimonial-card-img">
                                    <img class="tmp-scroll-trigger tmp-zoom-in animation-order-1"
                                        src="{{ asset('frontAssets/images/testimonial/bg-image-1png.png') }}" alt="bg-image">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="card-content-wrap">
                                    <h2 class="text-doc">ThemesPark is incredibly talented and detail-oriented. They took
                                        the time to understand my brand and created something truly unique</h2>
                                    <h3 class="card-title">Cameron Williamson</h3>
                                    <p class="card-para">Ui/Ux Designer</p>
                                    <div class="testimonital-icon">
                                        <img src="{{ asset('frontAssets/images/testimonial/testimonial-icon.svg') }}" alt="testimonial-icon">
                                    </div>
                                </div>
                                <div class="testimonial-card-img">
                                    <img class="tmp-scroll-trigger tmp-zoom-in animation-order-2"
                                        src="{{ asset('frontAssets/images/testimonial/bg-image-2.png') }}" alt="bg-image">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="card-content-wrap">
                                    <h2 class="text-doc">A personal portfolio is a curated collection of an individual's
                                        professional work, showcasing their skills, experience, and achievements</h2>
                                    <h3 class="card-title">Cameron Williamson</h3>
                                    <p class="card-para">Ui/Ux Designer</p>
                                    <div class="testimonital-icon">
                                        <img src="{{ asset('frontAssets/images/testimonial/testimonial-icon.svg') }}" alt="testimonial-icon">
                                    </div>
                                </div>
                                <div class="testimonial-card-img">
                                    <img class="tmp-scroll-trigger tmp-zoom-in animation-order-3"
                                        src="{{ asset('frontAssets/images/testimonial/bg-image-1png.png') }}" alt="bg-image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
                <div class="testimonial-btn-next-prev">
                    <div class="swiper-button-next"><i class="fa-solid fa-arrow-right"></i></div>
                    <div class="swiper-button-prev"><i class="fa-solid fa-arrow-left"></i></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tpm Testimonial Area End -->

    <!-- Tpm Get In touch start -->
    <section class="get-in-touch-area tmp-section-gapTop">
        <div class="container">
            <div class="contact-get-in-touch-wrap">
                <div class="get-in-touch-wrapper tmponhover">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-5">
                            <div class="section-head text-align-left">
                                <div class="section-sub-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                                    <span class="subtitle">GET IN TOUCH</span>
                                </div>
                                <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">Elevate
                                    your brand with Me </h2>
                                <p class="description tmp-scroll-trigger tmp-fade-in animation-order-3">ished fact that a
                                    reader will be
                                    distrol acted bioiiy desig
                                    ished fact that a reader will acted ished fact that a reader will be distrol
                                    acted </p>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="contact-inner">
                                <div class="contact-form">
                                    <div id="form-messages" class="error"></div>
                                    <form class="tmp-dynamic-form" id="contact-form" method="POST" action="mailer.php">
                                        <div class="contact-form-wrapper row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input class="input-field" name="name" id="contact-name"
                                                        placeholder="Your Name" type="text" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input class="input-field" id="contact-phone"
                                                        placeholder="Phone Number" type="number" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input class="input-field" id="contact-email" name="email"
                                                        placeholder="Your Email" type="email" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input class="input-field" type="text" id="subject"
                                                        name="subject" placeholder="Subject">
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <textarea class="input-field" placeholder="Your Message" name="message" id="contact-message" required></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="tmp-button-here">
                                                    <button class="tmp-btn hover-icon-reverse radius-round w-100"
                                                        name="submit" type="submit" id="submit">
                                                        <span class="icon-reverse-wrapper">
                                                            <span class="btn-text">Appointment Now</span>
                                                            <span class="btn-icon"><i
                                                                    class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                                            <span class="btn-icon"><i
                                                                    class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tpm Get In touch End -->



    <!-- Tpm Blog and news Area Start -->
    <section class="blog-and-news-are tmp-section-gap">
        <div class="container">
            <div class="section-head mb--60">
                <div class="section-sub-title center-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                    <span class="subtitle">Blog and news</span>
                </div>
                <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">Elevating Personal
                    Branding the <br> through Powerful Portfolios</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog-card tmp-hover-link image-box-hover tmp-scroll-trigger tmp-fade-in animation-order-1">
                        <div class="img-box">
                            <a href="blog-details.html">
                                <img class="w-100" src="{{ asset('frontAssets/images/blog/blog-img-1.jpg') }}" alt="Blog Thumbnail">
                            </a>
                            <ul class="blog-tags">
                                <li><span class="tag-icon"><i class="fa-regular fa-user"></i></span>Mesbah</li>
                                <li><span class="tag-icon"><i class="fa-solid fa-calendar-days"></i></span>April 10</li>
                            </ul>
                        </div>
                        <div class="blog-content-wrap">
                            <h3 class="blog-title"><a class="link" href="blog-details.html">Inspiring the World, One
                                    Project at a
                                    Time for the
                                    man</a></h3>
                            <div class="more-btn tmp-link-animation">
                                <a href="blog-details.html" class="read-more-btn">Read More <span
                                        class="read-more-icon"><i class="fa-solid fa-angle-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog-card tmp-hover-link image-box-hover tmp-scroll-trigger tmp-fade-in animation-order-2">
                        <div class="img-box">
                            <a href="blog-details.html">
                                <img class="w-100" src="{{ asset('frontAssets/images/blog/blog-img-2.jpg') }}" alt="Blog Thumbnail">
                            </a>
                            <ul class="blog-tags">
                                <li><span class="tag-icon"><i class="fa-regular fa-user"></i></span>Mesbah</li>
                                <li><span class="tag-icon"><i class="fa-solid fa-calendar-days"></i></span>April 10</li>
                            </ul>
                        </div>
                        <div class="blog-content-wrap">
                            <h3 class="blog-title"><a class="link" href="blog-details.html">Let’s bring your ideas to
                                    life! Contact me, and let’s</a></h3>
                            <div class="more-btn tmp-link-animation">
                                <a href="blog-details.html" class="read-more-btn">Read More <span
                                        class="read-more-icon"><i class="fa-solid fa-angle-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog-card tmp-hover-link image-box-hover tmp-scroll-trigger tmp-fade-in animation-order-3">
                        <div class="img-box">
                            <a href="blog-details.html">
                                <img class="w-100" src="{{ asset('frontAssets/images/blog/blog-img-3.jpg') }}" alt="Blog Thumbnail">
                            </a>
                            <ul class="blog-tags">
                                <li><span class="tag-icon"><i class="fa-regular fa-user"></i></span>Mesbah</li>
                                <li><span class="tag-icon"><i class="fa-solid fa-calendar-days"></i></span>April 10</li>
                            </ul>
                        </div>
                        <div class="blog-content-wrap">
                            <h3 class="blog-title"><a class="link" href="blog-details.html">Each one showcases my
                                    approach and dedication man</a></h3>
                            <div class="more-btn tmp-link-animation">
                                <a href="blog-details.html" class="read-more-btn">Read More <span
                                        class="read-more-icon"><i class="fa-solid fa-angle-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tpm Blog and news Area End -->
@endsection

@section('script')
    <script></script>
@endsection
