<!-- Start Footer Area  -->
<!-- Start Footer Area  -->
<footer class="footer-area footer-style-one-wrapper bg-color-footer bg_images tmp-section-gap">
    <div class="container">
        <div class="footer-main footer-style-one">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6">
                    <div class="single-footer-wrapper border-right mr--20">
                        <div class="logo">
                            <a href="{{route('frontend.home')}}">
                                <img src="{{ asset(\App\Helpers\Helper::getLogoDark()) }}"
                                    alt="{{env('APP_NAME')}}">
                            </a>
                        </div>
                        <p class="description"><span>Get Ready</span> To Create Great</p>
                        <form action="#" class="newsletter-form-1 mt--40">
                            <input type="email" placeholder="Email Adress">
                            <span class="form-icon"><i class="fa-regular fa-envelope"></i></span>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-footer-wrapper quick-link-wrap">
                        <h5 class="ft-title">Quick Link</h5>
                        <ul class="ft-link tmp-link-animation">
                            <li>
                                <a href="{{ route('frontend.about') }}">About Me</a>
                            </li>
                            <li>
                                <a href="{{ route('frontend.services') }}">Service</a>
                            </li>
                            <li>
                                <a href="{{ route('frontend.contact') }}">Contact Me</a>
                            </li>
                            <li>
                                <a href="{{ route('frontend.blogs') }}">Blog Post</a>
                            </li>
                            <li>
                                <a href="{{ route('frontend.contact') }}">Pricing</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-wrapper contact-wrap">
                        <h5 class="ft-title">Contact </h5>
                        <ul class="ft-link tmp-link-animation">
                            <li><span class="ft-icon"><i class="fa-solid fa-envelope"></i></span><a
                                href="mailto:{{\App\Helpers\Helper::getCompanyEmail()}}">{{\App\Helpers\Helper::getCompanyEmail()}}</a></li>
                            <li><span class="ft-icon"><i class="fa-solid fa-location-dot"></i></span>{{\App\Helpers\Helper::getCompanyAddress()}} , {{\App\Helpers\Helper::getCompanyCountry()}}</li>
                            <li><span class="ft-icon"><i class="fa-solid fa-phone"></i></span><a
                                href="tel:{{\App\Helpers\Helper::getCompanyPhone()}}">{{\App\Helpers\Helper::getCompanyPhone()}}</a></li>
                        </ul>
                        <div class="social-link footer">
                            @if (\App\Helpers\Helper::getCompanyFacebook() !== null)
                                <a href="{{\App\Helpers\Helper::getCompanyFacebook()}}"><i class="fa-brands fa-facebook-f"></i></a>
                            @endif
                            @if (\App\Helpers\Helper::getCompanyInstagram() !== null)
                                <a href="{{\App\Helpers\Helper::getCompanyInstagram()}}"><i class="fa-brands fa-instagram"></i></a>
                            @endif
                            @if (\App\Helpers\Helper::getCompanyGithub() !== null)
                                <a href="{{\App\Helpers\Helper::getCompanyGithub()}}"><i class="fa-brands fa-github"></i></a>
                            @endif
                            @if (\App\Helpers\Helper::getCompanyLinkedin() !== null)
                                <a href="{{\App\Helpers\Helper::getCompanyLinkedin()}}"><i class="fa-brands fa-linkedin-in"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyright-area-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-wrapper">
                    <p class="copy-right-para tmp-link-animation"> © {{ date('Y') }}
                        , {{ \App\Helpers\Helper::getfooterText() }}
                    </p>
                    <ul class="tmp-link-animation">
                        <li><a href="#">Trams & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="{{ route('frontend.contact') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Footer Area  -->
<!-- End Footer Area  -->
