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
                                src="{{ asset('frontAssets/images/banner/bg-man.png') }}" alt="banner-img">
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
                                            <b class="is-visible theme-gradient">Full Stack Developer.</b>
                                            <b class="is-hidden theme-gradient">Laravel Expert.</b>
                                            <b class="is-hidden theme-gradient">RESTful API Architect.</b>
                                            <b class="is-hidden theme-gradient">Freelancer.</b>
                                            <b class="is-hidden theme-gradient">Dashboard UI Designer.</b>
                                            <b class="is-hidden theme-gradient">MySQL & Database Designer.</b>
                                            <b class="is-hidden theme-gradient">Backend System Integrator.</b>
                                        </span>
                                    </span>
                                </span>
                            </h1>
                            <p class="disc tmp-scroll-trigger tmp-fade-in animation-order-3"> I’m a Full Stack Web Developer
                                specializing in Laravel/PHP, Vue.js, JavaScript, jQuery, and MySQL.
                                I build dynamic, scalable, and efficient web applications tailored to meet your business
                                needs. </p>
                            <div class="button-area-banner-one tmp-scroll-trigger tmp-fade-in animation-order-4">
                                <a class="tmp-btn hover-icon-reverse radius-round" href="{{ route('frontend.projects') }}">
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
    @include('frontend.sections.service-area')
    <!-- Tpm Service Area End -->

    <!-- Tpm Counter Area Start -->
    @include('frontend.sections.counter-area')
    <!-- Tpm Counter Area End -->

    <!-- tmp skill area start -->
    @include('frontend.sections.skill-area')
    <!-- tmp skill area end -->

    <!-- Tpm Latest Service Area Start -->
    @include('frontend.sections.latest-service-area')
    <!-- Tpm Latest Service Area End -->

    <!-- Tpm Education Experience Area Start -->
    @include('frontend.sections.education-area')
    <!-- Tpm Education Experience Area End -->

    <!-- Tpm Our Supported Company Area Start -->
    @include('frontend.sections.our-supported-company-area')
    <!-- Tpm Our Supported Company Area End -->

    <!-- Tpm Latest Portfolio Area Start -->
    @include('frontend.sections.latest-portfolio-area')
    <!-- Tpm Latest Portfolio Area End -->

    <!-- Tpm My Skill Area Start -->
    @include('frontend.sections.my-skill-area')
    <!-- Tpm My Skill Area End -->

    <!-- Tpm Testimonial Area Start -->
    @include('frontend.sections.testimonials-area')
    <!-- Tpm Testimonial Area End -->

    <!-- Tpm Get In touch start -->
    @include('frontend.sections.get-in-touch-area')
    <!-- Tpm Get In touch End -->

    <!-- Tpm Blog and news Area Start -->
    @include('frontend.sections.blog-and-news-area')
    <!-- Tpm Blog and news Area End -->
@endsection

@section('script')
    <script></script>
@endsection
