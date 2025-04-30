<div class="tmp-sidebar">
    <div class="signle-side-bar search-area tmponhover">
        <div class="body">
            <div class="search-area">
                <input type="text" placeholder="Type here" required>
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </div>
    </div>
    <div class="signle-side-bar recent-post-area tmponhover">
        <div class="header">
            <h3 class="title">Recent Post</h3>
        </div>
        <div class="body">
            @if (count(\App\Helpers\Helper::getBlogCategories()) > 0)
                @foreach (\App\Helpers\Helper::getBlogCategories() as $blogCat)
                    <a href="{{ route('frontend.blogs', [$blogCat->slug]) }}" class="single-post {{ isset($blogCategory) && $blogCategory->id == $blogCat->id ? 'active_category' : ''}}">
                        <span class="single-post-left">
                            <i class="fa-solid fa-arrow-right"></i>
                            <span class="post-title">{{ $blogCat->name }}</span>
                        </span>
                        <span class="post-num">({{ str_pad(count($blogCat->blogs), 2, '0', STR_PAD_LEFT) }})</span>
                    </a>
                @endforeach
            @endif
        </div>
    </div>
    <div class="signle-side-bar recent-post-area tmponhover">
        <div class="header">
            <h3 class="title">Recent Post</h3>
        </div>
        <div class="body">
            @if (count(\App\Helpers\Helper::recentBlogs()) > 0)
                @foreach (\App\Helpers\Helper::recentBlogs() as $blog)
                    <div class="single-post-card tmp-hover-link">
                        <div class="single-post-card-img">
                            <img src="{{ asset($blog->meta_image) }}" alt="{{ $blog->title }}">
                        </div>
                        <div class="single-post-right">
                            <div class="single-post-top">
                                <i class="fa-regular fa-folder-open"></i>
                                <p class="post-title">{{ $blog->blogCategory->name }}</p>
                            </div>
                            <h3 class="post-title">
                                <a class="link"
                                    href="{{ route('frontend.blogs', [$blog->blogCategory->slug, $blog->slug]) }}">
                                    {{ $blog->title }}
                                </a>
                            </h3>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    <div class="signle-side-bar tmponhover">
        <div class="header">
            <h3 class="title">About Me</h3>
        </div>
        <div class="body">
            <div class="about-me-details">
                <div class="about-me-details-head">
                    <div class="about-me-img">
                        <img src="{{ asset(\App\Helpers\Helper::getAdminDetails()->profile->profile_image ?? 'assets/img/default/user.png') }}" alt="about-me-user-img">
                    </div>
                    <div class="about-me-right-content">
                        <h3 class="title">{{ \App\Helpers\Helper::getAdminDetails()->name }}</h3>
                        <p class="para">{{ \App\Helpers\Helper::getAdminDetails()->profile->designation->name ?? 'Developer' }} </p>
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
                </div>
                <p class="about-me-para">{{\App\Helpers\Helper::getAdminDetails()->profile->bio}}</p>
            </div>
        </div>
    </div>
    <div class="signle-side-bar tmponhover">
        <div class="header">
            <h3 class="title">Tags</h3>
        </div>
        <div class="body">
            <div class="tags-wrapper">
                @if (count(\App\Helpers\Helper::topTags()) > 0)
                    @foreach (\App\Helpers\Helper::topTags() as $tag)
                        <a href="{{route('frontend.blogs.tags', $tag)}}" class="tag-link {{ isset($blogTag) && $blogTag == $tag ? 'active_tag' : ''}}">{{$tag}}</a>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>

<style>
    .active_category .post-title, .active_category .post-num, .active_category i{
        color: #ff014f !important;
    }
    .active_tag{
        background-color: #ff014f !important;
    }
    .about-me-img img{
        object-fit: cover;
        border-radius: 50%;
    }
</style>
