<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Acción Renovable - Blog de Noticias" />
    <meta name="keywords" content="energía, solar, eólica, térmica, células, fotovoltaico, panel solar, panel, energías renovables, instaladores fotovoltaicos, paneles solares, celdas fotovoltaicas, energía solar térmica, energía eólica" />
    <meta name="author" content="M&M Desarrollos Tecnológicos" />

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Acción Renovable') }}</title>

    {{-- Scripts --}}
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{-- Fonts --}}
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/images/xicon.png')}}">

    {{-- Styles --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    {{-- Global site tag (gtag.js) - Google Analytics --}}
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129354781-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-129354781-1');
    </script>

    <script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js"></script>

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> <script> (adsbygoogle = window.adsbygoogle || []).push({ google_ad_client: "ca-pub-8114014643870499", enable_page_level_ads: true }); </script>
    
    @stack('styles')
    @yield('head')
</head>

<body>
    <div id="app">
        <amp-auto-ads type="adsense" data-ad-client="ca-pub-8114014643870499">
        </amp-auto-ads>
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/xicon.png') }}" width="25" height="25" class="d-inline-block align-top mr-2" alt="">{{ config('app.name', 'Acción Renovable | Blog de Noticias') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    {{-- Left Side Of Navbar --}}
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    {{-- Right Side Of Navbar --}}
                    <ul class="navbar-nav ml-auto">
                        {{-- Authentication Links --}}
                        {{-- @guest --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about_us') }}">{{ __('Acerca de Nosotros') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        
                        @yield('content')

                        <div class="row">
                            <div class="col">
                                <center>
                                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                    {{-- rectangular pequeño --}}
                                    <ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-8114014643870499" data-ad-slot="9955340671"></ins>
                                    <script>
                                        (adsbygoogle = window.adsbygoogle || []).push({});

                                    </script>
                                </center>
                                <br><br>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        @include('layouts.sidebar')
                    </div>
                </div>
            </div>
        </main>
    </div>
    @include('layouts.footer')
    @yield('scripts')
</body>
</html>
