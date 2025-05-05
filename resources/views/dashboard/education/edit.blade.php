@extends('layouts.master')

@section('title', __('Edit Education'))

@section('css')
    <link rel="stylesheet" href="{{ asset('frontAssets/css/vendor/fontawesome.css') }}">
@endsection


@section('breadcrumb-items')
    <li class="breadcrumb-item"><a href="{{ route('dashboard.educations.index') }}">{{ __('Educations') }}</a></li>
    <li class="breadcrumb-item active">{{ __('Edit') }}</li>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-6">
            <!-- Account -->
            <div class="card-body pt-4">
                <form method="POST" action="{{ route('dashboard.educations.update', $education->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row p-5">
                        <h3>{{ __('Edit Education') }}</h3>
                        <div class="mb-4 col-md-6">
                            <label for="institute_name" class="form-label">{{ __('Institute Name') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('institute_name') is-invalid @enderror" type="text" id="institute_name"
                                name="institute_name" required placeholder="{{ __('Enter institute name') }}" autofocus
                                value="{{ old('institute_name', $education->institute_name) }}" />
                            @error('institute_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="course_name" class="form-label">{{ __('Course Name') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('course_name') is-invalid @enderror" type="text" id="course_name"
                                name="course_name" required placeholder="{{ __('Enter course name') }}"
                                value="{{ old('course_name', $education->course_name) }}" />
                            @error('course_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="from_date" class="form-label">{{ __('From Year') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('from_date') is-invalid @enderror" type="text" id="from_date"
                                name="from_date" required placeholder="{{ __('Enter from year') }}"
                                value="{{ old('from_date', $education->from_date) }}" />
                            @error('from_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="to_date" class="form-label">{{ __('To Year') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('to_date') is-invalid @enderror" type="text" id="to_date"
                                name="to_date" required placeholder="{{ __('Enter to year') }}"
                                value="{{ old('to_date', $education->to_date) }}" />
                            @error('to_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-12">
                            <label for="description" class="form-label">{{ __('Description') }}</label><span
                                class="text-danger">*</span>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                placeholder="{{ __('Enter education description') }}" cols="30" rows="5" required>{{ old('description', $education->description) }}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-3">{{ __('Update Education') }}</button>
                    </div>
                </form>
            </div>
            <!-- /Account -->
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            //
        });
    </script>


@endsection
