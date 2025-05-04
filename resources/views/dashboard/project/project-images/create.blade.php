@extends('layouts.master')

@section('title', __('Create Project Image'))

@section('css')
@endsection


@section('breadcrumb-items')
    <li class="breadcrumb-item"><a href="{{ route('dashboard.projects.index') }}">{{ __('Projects') }}</a></li>
    <li class="breadcrumb-item"><a href="{{ route('dashboard.projects.project-images.show', $project->id) }}">{{ __('Project Images') }}</a></li>
    <li class="breadcrumb-item active">{{ __('Create') }}</li>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-6">
            <!-- Account -->
            <div class="card-body pt-4">
                <form method="POST" action="{{ route('dashboard.projects.project-images.store', $project->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row p-5">
                        <h3>{{ __('Add New Project Image') }}</h3>
                        <div class="mb-4 col-md-12">
                            <label for="image" class="form-label">{{ __('Image') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('image') is-invalid @enderror" type="file"
                                id="image" name="image[]" required multiple accept="image/*" />
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-3">{{ __('Add Project Image') }}</button>
                    </div>
                </form>
            </div>
            <!-- /Account -->
        </div>
    </div>
@endsection

@section('script')
@endsection
