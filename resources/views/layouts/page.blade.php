<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ __('Title') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/dashboard') }}">{{ __('Profile') }}</a>
                @else
                    <a href="{{ route('login') }}">{{ __('Login') }}</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @endauth
            </div>
        @endif

        <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">نرم افزار</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">برنامه نویسی</a>
        </li>
    </ul>
    <a class="navbar-brand" href="/">
        <img src="{{ asset('images/vlogo.png') }}" alt="Vala logo">
    </a>
</nav>

<main role="main" class="container">
    <div class="jumbotron">
        <h1>Navbar example</h1>
        <p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll, it will remain fixed to the top of your browser's viewport.</p>
        <a class="btn btn-lg btn-primary" href="../../components/navbar/" role="button">View navbar docs &raquo;</a>
    </div>
</main>
{{--<header class="header">
    <nav class="navbar">
        <div class="container">
            <div class="navbar-collapse">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/dashboard') }}">{{ __('Profile') }}</a>
                        @else
                            <a href="{{ route('login') }}">{{ __('Login') }}</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
            <div class="navbar-collapse">
                <form action="get" class="searchBox">
                    <input type="search" class="searchInput" placeholder="{{ __('Search Text') }}">
                    <span class="btn-search fa fa-search"></span>
                </form>
            </div>
            <div class="navbar-collapse">
            </div>
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/vlogo.png') }}" alt="Vala logo">
            </a>
        </div>
    </nav>
</header>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/dashboard') }}">{{ __('Profile') }}</a>
            @else
                <a href="{{ route('login') }}">{{ __('Login') }}</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        @yield('content')
    </div>
</div>--}}
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
