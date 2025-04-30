@extends('frontend.layouts.master')

@section('title', __('Projects'))
@section('description', '')
@section('keywords', '')
@section('author', '')

@section('css')
@endsection

<!-- Page Title -->
@section('breadcrumbs')
    @include('frontend.layouts.partials.breadcrumb', [
        'title' => 'Projects',
        'breadcrumbs' => [['label' => 'Projects']],
    ])
@endsection
<!-- End Page Title -->

@section('content')
    <!-- Tpm Our Latest Portfolio  Area Start -->
    <section class="tmp-latest-portfolio tmp-section-gap">
        <div class="container">
            <div class="row">
                @if (isset($projects) && count($projects) > 0)
                    @foreach ($projects as $project)
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="latest-portfolio-card v5 tmp-hover-link">
                                <div class="portfoli-card-img">
                                    <div class="img-box v2">
                                        <a href="{{ route('frontend.projects', $project->slug) }}">
                                            <img class="img-primary hidden-on-mobile"
                                                src="{{asset($project->meta_image)}}" alt="{{$project->title}}">
                                            <img class="img-secondary" src="{{asset($project->meta_image)}}"
                                                alt="{{$project->title}}">
                                        </a>
                                    </div>
                                    <a href="{{ route('frontend.projects', $project->slug) }}" class="img-link-icon"><i
                                        class="fa-solid fa-arrow-up-long"></i></a>
                                </div>
                                <div class="portfolio-card-content-wrap">
                                    <div class="content-left">
                                        <h3 class="portfolio-card-title">
                                            <a class="link" href="{{ route('frontend.projects', $project->slug) }}">
                                                {{$project->title}}
                                            </a>
                                        </h3>
                                        <p class="portfoli-card-para">{{ $project->meta_description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

    </section>
    <!-- Tpm Our Latest Portfolio  Area End -->
@endsection

@section('script')
    <script></script>
@endsection
