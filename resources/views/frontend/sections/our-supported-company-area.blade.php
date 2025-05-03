<div class="our-supported-company-area tmp-section-gapTop">
    <div class="container">
        <div class="row justify-content-center">
            @if (count(\App\Helpers\Helper::getSuppertedCompanies()) > 0)
                @foreach (\App\Helpers\Helper::getSuppertedCompanies() as $company)
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                        <div class="support-company-logo tmp-scroll-trigger tmp-fade-in animation-order-1">
                            <a href="{{ $company->url }}" target="_blank">
                                <img src="{{ asset($company->logo) }}"
                                    alt="{{ $company->name }}">
                            </a>
                        </div>
                    </div>
                @endforeach
            @endif
            {{-- <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                <div class="support-company-logo tmp-scroll-trigger tmp-fade-in animation-order-2">
                    <img src="{{ asset('frontAssets/images/our-supported-company/company-logo-2.svg') }}"
                        alt="Reeni - Personal Portfolio HTML Template">
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                <div class="support-company-logo tmp-scroll-trigger tmp-fade-in animation-order-3">
                    <img src="{{ asset('frontAssets/images/our-supported-company/company-logo-3.svg') }}"
                        alt="Reeni - Personal Portfolio HTML Template">
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                <div class="support-company-logo tmp-scroll-trigger tmp-fade-in animation-order-4">
                    <img src="{{ asset('frontAssets/images/our-supported-company/company-logo-4.svg') }}"
                        alt="Reeni - Personal Portfolio HTML Template">
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                <div class="support-company-logo tmp-scroll-trigger tmp-fade-in animation-order-5">
                    <img src="{{ asset('frontAssets/images/our-supported-company/company-logo-5.svg') }}"
                        alt="Reeni - Personal Portfolio HTML Template">
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                <div class="support-company-logo tmp-scroll-trigger tmp-fade-in animation-order-6">
                    <img src="{{ asset('frontAssets/images/our-supported-company/company-logo-6.svg') }}"
                        alt="Reeni - Personal Portfolio HTML Template">
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                <div class="support-company-logo tmp-scroll-trigger tmp-fade-in animation-order-7">
                    <img src="{{ asset('frontAssets/images/our-supported-company/company-logo-7.svg') }}"
                        alt="Reeni - Personal Portfolio HTML Template">
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                <div class="support-company-logo tmp-scroll-trigger tmp-fade-in animation-order-8">
                    <img src="{{ asset('frontAssets/images/our-supported-company/company-logo-8.svg') }}"
                        alt="Reeni - Personal Portfolio HTML Template">
                </div>
            </div> --}}
        </div>
    </div>
</div>
