<!DOCTYPE html>
<html dir="ltr" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{-- Tell the browser to be responsive to screen width --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    {{-- Favicon icon --}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/images/xicon.png')}}">
    <title>{{ config('app.name', 'Acción Renovable') }}</title>
    {{-- Custom CSS --}}
    <link href="{{ asset('backend/libs/flot/css/float-chart.css') }}" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    {{-- Custom CSS --}}
    <link href="{{ asset('backend/css/style.min.css') }}" rel="stylesheet">
    @stack('styles')
    {{-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --}}
    {{-- WARNING: Respond.js doesn't work if you view the page via file:// --}}
    {{--[if lt IE 9]> --}}
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>

<body>
    {{-- ============================================================== --}}
    {{-- Preloader - style you can find in spinners.css --}}
    {{-- ============================================================== --}}
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    {{-- ============================================================== --}}
    {{-- Main wrapper - style you can find in pages.scss --}}
    {{-- ============================================================== --}}
    <div id="main-wrapper">
        {{-- ============================================================== --}}
        {{-- Topbar header - style you can find in pages.scss --}}
        {{-- ============================================================== --}}
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    {{-- This is for the sidebar toggle which is visible on mobile only --}}
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    {{-- ============================================================== --}}
                    {{-- Logo --}}
                    {{-- ============================================================== --}}
                    <a class="navbar-brand" href="/">
                        {{-- Logo icon --}}
                        <b class="logo-icon p-l-10">
                            {{--You can put here icon as well // <i class="wi wi-sunset"></i> //--}}
                            {{-- Dark Logo icon --}}
                            <img src="{{ asset('images/xicon.png') }}" width="30" alt="homepage" class="light-logo" />
                        </b>
                        {{--End Logo icon --}}
                        {{-- Logo text --}}
                        <span class="logo-text">
                            {{-- dark Logo text --}}
                            Acción Renovable
                        </span>
                        {{-- Logo icon --}}
                        {{-- <b class="logo-icon"> --}}
                        {{--You can put here icon as well // <i class="wi wi-sunset"></i> //--}}
                        {{-- Dark Logo icon --}}
                        {{-- <img src="backendimages/logo-text.png" alt="homepage" class="light-logo" /> --}}

                        {{-- </b> --}}
                        {{--End Logo icon --}}
                    </a>
                    {{-- ============================================================== --}}
                    {{-- End Logo --}}
                    {{-- ============================================================== --}}
                    {{-- ============================================================== --}}
                    {{-- Toggle which is visible on mobile only --}}
                    {{-- ============================================================== --}}
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                {{-- ============================================================== --}}
                {{-- End Logo --}}
                {{-- ============================================================== --}}
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    {{-- ============================================================== --}}
                    {{-- toggle and nav items --}}
                    {{-- ============================================================== --}}
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                    </ul>
                    {{-- ============================================================== --}}
                    {{-- Right side toggle and nav items --}}
                    {{-- ============================================================== --}}
                    <ul class="navbar-nav float-right">
                        {{-- ============================================================== --}}
                        {{-- User profile and search --}}
                        {{-- ============================================================== --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                    <i class="fa fa-power-off mr-2 ml-2"></i>{{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                            </div>
                        </li>
                        {{-- ============================================================== --}}
                        {{-- User profile and search --}}
                        {{-- ============================================================== --}}
                    </ul>
                </div>
            </nav>
        </header>
        {{-- ============================================================== --}}
        {{-- End Topbar header --}}
        {{-- ============================================================== --}}
        {{-- ============================================================== --}}
        {{-- Left Sidebar - style you can find in sidebar.scss  --}}
        {{-- ============================================================== --}}
        @include('layouts.backend.sidebar')
        {{-- ============================================================== --}}
        {{-- End Left Sidebar - style you can find in sidebar.scss  --}}
        {{-- ============================================================== --}}
        {{-- ============================================================== --}}
        {{-- Page wrapper  --}}
        {{-- ============================================================== --}}
        <div class="page-wrapper">
            {{-- ============================================================== --}}
            {{-- Container fluid  --}}
            {{-- ============================================================== --}}
            <div class="container-fluid">
                {{-- ============================================================== --}}
                {{-- Sales Cards  --}}
                {{-- ============================================================== --}}
                <div class="row">
                    {{-- Column --}}
                    <div class="col-md-3">

                        <a class="btn btn-lg btn-success btn-block" href="{{ route('posts.index') }}">
                            <h1><i class="fas fa-copy"></i></h1>
                            Artículos
                        </a>
                    </div>
                    {{-- Column --}}
                    <div class="col-md-3">
                        <a class="btn btn-lg btn-warning btn-block" href="{{ route('categories.index') }}">
                            <h1><i class="fas fa-folder-open"></i></h1>
                            Categorías
                        </a>
                    </div>
                    {{-- Column --}}
                    <div class="col-md-3">
                        <a class="btn btn-lg btn-danger btn-block" href="{{ route('tags.index') }}">
                            <h1><i class="fas fa-tags"></i></h1>
                            Etiquetas
                        </a>
                    </div>
                    {{-- Column --}}
                    <div class="col-md-3">
                        <a class="btn btn-lg btn-info btn-block" href="{{ route('users.index') }}">
                            <h1><i class="fas fa-users"></i></h1>
                            Usuarios
                        </a>
                    </div>
                </div>
                <hr>
                {{-- ============================================================== --}}
                {{-- Sales chart --}}
                {{-- ============================================================== --}}

                @if(session('info'))
                <div class="row">
                    <div class="alert alert-success col-md-12">
                        {{ session('info') }}
                    </div>
                </div>
                @endif

                @if(count($errors))
                <div class="row">
                    <div class="alert alert-danger col-md-12">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif

                <div class="row">

                    @yield('content')

                </div>
                {{-- ============================================================== --}}
                {{-- Sales chart --}}
                {{-- ============================================================== --}}
            </div>
            {{-- ============================================================== --}}
            {{-- End Container fluid  --}}
            {{-- ============================================================== --}}
            {{-- ============================================================== --}}
            {{-- footer --}}
            {{-- ============================================================== --}}
            <footer class="footer text-center">
                Acción Renovable - Blog de Noticias
            </footer>
            {{-- ============================================================== --}}
            {{-- End footer --}}
            {{-- ============================================================== --}}
        </div>
        {{-- ============================================================== --}}
        {{-- End Page wrapper  --}}
        {{-- ============================================================== --}}
    </div>
    {{-- ============================================================== --}}
    {{-- End Wrapper --}}
    {{-- ============================================================== --}}
    {{-- ============================================================== --}}
    {{-- All Jquery --}}
    {{-- ============================================================== --}}

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    {{-- Bootstrap tether Core JavaScript --}}
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" charset="utf-8"></script>
    <script src="{{ asset('backend/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('backend/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('backend/extra-libs/sparkline/sparkline.js') }}"></script>
    {{--Wave Effects --}}
    <script src="{{ asset('backend/js/waves.js') }}"></script>
    {{--Menu sidebar --}}
    <script src="{{ asset('backend/js/sidebarmenu.js') }}"></script>
    {{--Custom JavaScript --}}
    <script src="{{ asset('backend/js/custom.min.js') }}"></script>
    {{--This page JavaScript --}}
    {{-- <script src="backend/js/pages/dashboards/dashboard1.js"></script> --}}
    {{-- Charts js Files --}}
    <script src="{{ asset('backend/libs/flot/excanvas.js') }}"></script>
    <script src="{{ asset('backend/libs/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('backend/libs/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('backend/libs/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('backend/libs/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('backend/libs/flot/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('backend/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('backend/js/pages/chart/chart-page-init.js') }}"></script>

    @stack('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    </body>
</html>
