<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="#" class="nav-link" data-widget="pushmenu">
                <i class="fa fa-bars"></i>
            </a>
        </li>
        <li class="nav-item d-done d-sm-inline-block">
            <a href="/" class="nav-link" title="sasa">
                {{__('Home')}}
            </a>
        </li>
        <li class="nav-item d-done d-sm-inline-block">
            <a href="#" class="nav-link" title="sasa">
                {{__('Contact')}}
            </a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav mr-auto">
        <li class="nav-item d-done d-sm-inline-block">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none">
                @csrf
            </form>
        </li>
    </ul>
</nav>
