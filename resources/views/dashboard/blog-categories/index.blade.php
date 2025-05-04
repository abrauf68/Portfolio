@extends('layouts.master')

@section('title', __('Blog Categories'))

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
    <li class="breadcrumb-item active">{{ __('Blog Categories') }}</li>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Blog Categories List Table -->
        <div class="card">
            <div class="card-header">
                @canany(['create blog category'])
                    <a href="{{route('dashboard.blog-categories.create')}}" class="add-new btn btn-primary waves-effect waves-light">
                        <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span
                            class="d-none d-sm-inline-block">{{ __('Add New Blog Category') }}</span>
                    </a>
                @endcan
            </div>
            <div class="card-datatable table-responsive">
                <table class="datatables-users table border-top custom-datatables">
                    <thead>
                        <tr>
                            <th>{{ __('Sr.') }}</th>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('Created Date') }}</th>
                            <th>{{ __('Status') }}</th>
                            @canany(['delete blog category', 'update blog category'])<th>{{ __('Action') }}</th>@endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogCategories as $index => $category)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->created_at->format('Y-m-d') }}</td>
                                <td>
                                    <span
                                        class="badge me-4 bg-label-{{ $category->is_active == 'active' ? 'success' : 'danger' }}">{{ ucfirst($category->is_active) }}</span>
                                </td>
                                @canany(['delete blog category', 'update blog category'])
                                    <td class="d-flex">
                                        @canany(['delete blog category'])
                                            <form action="{{ route('dashboard.blog-categories.destroy', $category->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <a href="#" type="submit"
                                                    class="btn btn-icon btn-text-danger waves-effect waves-light rounded-pill delete-record delete_confirmation"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ __('Delete Blog Category') }}">
                                                    <i class="ti ti-trash ti-md"></i>
                                                </a>
                                            </form>
                                        @endcan
                                        @canany(['update blog category'])
                                            <span class="text-nowrap">
                                                <a href="{{ route('dashboard.blog-categories.edit', $category->id) }}"
                                                    class="btn btn-icon btn-text-primary waves-effect waves-light rounded-pill me-1"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ __('Edit Blog Category') }}">
                                                    <i class="ti ti-edit ti-md"></i>
                                                </a>
                                            </span>
                                            <span class="text-nowrap">
                                                <a href="{{ route('dashboard.blog-categories.status.update', $category->id) }}"
                                                    class="btn btn-icon btn-text-primary waves-effect waves-light rounded-pill me-1"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ $category->is_active == 'active' ? __('Deactivate Blog Category') : __('Activate Blog Category') }}">
                                                    @if ($category->is_active == 'active')
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
