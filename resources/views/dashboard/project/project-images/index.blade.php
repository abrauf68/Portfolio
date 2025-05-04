@extends('layouts.master')

@section('title', __('Project Images'))

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
    <li class="breadcrumb-item"><a href="{{ route('dashboard.projects.index') }}">{{ __('Projects') }}</a></li>
    <li class="breadcrumb-item active">{{ __('Project Images') }}</li>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Projects List Table -->
        <div class="card">
            <div class="card-header">
                @canany(['create service'])
                    <a href="{{route('dashboard.projects.project-images.create', $project->id)}}" class="add-new btn btn-primary waves-effect waves-light">
                        <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span
                            class="d-none d-sm-inline-block">{{ __('Add New Project Image') }}</span>
                    </a>
                @endcan
            </div>
            <div class="card-datatable table-responsive">
                <table class="datatables-users table border-top custom-datatables">
                    <thead>
                        <tr>
                            <th>{{ __('Sr.') }}</th>
                            <th>{{ __('Project') }}</th>
                            <th>{{ __('Image') }}</th>
                            <th>{{ __('Created Date') }}</th>
                            @canany(['update project'])<th>{{ __('Action') }}</th>@endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projectImages as $index => $projectImage)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $project->title }}</td>
                                <td>
                                    @if (isset($projectImage->image))
                                        <img src="{{ asset($projectImage->image) }}" alt="{{ $project->name }}"
                                            height="35px" width="35px">
                                    @else
                                        {{ __('No Product Image') }}
                                    @endif
                                </td>
                                <td>{{ $projectImage->created_at->format('Y-m-d') }}</td>
                                @canany(['update project'])
                                    <td class="d-flex">
                                        @canany(['update project'])
                                            <form action="{{ route('dashboard.projects.project-images.destroy', $projectImage->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <a href="#" type="submit"
                                                    class="btn btn-icon btn-text-danger waves-effect waves-light rounded-pill delete-record delete_confirmation"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ __('Delete Project Image') }}">
                                                    <i class="ti ti-trash ti-md"></i>
                                                </a>
                                            </form>
                                            {{-- <span class="text-nowrap">
                                                <a href="{{ route('dashboard.project-gallery.edit', $projectImage->id) }}"
                                                    class="btn btn-icon btn-text-primary waves-effect waves-light rounded-pill me-1"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ __('Edit Project Image') }}">
                                                    <i class="ti ti-edit ti-md"></i>
                                                </a>
                                            </span> --}}
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
