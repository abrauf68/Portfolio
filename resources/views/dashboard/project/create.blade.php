@extends('layouts.master')

@section('title', __('Create Project'))

@section('css')
    <link rel="stylesheet" href="{{ asset('frontAssets/css/vendor/fontawesome.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
@endsection


@section('breadcrumb-items')
    <li class="breadcrumb-item"><a href="{{ route('dashboard.projects.index') }}">{{ __('Projects') }}</a></li>
    <li class="breadcrumb-item active">{{ __('Create') }}</li>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-6">
            <!-- Account -->
            <div class="card-body pt-4">
                <form method="POST" action="{{ route('dashboard.projects.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row p-5">
                        <h3>{{ __('Add New Project') }}</h3>
                        <div class="mb-4 col-md-6">
                            <label for="title" class="form-label">{{ __('Project Title') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('title') is-invalid @enderror" type="text" id="title"
                                name="title" required placeholder="{{ __('Enter project title') }}" autofocus value="{{old('title')}}"/>
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="slug" class="form-label">{{ __('Slug') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('slug') is-invalid @enderror" type="text" id="slug"
                                name="slug" required placeholder="{{ __('Enter service slug') }}"  value="{{old('slug')}}"/>
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
                                placeholder="{{ __('Enter service meta title') }}"  value="{{old('meta_title')}}"/>
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
                                placeholder="{{ __('Enter service meta description') }}"  value="{{old('meta_description')}}"/>
                            @error('meta_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-12">
                            <label for="description" class="form-label">{{ __('Description') }}</label><span
                                class="text-danger">*</span>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                placeholder="{{ __('Enter service meta description') }}" cols="30" rows="10"></textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="meta_image" class="form-label">{{ __('Meta Image') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('meta_image') is-invalid @enderror" type="file"
                                id="meta_image" name="meta_image" required accept="image/*" />
                            @error('meta_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="main_image" class="form-label">{{ __('Main Image') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('main_image') is-invalid @enderror" type="file"
                                id="main_image" name="main_image" required accept="image/*" />
                            @error('main_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-4">
                            <label for="client_name" class="form-label">{{ __('Client Name') }}</label>
                            <input class="form-control @error('client_name') is-invalid @enderror" type="text" id="client_name"
                                name="client_name" placeholder="{{ __('Enter project client name') }}" value="{{old('client_name')}}"/>
                            @error('client_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-4">
                            <label for="industry" class="form-label">{{ __('Industry') }}</label>
                            <input class="form-control @error('industry') is-invalid @enderror" type="text" id="industry"
                                name="industry" placeholder="{{ __('Enter project industry') }}" value="{{old('industry')}}"/>
                            @error('industry')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-4">
                            <label for="technology" class="form-label">{{ __('Technology') }}</label>
                            <input class="form-control @error('technology') is-invalid @enderror" type="text" id="technology"
                                name="technology" placeholder="{{ __('Enter project technology') }}" value="{{old('technology')}}"/>
                            @error('technology')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-4">
                            <label for="project_url" class="form-label">{{ __('Project Url') }}</label>
                            <input class="form-control @error('project_url') is-invalid @enderror" type="url" id="project_url"
                                name="project_url" placeholder="{{ __('Enter project url') }}" value="{{old('project_url')}}"/>
                            @error('project_url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-4">
                            <label for="github_url" class="form-label">{{ __('Github Url') }}</label>
                            <input class="form-control @error('github_url') is-invalid @enderror" type="url" id="github_url"
                                name="github_url" placeholder="{{ __('Enter github url') }}" value="{{old('github_url')}}"/>
                            @error('github_url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-4">
                            <label for="is_featured" class="form-label">{{ __('Featured Project?') }}</label>
                            <div class="form-check">
                                <input class="form-check-input @error('is_featured') is-invalid @enderror" type="checkbox"
                                    name="is_featured" id="defaultCheck3" {{old('is_featured') ? 'checked' : ''}}>
                                <label class="form-check-label" for="defaultCheck3"> Featured </label>
                            </div>
                            @error('is_featured')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="status" class="form-label">{{ __('Status') }}</label><span
                                class="text-danger">*</span>
                            <select id="status" name="status" class="select2 form-select @error('status') is-invalid @enderror">
                                <option value="" selected disabled>{{ __('Select Status') }}</option>
                                <option value="ongoing"{{ old('status') == 'ongoing' ? 'selected' : '' }}>{{__('Ongoing')}}</option>
                                <option value="upcoming"{{ old('status') == 'upcoming' ? 'selected' : '' }}>{{__('Upcoming')}}</option>
                                <option value="completed"{{ old('status') == 'completed' ? 'selected' : '' }}>{{__('Completed')}}</option>
                            </select>
                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="completion_date" class="form-label">{{ __('Completion Date') }}</label>
                            <input class="form-control @error('completion_date') is-invalid @enderror" type="date" id="completion_date"
                                name="completion_date" placeholder="{{ __('Enter project completion date') }}" value="{{old('completion_date')}}" disabled/>
                            @error('completion_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-3">{{ __('Add Project') }}</button>
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
                selector: '#description',
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

            // Generate slug from title
            $('#title').on('keyup change', function() {
                let title = $(this).val();
                let slug = title.toLowerCase()
                    .trim()
                    .replace(/[^a-z0-9\s-]/g, '')
                    .replace(/\s+/g, '-')
                    .replace(/-+/g, '-');
                $('#slug').val(slug);
            });

            // Handle form submission manually to validate TinyMCE
            $('form').on('submit', function(e) {
                tinymce.triggerSave(); // sync content to <textarea>
                const $description = $('#description');
                const descriptionContent = $description.val().trim();

                // Remove previous validation state
                $description.removeClass('is-invalid');
                $description.next('.invalid-feedback').remove();

                if (!descriptionContent) {
                    e.preventDefault();

                    // Add Bootstrap invalid class
                    $description.addClass('is-invalid');

                    // Append validation message
                    $description.after(`
                        <div class="invalid-feedback">
                            {{ __('The description field is required.') }}
                        </div>
                    `);

                    // Optional: focus editor
                    tinymce.get('description').focus();
                }
            });

            function toggleCompletionDate() {
                if ($('#status').val() === 'completed') {
                    $('#completion_date').prop('disabled', false).prop('required', true);
                } else {
                    $('#completion_date').prop('disabled', true).prop('required', false).val('');
                }
            }

            // Initial check on page load
            toggleCompletionDate();

            // When status changes
            $('#status').on('change', function () {
                toggleCompletionDate();
            });

        });
    </script>


@endsection
