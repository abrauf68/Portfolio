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
        'breadcrumbs' => [
            ['label' => 'Projects', 'url' => route('frontend.projects')],
            ['label' => $project->title],
        ],
    ])
@endsection
<!-- End Page Title -->

@section('content')
    <div class="project-details-area-wrapper tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-details-thumnail-wrap">
                        <img src="{{ asset($project->main_image) }}" alt="thumbnail">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="project-details-content-wrap">
                        <h2 class="title">{{ $project->meta_title }}</h2>
                        {!! $project->description !!}
                        @if (isset($projectImages) && count($projectImages) > 0)
                            <div class="project-details-swiper-wrapper">
                                <div class="swiper project-details-swiper">
                                    <div class="swiper-wrapper">
                                        @foreach ($projectImages as $projectImage)
                                            <div class="swiper-slide">
                                                <div class="project-details-img">
                                                    <img src="{{asset($projectImage->image)}}"
                                                        alt="swiper-img">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="project-details-swiper-btn">
                                    <div class="project-swiper-button-prev"><span><i
                                                class="fa-solid fa-arrow-left"></i></span>Previous</div>
                                    <div class="project-swiper-button-next">Next <span><i
                                                class="fa-solid fa-arrow-right"></i></span></div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <!-- Tpm Get In touch start -->
                    <section class="get-in-touch-area pt--80">
                        <div class="container p-0">
                            <div class="contact-get-in-touch-wrap">
                                <div class="get-in-touch-wrapper tmponhover">
                                    <div class="row g-5 align-items-center">
                                        <div class="col-lg-12">
                                            <div class="contact-inner">
                                                <div class="contact-form">
                                                    <form class="tmp-dynamic-form" method="POST" action="{{route('frontend.submit.form')}}">
                                                        @csrf
                                                        <div class="contact-form-wrapper row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <input class="input-field @error('name') is-invalid @enderror" name="name" id="contact-name"
                                                                        placeholder="Your Name" type="text" required value="{{ old('name') }}">
                                                                    @error('name')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <input class="input-field @error('phone') is-invalid @enderror" name="phone" id="contact-phone"
                                                                        placeholder="Phone Number" type="text" required value="{{ old('phone') }}">
                                                                    @error('phone')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <input class="input-field @error('email') is-invalid @enderror" id="contact-email" name="email"
                                                                        placeholder="Your Email" type="email" required value="{{ old('email') }}">
                                                                    @error('email')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <input class="input-field @error('subject') is-invalid @enderror" type="text" id="subject"
                                                                        name="subject" placeholder="Subject" value="{{ old('subject') }}">
                                                                    @error('subject')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <textarea class="input-field @error('message') is-invalid @enderror" placeholder="Your Message" name="message" id="contact-message" required>
                                                                        {{ old('message') }}
                                                                    </textarea>
                                                                    @error('message')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
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
                </div>
                <div class="col-lg-4">
                    <div class="signle-side-bar project-details-area tmponhover">
                        <div class="header">
                            <h3 class="title">Project Details</h3>
                        </div>
                        <div class="body">
                            <div class="project-details-info">Name: <span>{{ $project->title }}</span></div>
                            <div class="project-details-info">Client: <span>{{ $project->client_name }}</span></div>
                            <div class="project-details-info">Industry: <span>{{ $project->industry }}</span></div>
                            <div class="project-details-info">Technology: <span>{{ $project->technology }}</span></div>
                            <div class="project-details-info">Project:
                                <span>
                                    @if ($project->project_url)
                                        <a href="{{ $project->project_url }}"
                                            target="_blank">{{ $project->project_url }}</a>
                                    @else
                                        N/A
                                    @endif
                                </span>
                            </div>
                            <div class="project-details-info">GitHub:
                                <span>
                                    @if ($project->github_url)
                                        <a href="{{ $project->github_url }}"
                                            target="_blank">{{ $project->github_url }}</a>
                                    @else
                                        N/A
                                    @endif
                                </span>
                            </div>
                            <div class="project-details-info">Status: <span>{{ ucfirst($project->status) }}</span></div>
                            @if ($project->status == 'completed')
                                <div class="project-details-info">Completion Date:
                                    <span>
                                        {{ \Carbon\Carbon::parse($project->completion_date)->format('d F, Y') }}
                                    </span>
                                </div>
                            @endif
                        </div>
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
