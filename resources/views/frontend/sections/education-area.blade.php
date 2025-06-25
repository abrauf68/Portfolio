<section class="education-experience tmp-section-gapTop">
    <div class="container">
        <div class="section-head mb--50">
            <div class="section-sub-title center-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                <span class="subtitle">Education & Experience</span>
            </div>
            <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">Empowering Creativity
                <br> through
            </h2>
            <p class="description section-sm tmp-scroll-trigger tmp-fade-in animation-order-3">
                I am currently pursuing a Bachelor of Science in Computer Science (BSCS), with a focus on software
                development, database systems, and emerging technologies.
            </p>
        </div>
        <h2 class="custom-title mb-32 tmp-scroll-trigger tmp-fade-in animation-order-1">Education <span><img
                    src="{{ asset('frontAssets/images/custom-line/custom-line.png') }}" alt="custom-line"></span>
        </h2>
        <div class="row g-5">
            @if (count(\App\Helpers\Helper::getEducations()) > 0)
                @foreach (\App\Helpers\Helper::getEducations() as $index => $education)
                    <div class="col-lg-6 col-sm-6">
                        <div class="education-experience-card tmponhover tmp-scroll-trigger tmp-fade-in animation-order-{{ $index + 1 }}">
                            <h4 class="edu-sub-title">{{ $education->course_name }}</h4>
                            <h2 class="edu-title">{{ $education->from_date }} - {{ $education->to_date }}</h2>
                            <p class="edu-para">{{ $education->description }}</p>
                            <small class="d-block mt-1 text-muted">{{ $education->institute_name }}</small>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="experiences-wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <div class="experiences-wrap-left-content">
                        <h2 class="custom-title mb-32 tmp-scroll-trigger tmp-fade-in animation-order-1">Experiences
                            <span><img src="{{ asset('frontAssets/images/custom-line/custom-line.png') }}"
                                    alt="custom-line"></span>
                        </h2>

                        @if (count(\App\Helpers\Helper::getExperiences()) > 0)
                            @foreach (\App\Helpers\Helper::getExperiences() as $index => $experience)
                            <div class="experience-content tmp-scroll-trigger tmp-fade-in animation-order-{{ $index + 1 }}">
                                <p class="ex-subtitle">experience</p>
                                <h2 class="ex-name">
                                    <a href="{{ $experience->company_url }}" target="_blank">{{ $experience->company_name }} ({{ $experience->from_date }} - {{ $experience->to_date }})</a>
                                </h2>
                                <h3 class="ex-title">{{ $experience->role }}</h3>
                                <p class="ex-para">{{ $experience->description }}</p>
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="experiences-wrap-right-content">
                        <img class="tmp-scroll-trigger tmp-zoom-in animation-order-1"
                            src="{{ asset('frontAssets/images/experiences/rauf-experience-img.png') }}" alt="expert-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
