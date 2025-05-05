@extends('layouts.master')

@section('title', __('Edit Supported Company'))

@section('css')
@endsection


@section('breadcrumb-items')
    <li class="breadcrumb-item"><a href="{{ route('dashboard.supported-companies.index') }}">{{ __('Supported Companies') }}</a></li>
    <li class="breadcrumb-item active">{{ __('Edit') }}</li>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-6">
            <!-- Account -->
            <div class="card-body pt-4">
                <form method="POST" action="{{ route('dashboard.supported-companies.update', $supportedCompany->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row p-5">
                        <h3>{{ __('Edit Supported Company') }}</h3>
                        <div class="mb-4 col-md-6">
                            <label for="name" class="form-label">{{ __('Name') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" id="name"
                                name="name" required placeholder="{{ __('Enter name') }}" autofocus value="{{old('name', $supportedCompany->name)}}"/>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="url" class="form-label">{{ __('URL') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('url') is-invalid @enderror" type="url" id="url"
                                name="url" required placeholder="{{ __('Enter url') }}"  value="{{old('url', $supportedCompany->url)}}"/>
                            @error('url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-12">
                            <label for="logo" class="form-label">{{ __('Logo') }}</label>
                            <input class="form-control @error('logo') is-invalid @enderror" type="file"
                                id="logo" name="logo" accept="image/*" />
                            @error('logo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            @if($supportedCompany->logo)
                                <img src="{{ asset($supportedCompany->logo) }}" alt="Logo" class="mt-2" width="120">
                            @endif
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-3">{{ __('Update Supported Company') }}</button>
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
