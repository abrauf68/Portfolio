@extends('layouts.master')

@section('title', __('Supported Companies'))

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
    <li class="breadcrumb-item active">{{ __('Supported Companies') }}</li>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Supported Companies List Table -->
        <div class="card">
            <div class="card-header">
                @canany(['create supported company'])
                    <a href="{{route('dashboard.supported-companies.create')}}" class="add-new btn btn-primary waves-effect waves-light">
                        <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span
                            class="d-none d-sm-inline-block">{{ __('Add New Supported Company') }}</span>
                    </a>
                @endcan
            </div>
            <div class="card-datatable table-responsive">
                <table class="datatables-users table border-top custom-datatables">
                    <thead>
                        <tr>
                            <th>{{ __('Sr.') }}</th>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('Logo') }}</th>
                            <th>{{ __('Created Date') }}</th>
                            <th>{{ __('Status') }}</th>
                            @canany(['delete supported company', 'update supported company'])<th>{{ __('Action') }}</th>@endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($supportedCompanies as $index => $company)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $company->name }}</td>
                                <td>
                                    @if (isset($company->logo))
                                        <img src="{{ asset($company->logo) }}" alt="{{ $company->name }}"
                                            height="35px" width="35px">
                                    @else
                                        {{ __('No Logo') }}
                                    @endif
                                </td>
                                <td>{{ $company->created_at->format('Y-m-d') }}</td>
                                <td>
                                    <span
                                        class="badge me-4 bg-label-{{ $company->is_active == 'active' ? 'success' : 'danger' }}">{{ ucfirst($company->is_active) }}</span>
                                </td>
                                @canany(['delete supported company', 'update supported company'])
                                    <td class="d-flex">
                                        @canany(['delete supported company'])
                                            <form action="{{ route('dashboard.supported-companies.destroy', $company->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <a href="#" type="submit"
                                                    class="btn btn-icon btn-text-danger waves-effect waves-light rounded-pill delete-record delete_confirmation"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ __('Delete Supported Company') }}">
                                                    <i class="ti ti-trash ti-md"></i>
                                                </a>
                                            </form>
                                        @endcan
                                        @canany(['update supported company'])
                                            <span class="text-nowrap">
                                                <a href="{{ route('dashboard.supported-companies.edit', $company->id) }}"
                                                    class="btn btn-icon btn-text-primary waves-effect waves-light rounded-pill me-1"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ __('Edit Supported Company') }}">
                                                    <i class="ti ti-edit ti-md"></i>
                                                </a>
                                            </span>
                                            <span class="text-nowrap">
                                                <a href="{{ route('dashboard.supported-companies.status.update', $company->id) }}"
                                                    class="btn btn-icon btn-text-primary waves-effect waves-light rounded-pill me-1"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ $company->is_active == 'active' ? __('Deactivate Supported Company') : __('Activate Supported Company') }}">
                                                    @if ($company->is_active == 'active')
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
