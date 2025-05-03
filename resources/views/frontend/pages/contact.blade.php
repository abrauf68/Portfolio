@extends('frontend.layouts.master')

@section('title', __('Contact'))
@section('description', '')
@section('keywords', '')
@section('author', '')

@section('css')
@endsection

<!-- Page Title -->
@section('breadcrumbs')
    @include('frontend.layouts.partials.breadcrumb', [
        'title' => 'Contact',
        'breadcrumbs' => [['label' => 'Contact']],
    ])
@endsection
<!-- End Page Title -->

@section('content')
    <div class="contact-area-wrapper tmp-section-gap">
        <div class="container">
            <div class="contact-info-wrap">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info tmp-scroll-trigger tmponhover tmp-fade-in animation-order-1">
                            <div class="contact-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <h3 class="title">Address</h3>
                            <p class="para">{{\App\Helpers\Helper::getCompanyAddress()}} , {{\App\Helpers\Helper::getCompanyCountry()}}</p>
                            {{-- <p class="para">{{\App\Helpers\Helper::getCompanyCountry()}}</p> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info tmp-scroll-trigger tmponhover tmp-fade-in animation-order-2">
                            <div class="contact-icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <h3 class="title">E-mail</h3>
                            <a href="mailto:{{\App\Helpers\Helper::getCompanyEmail()}}">
                                <p class="para">{{\App\Helpers\Helper::getCompanyEmail()}}</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info tmp-scroll-trigger tmponhover tmp-fade-in animation-order-3">
                            <div class="contact-icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <h3 class="title">Call Me</h3>
                            <a href="tel:{{\App\Helpers\Helper::getCompanyPhone()}}">
                                <p class="para">{{\App\Helpers\Helper::getCompanyPhone()}}</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tpm Get In touch start -->
        @include('frontend.sections.get-in-touch-area')
        <!-- Tpm Get In touch End -->

    </div>
@endsection

@section('script')
    <script></script>
@endsection
