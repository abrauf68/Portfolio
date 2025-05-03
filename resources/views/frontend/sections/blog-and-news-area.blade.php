<section class="blog-and-news-are tmp-section-gap">
    <div class="container">
        <div class="section-head mb--60">
            <div class="section-sub-title center-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                <span class="subtitle">Blog and news</span>
            </div>
            <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">Elevating Personal
                Branding the <br> through Powerful Portfolios</h2>
        </div>
        <div class="row">
            @if (count(\App\Helpers\Helper::recentBlogs()) > 0)
                @foreach (\App\Helpers\Helper::recentBlogs() as $index => $blog)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div
                            class="blog-card tmp-hover-link image-box-hover tmp-scroll-trigger tmp-fade-in animation-order-{{ $index + 1 }}">
                            <div class="img-box">
                                <a href="{{ route('frontend.blogs', [$blog->blogCategory->slug, $blog->slug]) }}">
                                    <img class="w-100" src="{{ asset($blog->meta_image) }}"
                                        alt="{{$blog->title}}">
                                </a>
                                <ul class="blog-tags">
                                    <li>
                                        <span class="tag-icon"><i class="fa-regular fa-user"></i></span>
                                        {{ $blog->user->name ?? 'Admin' }}
                                    </li>
                                    <li>
                                        <span class="tag-icon"><i class="fa-solid fa-calendar-days"></i></span>
                                        {{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}
                                    </li>
                                </ul>
                            </div>
                            <div class="blog-content-wrap">
                                <h3 class="blog-title">
                                    <a class="link" href="{{ route('frontend.blogs', [$blog->blogCategory->slug, $blog->slug]) }}">
                                        {{ Str::limit($blog->title, 80) }}
                                    </a>
                                </h3>
                                <div class="more-btn tmp-link-animation">
                                    <a href="{{ route('frontend.blogs', [$blog->blogCategory->slug, $blog->slug]) }}" class="read-more-btn">
                                        Read More
                                        <span class="read-more-icon">
                                            <i class="fa-solid fa-angle-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
