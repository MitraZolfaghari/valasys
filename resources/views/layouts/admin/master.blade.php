<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="{{ config('setting.keywords') }}">
    <meta name="description" content="{{ config('setting.description') }}">
    <meta name="author" content="{{ config('setting.author') }}">
    <title>@yield('title', __('Title')) | {{ config('setting.name', 'Laravel') }}</title>

    <!-- App Script -->
    <script src="{{ asset('js/moment-jalaali.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <!-- Font Awesome Icons -->
    <link href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <!-- iCheck Bootstrap -->
    <link href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}" rel="stylesheet">
    <!-- Date Range Picker -->
    <link href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <!-- DataTables -->
    <link href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <!-- Select 2 -->
    <link href="{{ asset('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}" rel="stylesheet">
    <!-- Theme style -->
    <link href="{{ asset('admin-lte/css/adminlte.min.css') }}" rel="stylesheet">
    <!-- App style -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="hold-transition @yield('body-class')">
<div class="wrapper">
    @include('shared.header')
    @include('shared.sidebar')
    <div class="content-wrapper">
        <main class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- ./container-fluid -->
        </main>
    </div>
</div>

<!-- Scripts -->
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Date Range Picker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
{{-- <script src="{{ asset('plugins/datatables-buttons/js/buttons.flash.min.js') }}"></script> --}}
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- Select 2 -->
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin-lte/js/adminlte.min.js') }}"></script>

</body>
</html>
