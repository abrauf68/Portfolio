<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('dashboard') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset(\App\Helpers\Helper::getFavicon()) }}" alt="{{env('APP_NAME')}}">
            </span>
            <span class="app-brand-text demo menu-text fw-bold">{{\App\Helpers\Helper::getCompanyName()}}</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-md align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div>{{__('Dashboard')}}</div>
            </a>
        </li>

        <!-- Apps & Pages -->
        <li class="menu-header small">
            <span class="menu-header-text">{{__('Apps & Pages')}}</span>
        </li>
        @can(['view contact'])
            <li class="menu-item {{ request()->routeIs('dashboard.contacts.*') ? 'active' : '' }}">
                <a href="{{ route('dashboard.contacts.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-address-book"></i> {{-- Contacts --}}
                    <div>{{ __('Contacts') }}</div>
                </a>
            </li>
        @endcan
        @can(['view service'])
            <li class="menu-item {{ request()->routeIs('dashboard.company-services.*') ? 'active' : '' }}">
                <a href="{{ route('dashboard.company-services.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-briefcase"></i> {{-- Services --}}
                    <div>{{ __('Services') }}</div>
                </a>
            </li>
        @endcan
        @can(['view project'])
            <li class="menu-item {{ request()->routeIs('dashboard.projects.*') ? 'active' : '' }}">
                <a href="{{ route('dashboard.projects.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-folder"></i> {{-- Services --}}
                    <div>{{ __('Project') }}</div>
                </a>
            </li>
        @endcan
        @canany(['view blog', 'view blog category'])
            <li class="menu-item {{ request()->routeIs('dashboard.blog-categories.*') || request()->routeIs('dashboard.blogs.*') ? 'open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-news"></i>
                    <div>{{__('Blogs')}}</div>
                </a>
                <ul class="menu-sub">
                    @can(['view blog category'])
                        <li class="menu-item {{ request()->routeIs('dashboard.blog-categories.*') ? 'active' : '' }}">
                            <a href="{{route('dashboard.blog-categories.index')}}" class="menu-link">
                                <div>{{__('Blog Category')}}</div>
                            </a>
                        </li>
                    @endcan
                    @can(['view blog'])
                        <li class="menu-item {{ request()->routeIs('dashboard.blogs.*') ? 'active' : '' }}">
                            <a href="{{route('dashboard.blogs.index')}}" class="menu-link">
                                <div>{{__('Blog')}}</div>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @canany(['view skill', 'view counter', 'update counter', 'view education', 'view experience','view supported company','view testimonial'])
            <li class="menu-item {{ request()->routeIs('dashboard.skills.*') || request()->routeIs('dashboard.counters.*') || request()->routeIs('dashboard.educations.*') || request()->routeIs('dashboard.experiences.*') || request()->routeIs('dashboard.supported-companies.*') || request()->routeIs('dashboard.testimonials.*') ? 'open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-adjustments"></i>
                    <div>{{__('Setup')}}</div>
                </a>
                <ul class="menu-sub">
                    @can(['view skill'])
                        <li class="menu-item {{ request()->routeIs('dashboard.skills.*') ? 'active' : '' }}">
                            <a href="{{route('dashboard.skills.index')}}" class="menu-link">
                                <div>{{__('Skills')}}</div>
                            </a>
                        </li>
                    @endcan
                    @can(['view education'])
                        <li class="menu-item {{ request()->routeIs('dashboard.educations.*') ? 'active' : '' }}">
                            <a href="{{route('dashboard.educations.index')}}" class="menu-link">
                                <div>{{__('Educations')}}</div>
                            </a>
                        </li>
                    @endcan
                    @can(['view experience'])
                        <li class="menu-item {{ request()->routeIs('dashboard.experiences.*') ? 'active' : '' }}">
                            <a href="{{route('dashboard.experiences.index')}}" class="menu-link">
                                <div>{{__('Experiences')}}</div>
                            </a>
                        </li>
                    @endcan
                    @can(['view counter', 'update counter'])
                        <li class="menu-item {{ request()->routeIs('dashboard.counters.*') ? 'active' : '' }}">
                            <a href="{{route('dashboard.counters.index')}}" class="menu-link">
                                <div>{{__('Counter')}}</div>
                            </a>
                        </li>
                    @endcan
                    @can(['view testimonial'])
                        <li class="menu-item {{ request()->routeIs('dashboard.testimonials.*') ? 'active' : '' }}">
                            <a href="{{route('dashboard.testimonials.index')}}" class="menu-link">
                                <div>{{__('Testimonials')}}</div>
                            </a>
                        </li>
                    @endcan
                    @can(['view supported company'])
                        <li class="menu-item {{ request()->routeIs('dashboard.supported-companies.*') ? 'active' : '' }}">
                            <a href="{{route('dashboard.supported-companies.index')}}" class="menu-link">
                                <div>{{__('Supported Companies')}}</div>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @canany(['view user', 'view archived user'])
            <li class="menu-item {{ request()->routeIs('dashboard.user.*') || request()->routeIs('dashboard.archived-user.*') ? 'open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-users"></i>
                    <div>{{__('Users')}}</div>
                </a>
                <ul class="menu-sub">
                    @can(['view user'])
                        <li class="menu-item {{ request()->routeIs('dashboard.user.*') ? 'active' : '' }}">
                            <a href="{{route('dashboard.user.index')}}" class="menu-link">
                                <div>{{__('All Users')}}</div>
                            </a>
                        </li>
                    @endcan
                    @can(['view archived user'])
                        <li class="menu-item {{ request()->routeIs('dashboard.archived-user.*') ? 'active' : '' }}">
                            <a href="{{route('dashboard.archived-user.index')}}" class="menu-link">
                                <div>{{__('Archived Users')}}</div>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @canany(['view role', 'view permission'])
            <li class="menu-item {{ request()->routeIs('dashboard.roles.*') || request()->routeIs('dashboard.permissions.*') ? 'open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    {{-- <i class="menu-icon tf-icons ti ti-settings"></i> --}}
                    <i class="menu-icon tf-icons ti ti-shield-lock"></i>
                    <div>{{__('Roles & Permissions')}}</div>
                </a>
                <ul class="menu-sub">
                    @can(['view role'])
                        <li class="menu-item {{ request()->routeIs('dashboard.roles.*') ? 'active' : '' }}">
                            <a href="{{route('dashboard.roles.index')}}" class="menu-link">
                                <div>{{__('Roles')}}</div>
                            </a>
                        </li>
                    @endcan
                    @can(['view permission'])
                        <li class="menu-item {{ request()->routeIs('dashboard.permissions.*') ? 'active' : '' }}">
                            <a href="{{route('dashboard.permissions.index')}}" class="menu-link">
                                <div>{{__('Permissions')}}</div>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can(['view setting'])
            <li class="menu-item {{ request()->routeIs('dashboard.setting.*') ? 'active' : '' }}">
                <a href="{{ route('dashboard.setting.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-settings"></i>
                    <div>{{__('Settings')}}</div>
                </a>
            </li>
        @endcan
    </ul>
</aside>
