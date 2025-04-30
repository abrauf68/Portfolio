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
                {{-- <p class="doc-para">Web designing in a powerful way of just not an only professions, however, in a
                    passion for our Company. We have to a tendency to believe the idea that smart looking of any
                    websitet in on visitors.Web designing in a powerful way of just not an only profession Web
                    designing in a powerful way of just not an only </p>
                <h2 class="title-mini split-collab">My Experts Areas where i gained skill</h2>
                <p class="doc-para">Web designing in a powerful way of just not an only professions, however, in a
                    passion for our Company. We have to a tendency to believe the idea that smart looking of any
                    websitet in on visitors.Web designing in a powerful way of just not an only profession Web
                    designing in a powerful way of just not an only</p>
                <p class="doc-para">Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere
                    viverra .Aliquam eros justo, posuere lobortis, viverra laoreet augue mattis fermentum
                    ullamcorper viverra laoreet Aliquam eros </p>

                <h2 class="title-mini split-collab">My Experts Areas where i gained skill</h2>
                <p class="doc-para">Web designing in a powerful way of just not an only professions, however, in a
                    passion for our Company. We have to a tendency to believe the idea that smart looking of any
                    websitet in on visitors.Web designing in a powerful way of just not an only profession Web
                    designing in a powerful way of just not an only</p>
                <p class="doc-para">Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere
                    viverra .Aliquam eros justo, posuere lobortis, viverra laoreet augue mattis fermentum
                    ullamcorper viverra laoreet Aliquam eros </p>
                <p class="doc-para">viverra laoreet matti ullamcorper posuere
                    viverra .Aliquam eros justo, posuere lobortis, viverra laoreet augue mattis fermentum
                    ullamcorper viverra laoreet Aliquam eros</p> --}}

            </div>
            <div class="col-lg-4">
                <div class="signle-side-bar service-list-area tmponhover">
                    <div class="header">
                        <h3 class="title">Services</h3>
                    </div>
                    <div class="body">
                        @if (count(\App\Helpers\Helper::getServices()) > 0)
                            @foreach (\App\Helpers\Helper::getServices() as $serv)
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
