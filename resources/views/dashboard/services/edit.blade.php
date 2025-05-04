@extends('layouts.master')

@section('title', __('Edit Service'))

@section('css')
    <link rel="stylesheet" href="{{ asset('frontAssets/css/vendor/fontawesome.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
@endsection


@section('breadcrumb-items')
    <li class="breadcrumb-item"><a href="{{ route('dashboard.company-services.index') }}">{{ __('Services') }}</a></li>
    <li class="breadcrumb-item active">{{ __('Edit') }}</li>
@endsection
{{-- @dd($service) --}}
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-6">
            <!-- Account -->
            <div class="card-body pt-4">
                <form method="POST" action="{{ route('dashboard.company-services.update', $service->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row p-5">
                        <h3>{{ __('Edit Service') }}</h3>
                        <div class="mb-4 col-md-6">
                            <label for="name" class="form-label">{{ __('Service Name') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" id="name"
                                name="name" required placeholder="{{ __('Enter service name') }}" autofocus value="{{old('name', $service->name)}}"/>
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
                                name="slug" required placeholder="{{ __('Enter service slug') }}"  value="{{old('slug', $service->slug)}}"/>
                            @error('slug')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-12">
                            <label for="meta_title" class="form-label">{{ __('Meta Title') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('meta_title') is-invalid @enderror" type="text"
                                id="meta_title" name="meta_title" required
                                placeholder="{{ __('Enter service meta title') }}"  value="{{old('meta_title', $service->meta_title)}}"/>
                            @error('meta_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-12">
                            <label for="meta_description" class="form-label">{{ __('Meta Description') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('meta_description') is-invalid @enderror" type="text"
                                id="meta_description" name="meta_description" required
                                placeholder="{{ __('Enter service meta description') }}"  value="{{old('meta_description', $service->meta_description)}}"/>
                            @error('meta_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-12">
                            <label for="details" class="form-label">{{ __('Details') }}</label><span
                                class="text-danger">*</span>
                            <textarea class="form-control @error('details') is-invalid @enderror" id="details" name="details"
                                placeholder="{{ __('Enter service meta description') }}" cols="30" rows="10">
                                {{old('details', $service->details)}}
                            </textarea>
                            @error('details')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="meta_image" class="form-label">{{ __('Meta Image') }}</label>
                            <input class="form-control @error('meta_image') is-invalid @enderror" type="file"
                                id="meta_image" name="meta_image" accept="image/*" />
                            @error('meta_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            @if($service->meta_image)
                                <img src="{{ asset($service->meta_image) }}" alt="Meta Image" class="mt-2" width="120">
                            @endif
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="main_image" class="form-label">{{ __('Main Image') }}</label>
                            <input class="form-control @error('main_image') is-invalid @enderror" type="file"
                                id="main_image" name="main_image" accept="image/*" />
                            @error('main_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            @if($service->main_image)
                                <img src="{{ asset($service->main_image) }}" alt="Main Image" class="mt-2" width="120">
                            @endif
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="total_projects" class="form-label">{{ __('Total Projects') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('total_projects') is-invalid @enderror" type="number"
                                id="total_projects" name="total_projects" required
                                placeholder="{{ __('Enter no of projects') }}"  value="{{old('total_projects',$service->total_projects)}}"/>
                            @error('total_projects')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="is_featured" class="form-label">{{ __('Featured Project?') }}</label>
                            <div class="form-check">
                                <input class="form-check-input @error('is_featured') is-invalid @enderror" type="checkbox"
                                    name="is_featured" id="defaultCheck3" {{old('is_featured',$service->is_featured == '1') ? 'checked' : ''}}>
                                <label class="form-check-label" for="defaultCheck3"> Featured </label>
                            </div>
                            @error('is_featured')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        @php
                            $selectedIcon = old('icon', $service->icon ?? null);
                        @endphp
                        <div class="mb-4 col-md-12">
                            <label for="icon" class="form-label">{{ __('Choose an Icon') }}</label><span
                                class="text-danger">*</span>
                            <div class="d-flex flex-wrap gap-3">
                                @php
                                    $icons = [
                                        'fa-cogs',
                                        'fa-laptop-code',
                                        'fa-paint-brush',
                                        'fa-chart-line',
                                        'fa-bezier-curve',
                                        'fa-shield',
                                        'fa-database',
                                        'fa-network-wired',
                                        'fa-cloud',
                                        'fa-code',
                                        'fa-robot',
                                        'fa-mobile-screen-button',
                                        'fa-lightbulb',
                                        'fa-envelope',
                                        'fa-pen-ruler',
                                        'fa-pen-nib',
                                        'fa-globe',
                                        'fa-magnifying-glass',
                                    ];
                                @endphp

                                @foreach ($icons as $key => $icon)
                                    @php
                                        $isSelected = $selectedIcon === $icon;
                                    @endphp
                                    <div class="form-check text-center">
                                        <input class="form-check-input d-none icon-radio" type="radio" name="icon"
                                            id="icon{{ $key }}" value="{{ $icon }}" required {{ $isSelected ? 'checked' : '' }}>
                                        <label class="btn {{ $isSelected ? 'btn-primary' : 'btn-outline-secondary' }} icon-label" for="icon{{ $key }}">
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
                        <button type="submit" class="btn btn-primary me-3">{{ __('Update Service') }}</button>
                    </div>
                </form>
            </div>
            <!-- /Account -->
        </div>
    </div>
@endsection

@section('script')
    <!-- Vendors JS -->
    <script src="https://cdn.jsdelivr.net/npm/tinymce@6.8.3/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Page JS -->
    <script>
        $(document).ready(function() {
            tinymce.init({
                selector: '#details',
                height: 500,
                plugins: 'advlist autolink lists link image charmap preview anchor searchreplace visualblocks code fullscreen insertdatetime media table code help wordcount',
                toolbar: `undo redo | formatselect | fontselect fontsizeselect |
                          bold italic underline strikethrough forecolor backcolor |
                          alignleft aligncenter alignright alignjustify |
                          bullist numlist outdent indent | link image media table |
                          removeformat | code fullscreen`,
                menubar: 'file edit view insert format tools table help',
                branding: false,
                content_style: "body { font-family:Helvetica,Arial,sans-serif; font-size:14px }"
            });

            // Generate slug from name
            $('#name').on('keyup change', function() {
                let name = $(this).val();
                let slug = name.toLowerCase()
                    .trim()
                    .replace(/[^a-z0-9\s-]/g, '')
                    .replace(/\s+/g, '-')
                    .replace(/-+/g, '-');
                $('#slug').val(slug);
            });

            // Handle form submission manually to validate TinyMCE
            $('form').on('submit', function(e) {
                tinymce.triggerSave(); // sync content to <textarea>
                const $details = $('#details');
                const detailsContent = $details.val().trim();

                // Remove previous validation state
                $details.removeClass('is-invalid');
                $details.next('.invalid-feedback').remove();

                if (!detailsContent) {
                    e.preventDefault();

                    // Add Bootstrap invalid class
                    $details.addClass('is-invalid');

                    // Append validation message
                    $details.after(`
                        <div class="invalid-feedback">
                            {{ __('The details field is required.') }}
                        </div>
                    `);

                    // Optional: focus editor
                    tinymce.get('details').focus();
                }
            });

        });

        document.querySelectorAll('input[name="icon"]').forEach(input => {
            input.addEventListener('change', function() {
                document.querySelectorAll('label[for^="icon"]').forEach(label => {
                    label.classList.remove('btn-primary');
                    label.classList.add('btn-outline-secondary');
                });
                const selectedLabel = document.querySelector(`label[for="${this.id}"]`);
                selectedLabel.classList.remove('btn-outline-secondary');
                selectedLabel.classList.add('btn-primary');
            });
        });
    </script>


@endsection
