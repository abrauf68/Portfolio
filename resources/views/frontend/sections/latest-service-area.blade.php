<section class="latest-service-area tmp-section-gapTop">
    <div class="container">
        <div class="section-head mb--50">
            <div class="section-sub-title center-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                <span class="subtitle">Latest Service</span>
            </div>
            <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">Inspiring The World One
                <br> Project
            </h2>
            <p class="description section-sm tmp-scroll-trigger tmp-fade-in animation-order-3"> Explore a curated selection of my most impactful and innovative projects. Each showcases expertise in full-stack development, creative problem-solving, and a commitment to building efficient, scalable solutions tailored to real-world business challenges. </p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                @if (count(\App\Helpers\Helper::getFeaturedProjects()) > 0)
                    @php $order = 1; @endphp
                    @foreach (\App\Helpers\Helper::getFeaturedProjects() as $index => $project)
                        <div class="service-card-v2 tmponhover tmp-scroll-trigger tmp-fade-in animation-order-{{ $order }}">
                            <h2 class="service-card-num">
                                <span>{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}.</span>
                                {{ $project->title ?? 'Untitled Project' }}
                            </h2>
                            <p class="service-para">
                                {{ Str::limit($project->meta_description, 160) }}
                            </p>
                        </div>
                        @php $order++; @endphp
                    @endforeach
                @endif
            </div>
            <div class="col-lg-6">
                <div class="service-card-user-image">
                    <img class="tmp-scroll-trigger tmp-zoom-in animation-order-1"
                        src="{{ asset('frontAssets/images/services/latest-services-rauf-image.png') }}" alt="latest-user-image">
                </div>
            </div>
        </div>
    </div>
</section>
