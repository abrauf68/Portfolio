@extends('frontend.layouts.master')

@section('title', __('Services'))
@section('description', '')
@section('keywords', '')
@section('author', '')

@section('css')
@endsection

<!-- Page Title -->
@section('breadcrumbs')
    @include('frontend.layouts.partials.breadcrumb', [
        'title' => 'Services',
        'breadcrumbs' => [['label' => 'Services']],
    ])
@endsection
<!-- End Page Title -->

@section('content')
    <!-- Latest Service Area Start -->
    <section class="latest-service-area tmp-section-gap">
        <div class="container">
            <div class="row">
                @if (count(\App\Helpers\Helper::getAllServices()) > 0)
                    @php $i = 1; @endphp
                    @foreach (\App\Helpers\Helper::getAllServices() as $serv)
                        <div class="col-lg-6 col-sm-6">
                            <a href="{{ route('frontend.services', $serv->slug) }}"
                                class="service-card-v2 tmponhover tmp-scroll-trigger tmp-fade-in animation-order-1">
                                <h2 class="service-card-num">
                                    <span>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}.</span> {{ $serv->name }}
                                </h2>
                                <p class="service-para">
                                    {{ \Illuminate\Support\Str::words(strip_tags($serv->meta_description), 15, '...') }}
                                </p>
                            </a>
                        </div>
                        @php $i++; @endphp
                    @endforeach
                @endif

            </div>
        </div>
    </section>
    <!-- Latest Service Area End -->

    <!-- Tpm My Price plan Start -->
    <section class="our-price-plan-area tmp-section-gapBottom">
        <div class="container">
            <div class="section-head mb--60">
                <div class="section-sub-title center-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                    <span class="subtitle">My Price plan</span>
                </div>
                <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">Enhancing Collaboration <br>
                    between Remote</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6">
                    <div class="price-plan-card tmponhover blur-style-two tmp-scroll-trigger tmp-fade-in animation-order-1">
                        <span class="price-sub-title">Starter</span>
                        <h3 class="main-price">$ 5.00</h3>
                        <p class="per-month">Per Month</p>
                        <div class="check-box">
                            <ul>
                                <li>
                                    <div class="check-box-item">
                                        <div class="box-icon">
                                            <i class="fa-solid fa-circle-check"></i>
                                        </div>
                                        <p class="box-para">5 Social Media Account</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="check-box-item">
                                        <div class="box-icon">
                                            <i class="fa-solid fa-circle-check"></i>
                                        </div>
                                        <p class="box-para">Free Platform Access</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="check-box-item">
                                        <div class="box-icon">
                                            <i class="fa-solid fa-circle-check"></i>
                                        </div>
                                        <p class="box-para">24/7 Customer Support</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tmp-button-here">
                            <a class="tmp-btn hover-icon-reverse btn-border btn-md radius-round" href="contact.html">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Get Started</span>
                                    <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 tmp-scroll-trigger tmp-fade-in animation-order-2">
                    <div class="price-plan-card tmponhover blur-style-two active">
                        <span class="price-sub-title">Basic</span>
                        <h3 class="main-price">$ 230.00</h3>
                        <p class="per-month">Per Month</p>
                        <div class="check-box">
                            <ul>
                                <li>
                                    <div class="check-box-item">
                                        <div class="box-icon">
                                            <i class="fa-solid fa-circle-check"></i>
                                        </div>
                                        <p class="box-para">5 Social Media Account</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="check-box-item">
                                        <div class="box-icon">
                                            <i class="fa-solid fa-circle-check"></i>
                                        </div>
                                        <p class="box-para">Free Platform Access</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="check-box-item">
                                        <div class="box-icon">
                                            <i class="fa-solid fa-circle-check"></i>
                                        </div>
                                        <p class="box-para">Marketing Platform</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="check-box-item">
                                        <div class="box-icon">
                                            <i class="fa-solid fa-circle-check"></i>
                                        </div>
                                        <p class="box-para">24/7 Customer Support</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="check-box-item">
                                        <div class="box-icon">
                                            <i class="fa-solid fa-circle-check"></i>
                                        </div>
                                        <p class="box-para">Life time support</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tmp-button-here">
                            <a class="tmp-btn hover-icon-reverse btn-md radius-round" href="contact.html">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Get Started</span>
                                    <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="price-plan-card tmponhover blur-style-two tmp-scroll-trigger tmp-fade-in animation-order-3">
                        <span class="price-sub-title">Premium</span>
                        <h3 class="main-price">$ 45.00</h3>
                        <p class="per-month">Per Month</p>
                        <div class="check-box">
                            <ul>
                                <li>
                                    <div class="check-box-item">
                                        <div class="box-icon">
                                            <i class="fa-solid fa-circle-check"></i>
                                        </div>
                                        <p class="box-para">5 Social Media Account</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="check-box-item">
                                        <div class="box-icon">
                                            <i class="fa-solid fa-circle-check"></i>
                                        </div>
                                        <p class="box-para">Free Platform Access</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="check-box-item">
                                        <div class="box-icon">
                                            <i class="fa-solid fa-circle-check"></i>
                                        </div>
                                        <p class="box-para">24/7 Customer Support</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tmp-button-here">
                            <a class="tmp-btn hover-icon-reverse btn-border btn-md radius-round" href="contact.html">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Get Started</span>
                                    <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tpm My Price plan End -->
@endsection

@section('script')
    <script></script>
@endsection
