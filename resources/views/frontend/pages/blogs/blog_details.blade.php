@extends('frontend.layouts.master')

@section('title', __('Blogs'))
@section('description', '')
@section('keywords', '')
@section('author', '')

@section('css')
<style>
    .author-image img{
        object-fit: cover;
        border-radius: 50%;
    }
</style>
@endsection

<!-- Page Title -->
@section('breadcrumbs')
    @include('frontend.layouts.partials.breadcrumb', [
        'title' => 'Blogs',
        'breadcrumbs' => [
            ['label' => 'Blogs', 'url' => route('frontend.blogs')],
            ['label' => $blogCategory->name, 'url' => route('frontend.blogs', [$blogCategory->slug])],
            ['label' => $blog->title],
        ],
    ])
@endsection
<!-- End Page Title -->

@section('content')
    <div class="blog-classic-area-wrapper tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-left-area">
                        <div class="thumbnail-top">
                            <img src="{{ asset($blog->main_image) }}" alt="{{ $blog->name }}">
                        </div>
                        <div class="blog-details-discription">
                            <div class="blog-classic-tag">
                                <h4 class="title">By {{ $blog->user->name }}</h4>
                                <ul>
                                    <li>
                                        <div class="tag-wrap">
                                            <i class="fa-solid fa-tag"></i>
                                            <h4 class="tag-title">{{ $blog->blogCategory->name }}</h4>
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
                            <h3 class="title split-collab">{{ $blog->name }}</h3>
                            <p class="disc">
                                {{ $blog->meta_description }}
                            </p>
                        </div>
                        <div class="quote-area-blog-details">
                            <p class="disc">
                                {{ \App\Helpers\Helper::getRandomQuote()->quote }}
                            </p>
                            <h3 class="author">{{ \App\Helpers\Helper::getRandomQuote()->author }}</h3>
                            <span><i class="fa-solid fa-quote-right"></i></span>
                        </div>
                        <div class="blog-details-discription">
                            {!! $blog->content !!}

                            <div class="our-portfolio-swiper-btn-wrap">
                                @if (\App\Helpers\Helper::getPreviousBlog($blog->id) != null)
                                    <a href="{{ route('frontend.blogs', [\App\Helpers\Helper::getPreviousBlog($blog->id)->blogCategory->slug, \App\Helpers\Helper::getPreviousBlog($blog->id)->slug]) }}" class="prev-btn">
                                        <div class="tmp-arrow-btn">
                                            <i class="fa-solid fa-arrow-left"></i>
                                        </div>
                                        <div class="btn-content">
                                            <span class="para">Previous post</span>
                                            <h4 class="title">{{\App\Helpers\Helper::getPreviousBlog($blog->id)->title}}</h4>
                                        </div>
                                    </a>
                                @else
                                    <a href="#" class="prev-btn"></a>
                                @endif

                                @if (\App\Helpers\Helper::getNextBlog($blog->id) != null)
                                    <a href="{{ route('frontend.blogs', [\App\Helpers\Helper::getNextBlog($blog->id)->blogCategory->slug, \App\Helpers\Helper::getNextBlog($blog->id)->slug]) }}" class="next-btn">
                                        <div class="btn-content">
                                            <span class="para">Next post</span>
                                            <h4 class="title">{{\App\Helpers\Helper::getNextBlog($blog->id)->title}}</h4>
                                        </div>
                                        <div class="tmp-arrow-btn">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </div>
                                    </a>
                                @else
                                    <a href="#" class="next-btn"></a>
                                @endif
                            </div>
                            <div class="blog-details-navigation">
                                <div class="navigation-tags">
                                    <h3 class="tag-title">Keyword:</h3>
                                    <ul>
                                        @foreach (json_decode($blog->tags ?? '[]') as $tag)
                                            <li>
                                                <p class="tag"><a href="{{route('frontend.blogs.tags', $tag)}}">{{ $tag }}</a></p>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="social-link footer">
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                </div>
                            </div>
                            <!-- Comment Area Main Wrapper Start -->
                            <div class="comment-area-main-wrapper mt--30">
                                <h3 class="title">Comments ({{ str_pad(count($blog->blogComments), 2, '0', STR_PAD_LEFT) }})</h3>
                                @if (isset($blogComments) && count($blogComments) > 0)
                                    @foreach ($blogComments as $comment)
                                        <div class="single-comment-audience">
                                            <div class="author-image tmponhover">
                                                <img src="{{ asset($comment->user->profile->profile_image ?? 'assets/img/default/user.png') }}" alt="{{env('APP_ENV')}}">
                                            </div>
                                            <div class="right-area-commnet">
                                                <div class="top-area-comment">
                                                    <div class="left">
                                                        <h6 class="title">{{$comment->user->name}}</h6>
                                                        <span>{{ $comment->created_at->format('F d, Y') }}</span>
                                                    </div>
                                                    <div class="social-link-inner">
                                                        @if ($comment->user->profile->facebook_url)
                                                            <a href="{{$comment->user->profile->facebook_url}}"><i class="fa-brands fa-facebook-f"></i></a>
                                                        @endif
                                                        @if ($comment->user->profile->linkedin_url)
                                                            <a href="{{$comment->user->profile->linkedin_url}}"><i class="fa-brands fa-linkedin"></i></a>
                                                        @endif
                                                        @if ($comment->user->profile->instagram_url)
                                                            <a href="{{$comment->user->profile->instagram_url}}"><i class="fa-brands fa-instagram"></i></a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <p class="disc">{{$comment->message}}</p>
                                                <a href="#" class="reply-btn">reply</a>
                                            </div>
                                        </div>
                                        @if (isset($comment->replies) && count($comment->replies) > 0)
                                            @foreach ($comment->replies as $reply)
                                                <div class="single-comment-audience pl--100">
                                                    <div class="author-image tmponhover">
                                                        <img src="{{ asset($reply->user->profile->profile_image ?? 'assets/img/default/user.png') }}" alt="{{ env('APP_ENV') }}">
                                                    </div>
                                                    <div class="right-area-commnet">
                                                        <div class="top-area-comment">
                                                            <div class="left">
                                                                <h6 class="title">{{$reply->user->name}}</h6>
                                                                <span>{{ $reply->created_at->format('F d, Y') }}</span>
                                                            </div>
                                                            <div class="social-link-inner">
                                                                @if ($reply->user->profile->facebook_url)
                                                                    <a href="{{$reply->user->profile->facebook_url}}"><i class="fa-brands fa-facebook-f"></i></a>
                                                                @endif
                                                                @if ($reply->user->profile->linkedin_url)
                                                                    <a href="{{$reply->user->profile->linkedin_url}}"><i class="fa-brands fa-linkedin"></i></a>
                                                                @endif
                                                                @if ($reply->user->profile->instagram_url)
                                                                    <a href="{{$reply->user->profile->instagram_url}}"><i class="fa-brands fa-instagram"></i></a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <p class="disc">{{$reply->message}}</p>
                                                        {{-- <a href="#" class="reply-btn">reply</a> --}}
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    @endforeach
                                @else
                                        <p>No comments</p>
                                @endif
                            </div>
                            <!-- Comment Area Main Wrapper End -->

                            <!-- Blog Details Form Wrapper Start -->
                            <div class="blog-details-form-wrapper tmponhover">
                                <h4 class="title">Leave a comment</h4>
                                <span class="subtitle">By using form u agree with the message sorage, you can contact us
                                    directly
                                    now</span>
                                <form action="#" class="blog-details-form">
                                    <div class="single-input">
                                        <label>Your Name</label>
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div class="single-input">
                                        <label>Your Email</label>
                                        <input type="text" placeholder="Email">
                                    </div>
                                    <label>Message</label>
                                    <textarea placeholder="Message here.."></textarea>

                                    <div class="blog-submit-btn mt--40">
                                        <div class="tmp-button-here">
                                            <a class="tmp-btn hover-icon-reverse radius-round w-100"
                                                href="blog-details.html">
                                                <span class="icon-reverse-wrapper">
                                                    <span class="btn-text">Submit Now</span>
                                                    <span class="btn-icon"><i
                                                            class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                                    <span class="btn-icon"><i
                                                            class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <!-- Blog Details Form Wrapper End -->
                        </div>
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
