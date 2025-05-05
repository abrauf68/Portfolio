@extends('layouts.master')

@section('title', __('Blogs'))

@section('css')
    <style>
        .edit-loader {
            width: 100%;
        }

        .edit-loader .sk-chase {
            display: block;
            margin: 0 auto;
        }

        .modal-card {
            background: transparent !important;
            border: none !important;
            box-shadow: none !important;
        }
    </style>
@endsection


@section('breadcrumb-items')
    <li class="breadcrumb-item active">{{ __('Blogs') }}</li>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Blogs List Table -->
        <div class="card">
            <div class="card-header">
                @canany(['create blog'])
                    <a href="{{route('dashboard.blogs.create')}}" class="add-new btn btn-primary waves-effect waves-light">
                        <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span
                            class="d-none d-sm-inline-block">{{ __('Add New Blog') }}</span>
                    </a>
                @endcan
            </div>
            <div class="card-datatable table-responsive">
                <table class="datatables-users table border-top custom-datatables">
                    <thead>
                        <tr>
                            <th>{{ __('Sr.') }}</th>
                            <th>{{ __('Title') }}</th>
                            <th>{{ __('Meta Image') }}</th>
                            <th>{{ __('Category') }}</th>
                            <th>{{ __('Created Date') }}</th>
                            <th>{{ __('Status') }}</th>
                            @canany(['delete blog', 'update blog'])<th>{{ __('Action') }}</th>@endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $index => $blog)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $blog->title }}</td>
                                <td>
                                    @if (isset($blog->meta_image))
                                        <img src="{{ asset($blog->meta_image) }}" alt="{{ $blog->name }}"
                                            height="35px" width="35px">
                                    @else
                                        {{ __('No Meta Image') }}
                                    @endif
                                </td>
                                <td>{{ $blog->blogCategory->name }}</td>
                                <td>{{ $blog->created_at->format('Y-m-d') }}</td>
                                <td>
                                    <span
                                        class="badge me-4 bg-label-{{ $blog->is_active == 'active' ? 'success' : 'danger' }}">{{ ucfirst($blog->is_active) }}</span>
                                </td>
                                @canany(['delete blog', 'update blog'])
                                    <td class="d-flex">
                                        @canany(['delete blog'])
                                            <form action="{{ route('dashboard.blogs.destroy', $blog->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <a href="#" type="submit"
                                                    class="btn btn-icon btn-text-danger waves-effect waves-light rounded-pill delete-record delete_confirmation"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ __('Delete Blog') }}">
                                                    <i class="ti ti-trash ti-md"></i>
                                                </a>
                                            </form>
                                        @endcan
                                        @canany(['update blog'])
                                            <span class="text-nowrap">
                                                <a href="{{ route('dashboard.blogs.edit', $blog->id) }}"
                                                    class="btn btn-icon btn-text-primary waves-effect waves-light rounded-pill me-1"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ __('Edit Blog') }}">
                                                    <i class="ti ti-edit ti-md"></i>
                                                </a>
                                            </span>
                                            <span class="text-nowrap">
                                                <a href="{{ route('dashboard.blogs.status.update', $blog->id) }}"
                                                    class="btn btn-icon btn-text-primary waves-effect waves-light rounded-pill me-1"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ $blog->is_active == 'active' ? __('Deactivate Blog') : __('Activate Blog') }}">
                                                    @if ($blog->is_active == 'active')
                                                        <i class="ti ti-toggle-right ti-md text-success"></i>
                                                    @else
                                                        <i class="ti ti-toggle-left ti-md text-danger"></i>
                                                    @endif
                                                </a>
                                            </span>
                                        @endcan
                                    </td>
                                @endcan
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    {{-- <script src="{{asset('assets/js/app-user-list.js')}}"></script> --}}
    <script>
        $(document).ready(function() {
            //
        });
    </script>
@endsection
