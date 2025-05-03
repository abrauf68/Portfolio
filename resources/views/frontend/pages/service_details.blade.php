@extends('frontend.layouts.master')

@section('title', __('Service Details'))
@section('description', '')
@section('keywords', '')
@section('author', '')

@section('css')
<style>
    .active-service{
        color: #ff014f !important;
    }
</style>
@endsection

<!-- Page Title -->
@section('breadcrumbs')
    @include('frontend.layouts.partials.breadcrumb', [
        'title' => 'Service Details',
        'breadcrumbs' => [
            ['label' => 'Services', 'url' => route('frontend.services')],
            ['label' => $service->name]
        ],
    ])
@endsection
<!-- End Page Title -->

@section('content')
<div class="service-details-area-wrapper tmp-section-gap">
    <div class="container">
        <div class="row row--40">
            <div class="col-lg-8">
                <div class="service-thumnail-wrap">
                    <img src="{{ $service->main_image ? asset($service->main_image) : asset('frontAssets/images/services/service-detials-thumnail-wrap.png') }}" alt="thumnail-img">
                </div>
                <h2 class="title split-collab">{{$service->meta_title}}</h2>
                {!! $service->details !!}
            </div>
            <div class="col-lg-4">
                <div class="signle-side-bar service-list-area tmponhover">
                    <div class="header">
                        <h3 class="title">Services</h3>
                    </div>
                    <div class="body">
                        @if (count(\App\Helpers\Helper::getAllServices()) > 0)
                            @foreach (\App\Helpers\Helper::getAllServices() as $serv)
                                <a href="{{route('frontend.services', $serv->slug)}}" class="single-service">
                                    <p class="service-title {{ $serv->id == $service->id ? 'active-service' : '' }}">{{ $serv->name }}</p>
                                    <span class="service-icon"><i class="fa-solid fa-angle-right"></i></span>
                                </a>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script></script>
@endsection
