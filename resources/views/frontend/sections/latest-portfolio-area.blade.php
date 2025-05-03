<div class="latest-portfolio-area custom-column-grid tmp-section-gapTop">
    <div class="container">
        <div class="section-head mb--60">
            <div class="section-sub-title center-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                <span class="subtitle">Latest Portfolio</span>
            </div>
            <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">Transforming Ideas into
                <br> Exceptional
            </h2>
            <p class="description section-sm tmp-scroll-trigger tmp-fade-in animation-order-3">Business consulting
                consultants provide expert advice and guida
                businesses to help them improve their performance, efficiency, and organizational</p>
        </div>
        <div class="row">
            @if (count(\App\Helpers\Helper::getFeaturedProjects()) > 0)
                @php $order = 1; @endphp
                @foreach (\App\Helpers\Helper::getFeaturedProjects() as $index => $project)
                    <div class="col-lg-6 col-sm-6">
                        <div
                            class="latest-portfolio-card tmp-hover-link tmp-scroll-trigger tmp-fade-in animation-order-1">
                            <div class="portfoli-card-img">
                                <div class="img-box v2">
                                    <a class="tmp-scroll-trigger tmp-zoom-in animation-order-1"
                                        href="{{ route('frontend.projects', $project->slug) }}">
                                        <img class="w-100"
                                            src="{{ asset($project->main_image) }}"
                                            alt="Thumbnail">
                                    </a>
                                </div>
                            </div>
                            <div class="portfolio-card-content-wrap">
                                <div class="content-left">
                                    <h3 class="portfolio-card-title"><a class="link"
                                            href="{{ route('frontend.projects', $project->slug) }}">{{$project->title}}</a></h3>
                                    <p class="portfoli-card-para">{{$project->technology}}</p>
                                </div>
                                <a href="{{ route('frontend.projects', $project->slug) }}" class="tmp-arrow-icon-btn">
                                    <div class="btn-inner">
                                        <i class="tmp-icon fa-solid fa-arrow-up-right"></i>
                                        <i class="tmp-icon-bottom fa-solid fa-arrow-up-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @php $order++; @endphp
                @endforeach
            @endif
        </div>
    </div>
</div>
