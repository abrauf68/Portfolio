@extends('layouts.master')

@section('title', __('Edit Skill'))

@section('css')
    <link rel="stylesheet" href="{{ asset('frontAssets/css/vendor/fontawesome.css') }}">
@endsection


@section('breadcrumb-items')
    <li class="breadcrumb-item"><a href="{{ route('dashboard.skills.index') }}">{{ __('Skills') }}</a></li>
    <li class="breadcrumb-item active">{{ __('Edit') }}</li>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-6">
            <!-- Account -->
            <div class="card-body pt-4">
                <form method="POST" action="{{ route('dashboard.skills.update', $skill->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row p-5">
                        <h3>{{ __('Edit Skill') }}</h3>
                        <div class="mb-4 col-md-6">
                            <label for="name" class="form-label">{{ __('Name') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" id="name"
                                name="name" required placeholder="{{ __('Enter skill name') }}" autofocus
                                value="{{ old('name', $skill->name) }}" />
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="slug" class="form-label">{{ __('Slug') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('slug') is-invalid @enderror" type="text" id="slug"
                                name="slug" required placeholder="{{ __('Enter skill slug') }}"
                                value="{{ old('slug', $skill->slug) }}" />
                            @error('slug')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-4">
                            <label for="skill_type" class="form-label">{{ __('Skill Type') }}</label><span
                                class="text-danger">*</span>
                            <select id="skill_type" name="skill_type" class="select2 form-select @error('skill_type') is-invalid @enderror" required>
                                <option value="" selected disabled>{{ __('Select Type') }}</option>
                                <option value="frontend"{{ old('skill_type', $skill->skill_type) == 'frontend' ? 'selected' : '' }}>{{__('Frontend')}}</option>
                                <option value="backend"{{ old('skill_type', $skill->skill_type) == 'backend' ? 'selected' : '' }}>{{__('Backend')}}</option>
                            </select>
                            @error('skill_type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-4">
                            <label for="percentage" class="form-label">{{ __('Skill Percentage') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('percentage') is-invalid @enderror" type="number" min="0" max="100" id="percentage"
                                name="percentage" required placeholder="{{ __('Enter skill percentage') }}"
                                value="{{ old('percentage', $skill->percentage) }}" />
                            @error('percentage')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-4">
                            <label for="is_featured" class="form-label">{{ __('Featured Skill?') }}</label>
                            <div class="form-check">
                                <input class="form-check-input @error('is_featured') is-invalid @enderror" type="checkbox"
                                    name="is_featured" id="defaultCheck3" {{old('is_featured', $skill->is_featured) ? 'checked' : ''}}>
                                <label class="form-check-label" for="defaultCheck3"> Featured </label>
                            </div>
                            @error('is_featured')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-12">
                            <label for="description" class="form-label">{{ __('Description') }}</label><span
                                class="text-danger">*</span>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                placeholder="{{ __('Enter skill description') }}" cols="30" rows="5" required>{{ old('description', $skill->description) }}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        @php
                            $selectedIcon = old('icon', $skill->icon ?? null);
                        @endphp
                        <div class="mb-4 col-md-12">
                            <label for="icon" class="form-label">{{ __('Choose an Icon') }}</label><span
                                class="text-danger">*</span>
                            <div class="d-flex flex-wrap gap-3">
                                @php
                                    $icons = [
                                        'fa-code',
                                        'fa-building-columns',
                                        'fa-laptop-code',
                                        'fa-database',
                                        'fa-network-wired',
                                        'fa-server',
                                        'fa-project-diagram',
                                        'fa-bug',
                                        'fa-cogs',
                                        'fa-cloud',
                                        'fa-sitemap',
                                        'fa-robot',
                                        'fa-shield-halved',
                                        'fa-gears',
                                        'fa-microchip',
                                        'fa-lightbulb',
                                        'fa-globe',
                                        'fa-sliders',
                                    ];
                                @endphp

                                @foreach ($icons as $key => $icon)
                                    @php
                                        $isSelected = $selectedIcon === $icon;
                                    @endphp
                                    <div class="form-check text-center">
                                        <input class="form-check-input d-none" type="radio" name="icon"
                                            id="icon{{ $key }}" value="{{ $icon }}" required {{ $isSelected ? 'checked' : '' }}>
                                        <label class="btn btn-outline-secondary" for="icon{{ $key }}">
                                            <i class="fa-light {{ $icon }} fa-2x"></i>
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                            @error('icon')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-3">{{ __('Update Skill') }}</button>
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
            // Generate slug from title
            $('#name').on('keyup change', function() {
                let name = $(this).val();
                let slug = name.toLowerCase()
                    .trim()
                    .replace(/[^a-z0-9\s-]/g, '')
                    .replace(/\s+/g, '-')
                    .replace(/-+/g, '-');
                $('#slug').val(slug);
            });

            // Highlight the selected icon on page load
            $('input[name="icon"]').each(function() {
                if ($(this).is(':checked')) {
                    const label = $(`label[for="${this.id}"]`);
                    label.removeClass('btn-outline-secondary').addClass('btn-primary');
                }
            });

            // Update icon styles when selection changes
            $('input[name="icon"]').on('change', function() {
                $('label[for^="icon"]').removeClass('btn-primary').addClass('btn-outline-secondary');
                const selectedLabel = $(`label[for="${this.id}"]`);
                selectedLabel.removeClass('btn-outline-secondary').addClass('btn-primary');
            });
        });
    </script>


@endsection
