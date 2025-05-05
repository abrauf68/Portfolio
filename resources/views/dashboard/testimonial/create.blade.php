@extends('layouts.master')

@section('title', __('Create Testimonial'))

@section('css')
@endsection


@section('breadcrumb-items')
    <li class="breadcrumb-item"><a href="{{ route('dashboard.testimonials.index') }}">{{ __('Testimonials') }}</a></li>
    <li class="breadcrumb-item active">{{ __('Create') }}</li>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-6">
            <!-- Account -->
            <div class="card-body pt-4">
                <form method="POST" action="{{ route('dashboard.testimonials.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row p-5">
                        <h3>{{ __('Add Testimonial') }}</h3>
                        <div class="mb-4 col-md-6">
                            <label for="name" class="form-label">{{ __('Name') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" id="name"
                                name="name" required placeholder="{{ __('Enter name') }}" autofocus value="{{old('name')}}"/>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="designation" class="form-label">{{ __('Designation') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('designation') is-invalid @enderror" type="text" id="designation"
                                name="designation" required placeholder="{{ __('Enter designation') }}"  value="{{old('designation')}}"/>
                            @error('designation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="image" class="form-label">{{ __('Image') }} <span
                                class="text-danger">*</span></label>
                            <input class="form-control @error('image') is-invalid @enderror" type="file"
                                id="image" name="image" accept="image/*" required/>
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="review_count" class="form-label">{{ __('Review Count') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('review_count') is-invalid @enderror" type="number" id="review_count"
                                name="review_count" required placeholder="{{ __('Enter review count') }}"  value="{{old('review_count')}}"/>
                            @error('review_count')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-12">
                            <label for="review" class="form-label">{{ __('Review') }}</label><span
                                class="text-danger">*</span>
                            <textarea class="form-control @error('review') is-invalid @enderror" id="review" name="review"
                                placeholder="{{ __('Enter review') }}" cols="30" rows="5" required>{{ old('review') }}</textarea>
                            @error('review')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-3">{{ __('Add Testimonial') }}</button>
                    </div>
                </form>
            </div>
            <!-- /Account -->
        </div>
    </div>
@endsection

@section('script')
    <!-- Page JS -->
    <script>
        $(document).ready(function() {
            //
        });
    </script>


@endsection
