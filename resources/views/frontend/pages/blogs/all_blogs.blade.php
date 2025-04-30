@extends('frontend.layouts.master')

@section('title', __('Blogs'))
@section('description', '')
@section('keywords', '')
@section('author', '')

@section('css')
@endsection

<!-- Page Title -->
@section('breadcrumbs')
    @include('frontend.layouts.partials.breadcrumb', [
        'title' => 'Blogs',
        'breadcrumbs' => [['label' => 'Blogs']],
    ])
@endsection
<!-- End Page Title -->

@section('content')
    <div class="blog-classic-area-wrapper tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @if (isset($blogs) && count($blogs) > 0)
                        @foreach ($blogs as $blog)
                            <div class="blog-classic-card tmp-scroll-trigger tmponhover tmp-fade-in animation-order-1">
                                <div class="img-box">
                                    <a href="{{ route('frontend.blogs', [$blog->blogCategory->slug, $blog->slug]) }}">
                                        <img class="img-primary hidden-on-mobile"
                                            src="{{asset($blog->meta_image)}}" alt="Blog Thumbnail">
                                        <img class="img-secondary" src="{{asset($blog->meta_image)}}"
                                            alt="BLog Thumbnail">
                                    </a>
                                </div>
                                <div class="blog-classic-content">
                                    <div class="blog-classic-tag">
                                        <ul>
                                            <li>
                                                <div class="tag-wrap">
                                                    <i class="fa-solid fa-tag"></i>
                                                    <h4 class="tag-title">{{ $blog->blogCategory->name ?? 'Uncategorized' }}</h4>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="tag-wrap">
                                                    <i class="fa-regular fa-comment"></i>
                                                    <h4 class="tag-title">Comments ({{ str_pad(count($blog->blogComments), 2, '0', STR_PAD_LEFT) }})</h4>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="tag-wrap">
                                                    <i class="fa-solid fa-calendar-day"></i>
                                                    <h4 class="tag-title">{{ $blog->created_at->format('d M Y') }}</h4>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <h2 class="title">
                                        <a href="{{ route('frontend.blogs', [$blog->blogCategory->slug, $blog->slug]) }}">
                                            {{ $blog->title }}
                                        </a>
                                    </h2>
                                    <p class="para">{!! Str::limit(strip_tags($blog->meta_description), 200) !!}</p>


                                    <div class="tmp-button-here">
                                        <a class="tmp-btn hover-icon-reverse radius-round btn-border btn-md"
                                            href="{{ route('frontend.blogs', [$blog->blogCategory->slug, $blog->slug]) }}">
                                            <span class="icon-reverse-wrapper">
                                                <span class="btn-text">Read More</span>
                                                <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                                <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>No Blog Found</p>
                    @endif
                    <div class="tmp-pagination-button">
                        @if ($blogs->onFirstPage())
                            <a href="javascript:void(0);" class="pagination-btn disabled"><i class="fa-sharp fa-regular fa-arrow-left"></i></a>
                        @else
                            <a href="{{ $blogs->previousPageUrl() }}" class="pagination-btn"><i class="fa-sharp fa-regular fa-arrow-left"></i></a>
                        @endif

                        @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                            <a href="{{ $url }}" class="pagination-btn {{ $page == $blogs->currentPage() ? 'active' : '' }}">{{ $page }}</a>
                        @endforeach

                        @if ($blogs->hasMorePages())
                            <a href="{{ $blogs->nextPageUrl() }}" class="pagination-btn"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        @else
                            <a href="javascript:void(0);" class="pagination-btn disabled"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        @endif
                    </div>
                </div>
                <div class="col-lg-4">
                    @include('frontend.pages.blogs.sections.sidebar')
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script></script>
@endsection
