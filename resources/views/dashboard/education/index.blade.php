@extends('layouts.master')

@section('title', __('Educations'))

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
    <li class="breadcrumb-item active">{{ __('Educations') }}</li>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Educations List Table -->
        <div class="card">
            <div class="card-header">
                @canany(['create education'])
                    <a href="{{route('dashboard.educations.create')}}" class="add-new btn btn-primary waves-effect waves-light">
                        <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span
                            class="d-none d-sm-inline-block">{{ __('Add New Education') }}</span>
                    </a>
                @endcan
            </div>
            <div class="card-datatable table-responsive">
                <table class="datatables-users table border-top custom-datatables">
                    <thead>
                        <tr>
                            <th>{{ __('Sr.') }}</th>
                            <th>{{ __('Institute') }}</th>
                            <th>{{ __('Course') }}</th>
                            <th>{{ __('Duration') }}</th>
                            <th>{{ __('Status') }}</th>
                            @canany(['delete education', 'update education'])<th>{{ __('Action') }}</th>@endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($educations as $index => $education)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $education->institute_name }}</td>
                                <td>{{ $education->course_name }}</td>
                                <td>{{ $education->from_date.'-'.$education->to_date }}</td>
                                <td>
                                    <span
                                        class="badge me-4 bg-label-{{ $education->is_active == 'active' ? 'success' : 'danger' }}">{{ ucfirst($education->is_active) }}</span>
                                </td>
                                @canany(['delete education', 'update education'])
                                    <td class="d-flex">
                                        @canany(['delete education'])
                                            <form action="{{ route('dashboard.educations.destroy', $education->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <a href="#" type="submit"
                                                    class="btn btn-icon btn-text-danger waves-effect waves-light rounded-pill delete-record delete_confirmation"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ __('Delete Education') }}">
                                                    <i class="ti ti-trash ti-md"></i>
                                                </a>
                                            </form>
                                        @endcan
                                        @canany(['update education'])
                                            <span class="text-nowrap">
                                                <a href="{{ route('dashboard.educations.edit', $education->id) }}"
                                                    class="btn btn-icon btn-text-primary waves-effect waves-light rounded-pill me-1"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ __('Edit Education') }}">
                                                    <i class="ti ti-edit ti-md"></i>
                                                </a>
                                            </span>
                                            <span class="text-nowrap">
                                                <a href="{{ route('dashboard.educations.status.update', $education->id) }}"
                                                    class="btn btn-icon btn-text-primary waves-effect waves-light rounded-pill me-1"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ $education->is_active == 'active' ? __('Deactivate Education') : __('Activate Education') }}">
                                                    @if ($education->is_active == 'active')
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
