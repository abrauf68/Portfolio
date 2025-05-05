@extends('layouts.master')

@section('title', __('Skills'))

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
    <li class="breadcrumb-item active">{{ __('Skills') }}</li>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Skills List Table -->
        <div class="card">
            <div class="card-header">
                @canany(['create skill'])
                    <a href="{{route('dashboard.skills.create')}}" class="add-new btn btn-primary waves-effect waves-light">
                        <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span
                            class="d-none d-sm-inline-block">{{ __('Add New Skill') }}</span>
                    </a>
                @endcan
            </div>
            <div class="card-datatable table-responsive">
                <table class="datatables-users table border-top custom-datatables">
                    <thead>
                        <tr>
                            <th>{{ __('Sr.') }}</th>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('Type') }}</th>
                            <th>{{ __('Created Date') }}</th>
                            <th>{{ __('Status') }}</th>
                            @canany(['delete skill', 'update skill'])<th>{{ __('Action') }}</th>@endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skills as $index => $skill)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $skill->name }}</td>
                                <td>{{ ucfirst($skill->skill_type) }}</td>
                                <td>{{ $skill->created_at->format('Y-m-d') }}</td>
                                <td>
                                    <span
                                        class="badge me-4 bg-label-{{ $skill->is_active == 'active' ? 'success' : 'danger' }}">{{ ucfirst($skill->is_active) }}</span>
                                </td>
                                @canany(['delete skill', 'update skill'])
                                    <td class="d-flex">
                                        @canany(['delete skill'])
                                            <form action="{{ route('dashboard.skills.destroy', $skill->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <a href="#" type="submit"
                                                    class="btn btn-icon btn-text-danger waves-effect waves-light rounded-pill delete-record delete_confirmation"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ __('Delete Skill') }}">
                                                    <i class="ti ti-trash ti-md"></i>
                                                </a>
                                            </form>
                                        @endcan
                                        @canany(['update skill'])
                                            <span class="text-nowrap">
                                                <a href="{{ route('dashboard.skills.edit', $skill->id) }}"
                                                    class="btn btn-icon btn-text-primary waves-effect waves-light rounded-pill me-1"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ __('Edit Skill') }}">
                                                    <i class="ti ti-edit ti-md"></i>
                                                </a>
                                            </span>
                                            <span class="text-nowrap">
                                                <a href="{{ route('dashboard.skills.status.update', $skill->id) }}"
                                                    class="btn btn-icon btn-text-primary waves-effect waves-light rounded-pill me-1"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ $skill->is_active == 'active' ? __('Deactivate Skill') : __('Activate Skill') }}">
                                                    @if ($skill->is_active == 'active')
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
