<section class="get-in-touch-area tmp-section-gapTop">
    <div class="container">
        <div class="contact-get-in-touch-wrap">
            <div class="get-in-touch-wrapper tmponhover">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="section-head text-align-left">
                            <div class="section-sub-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                                <span class="subtitle">GET IN TOUCH</span>
                            </div>
                            <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">Elevate
                                your brand with Me </h2>
                            <p class="description tmp-scroll-trigger tmp-fade-in animation-order-3">ished fact that a
                                reader will be
                                distrol acted bioiiy desig
                                ished fact that a reader will acted ished fact that a reader will be distrol
                                acted </p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact-inner">
                            <div class="contact-form">
                                <div id="form-messages" class="error"></div>
                                <form class="tmp-dynamic-form" method="POST" action="{{route('frontend.submit.form')}}">
                                    @csrf
                                    <div class="contact-form-wrapper row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input class="input-field @error('name') is-invalid @enderror" name="name" id="contact-name"
                                                    placeholder="Your Name" type="text" required value="{{ old('name') }}">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input class="input-field @error('phone') is-invalid @enderror" name="phone" id="contact-phone"
                                                    placeholder="Phone Number" type="text" required value="{{ old('phone') }}">
                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input class="input-field @error('email') is-invalid @enderror" id="contact-email" name="email"
                                                    placeholder="Your Email" type="email" required value="{{ old('email') }}">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input class="input-field @error('subject') is-invalid @enderror" type="text" id="subject"
                                                    name="subject" placeholder="Subject" value="{{ old('subject') }}">
                                                @error('subject')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea class="input-field @error('message') is-invalid @enderror" placeholder="Your Message" name="message" id="contact-message" required>
                                                    {{ old('message') }}
                                                </textarea>
                                                @error('message')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="tmp-button-here">
                                                <button class="tmp-btn hover-icon-reverse radius-round w-100"
                                                    name="submit" type="submit" id="submit">
                                                    <span class="icon-reverse-wrapper">
                                                        <span class="btn-text">Appointment Now</span>
                                                        <span class="btn-icon"><i
                                                                class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                                        <span class="btn-icon"><i
                                                                class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
