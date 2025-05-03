<div class="tmp-skill-area tmp-section-gapTop">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="progress-wrapper">
                    <div class="content">
                        <h2 class="custom-title mb--30 tmp-scroll-trigger tmp-fade-in animation-order-1">
                            Frontend Skills <span><img src="{{ asset('frontAssets/images/custom-line/custom-line.png') }}"
                                    alt="custom-line"></span>
                        </h2>
                        @php $delay = 0.3; @endphp
                        @if (count(\App\Helpers\Helper::getFrontendSkills()) > 0)
                            @foreach(\App\Helpers\Helper::getFrontendSkills() as $skill)
                                <div class="progress-charts">
                                    <h6 class="heading heading-h6">{{ strtoupper($skill->name) }}</h6>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft"
                                            data-wow-duration="0.5s"
                                            data-wow-delay="{{ $delay }}s"
                                            role="progressbar"
                                            style="width: {{ $skill->percentage }}%; animation-delay: {{ $delay }}s;"
                                            aria-valuenow="{{ $skill->percentage }}"
                                            aria-valuemin="0"
                                            aria-valuemax="100">
                                            <span class="percent-label">{{ $skill->percentage }}%</span>
                                        </div>
                                    </div>
                                </div>
                                @php $delay += 0.1; @endphp
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="progress-wrapper">
                    <div class="content">
                        <h2 class="custom-title mb--30 tmp-scroll-trigger tmp-fade-in animation-order-1">
                            Backend Skills <span><img src="{{ asset('frontAssets/images/custom-line/custom-line.png') }}"
                                    alt="custom-line"></span>
                        </h2>
                        @php $delay = 0.3; @endphp
                        @if (count(\App\Helpers\Helper::getBackendSkills()) > 0)
                            @foreach(\App\Helpers\Helper::getBackendSkills() as $skill)
                                <div class="progress-charts">
                                    <h6 class="heading heading-h6">{{ strtoupper($skill->name) }}</h6>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft"
                                            data-wow-duration="0.5s"
                                            data-wow-delay="{{ $delay }}s"
                                            role="progressbar"
                                            style="width: {{ $skill->percentage }}%; animation-delay: {{ $delay }}s;"
                                            aria-valuenow="{{ $skill->percentage }}"
                                            aria-valuemin="0"
                                            aria-valuemax="100">
                                            <span class="percent-label">{{ $skill->percentage }}%</span>
                                        </div>
                                    </div>
                                </div>
                                @php $delay += 0.1; @endphp
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
