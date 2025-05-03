<!-- Tpm Service Area Start -->
<section class="service-area tmp-section-gap">
    <div class="container">
        <div class="row justify-content-center">
            @if (count(\App\Helpers\Helper::getFeaturedServices()) > 0)
                @foreach (\App\Helpers\Helper::getFeaturedServices() as $service)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="service-card-v1 tmp-scroll-trigger tmp-fade-in animation-order-1 tmp-link-animation">
                            <div class="service-card-icon">
                                <i class="fa-light {{ $service->icon }}"></i>
                            </div>
                            <h4 class="service-title"><a href="{{ route('frontend.services', $service->slug) }}">{{ $service->name }}</a></h4>
                            <p class="service-para">{{ $service->total_projects }} Projects</p>
                        </div>
                    </div>
                @endforeach
            @endif
            {{-- <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="service-card-v1 tmp-scroll-trigger tmp-fade-in animation-order-2 tmp-link-animation">
                    <div class="service-card-icon">
                        <i class="fa-light fa-bezier-curve"></i>
                    </div>
                    <h4 class="service-title"><a href="service-details.html">Ui/Ux Design</a></h4>
                    <p class="service-para">241 Projects</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="service-card-v1 tmp-scroll-trigger tmp-fade-in animation-order-3 tmp-link-animation">
                    <div class="service-card-icon">
                        <i class="fa-light fa-lightbulb"></i>
                    </div>
                    <h4 class="service-title"><a href="service-details.html">Web Research</a></h4>
                    <p class="service-para">240 Projects</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="service-card-v1 tmp-scroll-trigger tmp-fade-in animation-order-4 tmp-link-animation">
                    <div class="service-card-icon">
                        <i class="fa-light fa-envelope"></i>
                    </div>
                    <h4 class="service-title"><a href="service-details.html">Marketing</a></h4>
                    <p class="service-para">331 Prodect</p>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<!-- Tpm Service Area End -->
