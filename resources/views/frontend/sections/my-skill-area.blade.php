<section class="my-skill tmp-section-gapTop">
    <div class="container">
        <div class="section-head text-align-left mb--50">
            <div class="section-sub-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                <span class="subtitle">My Skill</span>
            </div>
            <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">Elevated Designs
                Personalized <br> the best Experiences</h2>
        </div>
        <div class="services-widget v1">
            @if (count(\App\Helpers\Helper::getFeaturedSkills()) > 0)
                @foreach (\App\Helpers\Helper::getFeaturedSkills() as $index => $skill)
                    <div class="service-item current tmp-scroll-trigger tmp-fade-in animation-order-1">
                        <div class="my-skill-card">
                            <div class="card-icon">
                                <i class="fa-light fa-building-columns"></i>
                            </div>
                            <div class="card-title">
                                <h3 class="main-title">{{$skill->name}}</h3>
                            </div>
                            <p class="card-para">{{$skill->description}}</p>
                        </div>
                        <button class="service-link modal-popup"></button>
                    </div>
                @endforeach
            @endif
            <div class="active-bg wow fadeInUp mleave"></div>
        </div>
    </div>
</section>
