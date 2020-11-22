<!-- Main sidebar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <img src="{{ asset('images/vlogo.png') }}" alt="Logo" class="brand-image  elevation-3" style="opacity: .8">
        {{--		<span class="brand-text font-weight-light">{{ config('setting.slug') }}</span>--}}
        <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <div class="info">
                <a href="#" class="d-block"></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/admin" class="nav-link" title="{{__('Dashboard')}}">
                        <i class="fas fa-tachometer-alt"></i>
                        <p>{{__('Dashboard')}}</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-globe"></i>
                        <p>
                            {{__('admin.Management')}}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/roles" class="nav-link" title="{{__('admin.Roles')}}">
                                <i class="fas fa-users"></i>
                                <p>{{__('admin.Roles')}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/users" class="nav-link" title="{{__('admin.Users')}}">
                                <i class="fas fa-headphones"></i>
                                <p>{{__('admin.Users')}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/menus" class="nav-link" title="{{__('admin.Menus')}}">
                                <i class="fas fa-th-list"></i>
                                <p>{{__('admin.Menus')}}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" title="{{__('admin.Training')}}">
                        <i class="fas fa-book-reader"></i>
                        <p>{{__('admin.Training')}}</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
