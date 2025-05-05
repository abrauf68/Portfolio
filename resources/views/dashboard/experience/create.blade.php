@extends('layouts.master')

@section('title', __('Create Experience'))

@section('css')
    <link rel="stylesheet" href="{{ asset('frontAssets/css/vendor/fontawesome.css') }}">
@endsection


@section('breadcrumb-items')
    <li class="breadcrumb-item"><a href="{{ route('dashboard.experiences.index') }}">{{ __('Experiences') }}</a></li>
    <li class="breadcrumb-item active">{{ __('Create') }}</li>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-6">
            <!-- Account -->
            <div class="card-body pt-4">
                <form method="POST" action="{{ route('dashboard.experiences.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row p-5">
                        <h3>{{ __('Add New Experience') }}</h3>
                        <div class="mb-4 col-md-6">
                            <label for="company_name" class="form-label">{{ __('Company Name') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('company_name') is-invalid @enderror" type="text" id="company_name"
                                name="company_name" required placeholder="{{ __('Enter company name') }}" autofocus
                                value="{{ old('company_name') }}" />
                            @error('company_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="company_url" class="form-label">{{ __('Company Url') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('company_url') is-invalid @enderror" type="url" id="company_url"
                                name="company_url" required placeholder="{{ __('Enter company url') }}"
                                value="{{ old('company_url') }}" />
                            @error('company_url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-4">
                            <label for="role" class="form-label">{{ __('Role') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('role') is-invalid @enderror" type="text" id="role"
                                name="role" required placeholder="{{ __('Enter role') }}"
                                value="{{ old('role') }}" />
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-4">
                            <label for="from_date" class="form-label">{{ __('From Year') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('from_date') is-invalid @enderror" type="text" id="from_date"
                                name="from_date" required placeholder="{{ __('Enter from year') }}"
                                value="{{ old('from_date') }}" />
                            @error('from_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-4">
                            <label for="to_date" class="form-label">{{ __('To Year') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('to_date') is-invalid @enderror" type="text" id="to_date"
                                name="to_date" required placeholder="{{ __('Enter to year') }}"
                                value="{{ old('to_date') }}" />
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
                                placeholder="{{ __('Enter education description') }}" cols="30" rows="5" required>{{ old('description') }}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-3">{{ __('Add Experience') }}</button>
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
