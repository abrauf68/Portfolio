<!-- tpm-header-area start -->
<header class="tmp-header-area-start header-one header--sticky header--transparent">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-content">
                    <div class="logo">
                        <a href="index.html">
                            <img class="logo-dark" src="{{ asset('frontAssets/images/logo/white-logo-reeni.png') }}"
                                alt="{{ env('APP_NAME') }}">
                            <img class="logo-white" src="{{ asset('frontAssets/images/logo/logo-white.png') }}"
                                alt="{{ env('APP_NAME') }}">
                        </a>
                    </div>
                    <nav class="tmp-mainmenu-nav d-none d-xl-block">
                        <ul class="tmp-mainmenu">
                            <li>
                                <a class="{{ request()->routeIs('frontend.home') ? 'active' : '' }}"
                                    href="{{ route('frontend.home') }}">Home
                                </a>
                            </li>
                            <li>
                                <a class="{{ request()->routeIs('frontend.about') ? 'active' : '' }}"
                                    href="{{ route('frontend.about') }}">About</a>
                            </li>
                            <li class="has-dropdown">
                                <a class="{{ request()->routeIs('frontend.services') ? 'active' : '' }}"
                                    href="#">Services
                                    <i class="fa-regular fa-chevron-down"></i>
                                </a>
                                <ul class="submenu">
                                    <li><a class="{{ request()->routeIs('frontend.services') && !request()->route('slug') ? 'active' : '' }}"
                                            href="{{ route('frontend.services') }}">All Services</a></li>
                                    @if (count(\App\Helpers\Helper::getFeaturedServices()) > 0)
                                        @foreach (\App\Helpers\Helper::getFeaturedServices() as $service)
                                            <li><a class="{{ request()->routeIs('frontend.services') && request()->route('slug') == $service->slug ? 'active' : '' }}"
                                                    href="{{ route('frontend.services', $service->slug) }}">{{ $service->name }}</a>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a href="#"
                                    class="{{ request()->routeIs('frontend.blogs') ? 'active' : '' }}">Blog
                                    <i class="fa-regular fa-chevron-down"></i>
                                </a>
                                <ul class="submenu">
                                    <li><a href="{{ route('frontend.blogs') }}"
                                            class="{{ request()->routeIs('frontend.blogs') && !request()->route('categorySlug') ? 'active' : '' }}">Blogs</a>
                                    </li>
                                    @if (count(\App\Helpers\Helper::topBlogCategories()) > 0)
                                        @foreach (\App\Helpers\Helper::topBlogCategories() as $blogCategory)
                                            <li><a class="{{ request()->routeIs('frontend.blogs') && request()->route('categorySlug') == $blogCategory->slug ? 'active' : '' }}"
                                                    href="{{ route('frontend.blogs', [$blogCategory->slug]) }}">{{ $blogCategory->name }}</a>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a href="#" class="{{ request()->routeIs('frontend.projects') ? 'active' : '' }}">Project
                                    <i class="fa-regular fa-chevron-down"></i>
                                </a>
                                <ul class="submenu">
                                    <li><a href="{{ route('frontend.projects') }}"
                                        class="{{ request()->routeIs('frontend.projects') && !request()->route('slug') ? 'active' : '' }}">Projects</a></li>
                                    @if (count(\App\Helpers\Helper::getFeaturedProjects()) > 0)
                                        @foreach (\App\Helpers\Helper::getFeaturedProjects() as $project)
                                            <li><a class="{{ request()->routeIs('frontend.projects') && request()->route('slug') == $project->slug ? 'active' : '' }}"
                                                    href="{{ route('frontend.projects', [$project->slug]) }}">{{ $project->title }}</a>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </li>
                            <li>
                                <a class="{{ request()->routeIs('frontend.contact') ? 'active' : '' }}"
                                    href="{{ route('frontend.contact') }}">Contact</a>
                            </li>
                        </ul>

                    </nav>
                    <div class="tmp-header-right">
                        <div class="social-share-wrapper d-none d-md-block">
                            <div class="social-link">
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
                        <div class="actions-area">
                            <div class="tmp-side-collups-area d-none d-xl-block">
                                <button class="tmp-menu-bars tmp_button_active"><i
                                        class="fa-regular fa-bars-staggered"></i></button>
                            </div>
                            <div class="tmp-side-collups-area d-block d-xl-none">
                                <button class="tmp-menu-bars humberger_menu_active"><i
                                        class="fa-regular fa-bars-staggered"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- tpm-header-area end -->

<div class="d-none d-xl-block">
    <div class="tmp-sidebar-area tmp_side_bar">
        <div class="inner">
            <div class="top-area">
                <a href="index.html" class="logo">
                    <img class="logo-dark" src="{{ asset('frontAssets/images/logo/white-logo-reeni.png') }}"
                        alt="{{ env('APP_NAME') }}">
                    <img class="logo-white" src="{{ asset('frontAssets/images/logo/logo-white.png') }}"
                        alt="{{ env('APP_NAME') }}">
                </a>
                <div class="close-icon-area">
                    <button class="tmp-round-action-btn close_side_menu_active">
                        <i class="fa-sharp fa-light fa-xmark"></i>
                    </button>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="image-area-feature">
                    <a href="index.html">
                        <img src="{{ asset(\App\Helpers\Helper::getAdminDetails()->profile->profile_image ?? 'assets/img/default/user.png') }}" alt="personal-logo">
                        {{-- <img src="{{ asset('frontAssets/images/logo/man.png') }}" alt="personal-logo"> --}}
                    </a>
                </div>
                <h5 class="title mt--30">{{ \App\Helpers\Helper::getAdminDetails()->name }} - {{ \App\Helpers\Helper::getAdminDetails()->profile->designation->name ?? 'Developer' }}</h5>
                <p class="disc">{{\App\Helpers\Helper::getAdminDetails()->profile->bio}}</p>
                <div class="short-contact-area">
                    <!-- single contact information -->
                    <div class="single-contact">
                        <i class="fa-solid fa-phone"></i>
                        <div class="information tmp-link-animation">
                            <span>Call Now</span>
                            <a href="tel:{{\App\Helpers\Helper::getAdminDetails()->profile->country->phone_code ?? '+00'}}{{\App\Helpers\Helper::getAdminDetails()->profile->phone_number ?? '000000000'}}" class="number">{{\App\Helpers\Helper::getAdminDetails()->profile->country->phone_code ?? '+00'}} {{\App\Helpers\Helper::getAdminDetails()->profile->phone_number ?? '000000000'}}</a>
                        </div>
                    </div>
                    <!-- single contact information end -->

                    <!-- single contact information -->
                    <div class="single-contact">
                        <i class="fa-solid fa-envelope"></i>
                        <div class="information tmp-link-animation">
                            <span>Mail Us</span>
                            <a href="mailto:{{\App\Helpers\Helper::getAdminDetails()->email}}" class="number">{{\App\Helpers\Helper::getAdminDetails()->email}}</a>
                        </div>
                    </div>
                    <!-- single contact information end -->

                    <!-- single contact information -->
                    <div class="single-contact">
                        <i class="fa-solid fa-location-crosshairs"></i>
                        <div class="information tmp-link-animation">
                            <span>My Address</span>
                            <span class="number">{{\App\Helpers\Helper::getAdminDetails()->profile->address ?? '66 Broklyant New York'}}, {{\App\Helpers\Helper::getAdminDetails()->profile->country->name ?? 'USA'}}</span>
                        </div>
                    </div>
                    <!-- single contact information end -->
                </div>
                <!-- social area start -->
                <div class="social-wrapper mt--20">
                    <span class="subtitle">find with me</span>
                    <div class="social-link">
                        @if (\App\Helpers\Helper::getAdminDetails()->profile->facebook_url)
                            <a href="{{\App\Helpers\Helper::getAdminDetails()->profile->facebook_url}}"><i class="fa-brands fa-facebook-f"></i></a>
                        @endif
                        @if (\App\Helpers\Helper::getAdminDetails()->profile->linkedin_url)
                            <a href="{{\App\Helpers\Helper::getAdminDetails()->profile->linkedin_url}}"><i class="fa-brands fa-linkedin"></i></a>
                        @endif
                        @if (\App\Helpers\Helper::getAdminDetails()->profile->instagram_url)
                            <a href="{{\App\Helpers\Helper::getAdminDetails()->profile->instagram_url}}"><i class="fa-brands fa-instagram"></i></a>
                        @endif
                        @if (\App\Helpers\Helper::getAdminDetails()->profile->github_url)
                            <a href="{{\App\Helpers\Helper::getAdminDetails()->profile->github_url}}"><i class="fa-brands fa-github"></i></a>
                        @endif
                    </div>
                </div>
                <!-- social area end -->
            </div>
        </div>
    </div>
    <a class="overlay_close_side_menu close_side_menu_active" href="javascript:void(0);"></a>
</div>

<div class="d-block d-xl-none">
    <div class="tmp-popup-mobile-menu">
        <div class="inner">
            <div class="header-top">
                <div class="logo">
                    <a href="index.html" class="logo-area">
                        <img class="logo-dark" src="{{ asset('frontAssets/images/logo/white-logo-reeni.png') }}"
                            alt="{{ env('APP_NAME') }}">
                        <img class="logo-white" src="{{ asset('frontAssets/images/logo/logo-white.png') }}"
                            alt="{{ env('APP_NAME') }}">
                    </a>

                </div>
                <div class="close-menu">
                    <button class="close-button tmp-round-action-btn">
                        <i class="fa-sharp fa-light fa-xmark"></i>
                    </button>
                </div>
            </div>
            <ul class="tmp-mainmenu">
                <li>
                    <a href="{{ route('frontend.home') }}">Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('frontend.about') }}">About</a>
                </li>
                <li class="has-dropdown">
                    <a href="#">Services
                        <i class="fa-regular fa-chevron-down"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="service.html">Service</a></li>
                        <li><a href="service-details.html">Service Details</a></li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#">Blog
                        <i class="fa-regular fa-chevron-down"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="blog.html">Blog Classic</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#">Project
                        <i class="fa-regular fa-chevron-down"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="project.html">Project</a></li>
                        <li><a href="project-details.html">Project Details</a></li>
                    </ul>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>


            <div class="social-wrapper mt--40">
                <span class="subtitle">find with me</span>
                <div class="social-link">
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                </div>
            </div>
            <!-- social area end -->



        </div>
    </div>
</div>
