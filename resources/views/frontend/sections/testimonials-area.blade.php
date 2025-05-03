<section class="testimonial tmp-section-gapTop">
    <div class="testimonial-wrapper">
        <div class="container">
            <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper">
                    @if (count(\App\Helpers\Helper::getTestimonials()) > 0)
                        @foreach (\App\Helpers\Helper::getTestimonials() as $index => $testimonial)
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="card-content-wrap">
                                        <h2 class="text-doc">{{ $testimonial->review }}</h2>
                                        <h3 class="card-title">{{ $testimonial->name }}</h3>
                                        <p class="card-para">{{ $testimonial->designation }}</p>
                                        <div class="testimonital-icon">
                                            <img src="{{ asset('frontAssets/images/testimonial/testimonial-icon.svg') }}"
                                                alt="testimonial-icon">
                                        </div>
                                    </div>
                                    <div class="testimonial-card-img">
                                        <img class="tmp-scroll-trigger tmp-zoom-in animation-order-1"
                                            src="{{ asset($testimonial->image) }}"
                                            alt="bg-image">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    {{-- <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="card-content-wrap">
                                <h2 class="text-doc">Working with themespark was an absolute pleasure! They understood
                                    my vision immediately and brought it to life even better than I’d imagined.</h2>
                                <h3 class="card-title">Cameron Williamson</h3>
                                <p class="card-para">Ui/Ux Designer</p>
                                <div class="testimonital-icon">
                                    <img src="{{ asset('frontAssets/images/testimonial/testimonial-icon.svg') }}"
                                        alt="testimonial-icon">
                                </div>
                            </div>
                            <div class="testimonial-card-img">
                                <img class="tmp-scroll-trigger tmp-zoom-in animation-order-1"
                                    src="{{ asset('frontAssets/images/testimonial/bg-image-1png.png') }}"
                                    alt="bg-image">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="card-content-wrap">
                                <h2 class="text-doc">ThemesPark is incredibly talented and detail-oriented. They took
                                    the time to understand my brand and created something truly unique</h2>
                                <h3 class="card-title">Cameron Williamson</h3>
                                <p class="card-para">Ui/Ux Designer</p>
                                <div class="testimonital-icon">
                                    <img src="{{ asset('frontAssets/images/testimonial/testimonial-icon.svg') }}"
                                        alt="testimonial-icon">
                                </div>
                            </div>
                            <div class="testimonial-card-img">
                                <img class="tmp-scroll-trigger tmp-zoom-in animation-order-2"
                                    src="{{ asset('frontAssets/images/testimonial/bg-image-2.png') }}" alt="bg-image">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="card-content-wrap">
                                <h2 class="text-doc">A personal portfolio is a curated collection of an individual's
                                    professional work, showcasing their skills, experience, and achievements</h2>
                                <h3 class="card-title">Cameron Williamson</h3>
                                <p class="card-para">Ui/Ux Designer</p>
                                <div class="testimonital-icon">
                                    <img src="{{ asset('frontAssets/images/testimonial/testimonial-icon.svg') }}"
                                        alt="testimonial-icon">
                                </div>
                            </div>
                            <div class="testimonial-card-img">
                                <img class="tmp-scroll-trigger tmp-zoom-in animation-order-3"
                                    src="{{ asset('frontAssets/images/testimonial/bg-image-1png.png') }}"
                                    alt="bg-image">
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <!-- </div> -->
            <div class="testimonial-btn-next-prev">
                <div class="swiper-button-next"><i class="fa-solid fa-arrow-right"></i></div>
                <div class="swiper-button-prev"><i class="fa-solid fa-arrow-left"></i></div>
            </div>
        </div>
    </div>
</section>
