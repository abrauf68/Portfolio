@extends('layouts.master')

@section('title', __('Counters'))

@section('css')
    <link rel="stylesheet" href="{{ asset('frontAssets/css/vendor/fontawesome.css') }}">
@endsection


@section('breadcrumb-items')
    <li class="breadcrumb-item active">{{ __('Counters') }}</li>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-6">
            <!-- Account -->
            <div class="card-body pt-4">
                <form method="POST" action="{{ route('dashboard.counters.update', $counter->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row p-5">
                        <h3>{{ __('Edit Counters') }}</h3>
                        <div class="mb-4 col-md-4">
                            <label for="years_of_experience" class="form-label">{{ __('Years of Experience') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('years_of_experience') is-invalid @enderror" type="number" id="years_of_experience"
                                name="years_of_experience" required placeholder="{{ __('Enter years of experience') }}"
                                value="{{ old('years_of_experience', $counter->years_of_experience) }}" />
                            @error('years_of_experience')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-4">
                            <label for="total_projects" class="form-label">{{ __('Total Projects') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('total_projects') is-invalid @enderror" type="number" id="total_projects"
                                name="total_projects" required placeholder="{{ __('Enter total projects') }}"
                                value="{{ old('total_projects', $counter->total_projects) }}" />
                            @error('total_projects')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-4">
                            <label for="completed_projects" class="form-label">{{ __('Completed Projects') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('completed_projects') is-invalid @enderror" type="number" id="completed_projects"
                                name="completed_projects" required placeholder="{{ __('Enter completed projects') }}"
                                value="{{ old('completed_projects', $counter->completed_projects) }}" />
                            @error('completed_projects')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="total_clients" class="form-label">{{ __('Total Clients') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('total_clients') is-invalid @enderror" type="number" id="total_clients"
                                name="total_clients" required placeholder="{{ __('Enter total clients') }}"
                                value="{{ old('total_clients', $counter->total_clients) }}" />
                            @error('total_clients')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="client_reviews" class="form-label">{{ __('Total Client Reviews') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('client_reviews') is-invalid @enderror" type="number" id="client_reviews"
                                name="client_reviews" required placeholder="{{ __('Enter total client reviews') }}"
                                value="{{ old('client_reviews', $counter->client_reviews) }}" />
                            @error('client_reviews')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-3">{{ __('Update Counters') }}</button>
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
