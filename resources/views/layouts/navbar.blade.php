<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} - {{ config('app.subtitle') }}</title>
    <link rel="icon" href="{{ asset('images/boost.gif') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

</head>

<body class="bg-dark bg-gradient">
    <div id="app">
        <nav class="navbar navbar-expand-md bg-secondary bg-gradient sticky-md-top shadow-sm">
            <div class="container">
                <a class="navbar-brand link-light" href="{{ url('/') }}">
                    {{ config('app.name') }} | Laravel
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Bagian Kiri -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link link-light" href="{{ url('/') }}">{{ __('Home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-light" href="{{ url('/posts') }}">{{ _('Blog Post') }}</a>
                        </li>
                    </ul>
                    <!-- Bagian Kanan -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link link-light" href="{{ url('/about') }}">{{ __('About') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-light" href="{{ url('/edukasi') }}">{{ __('Education') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-light" href="{{ url('/projek') }}">{{ __('Projects') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- Footer -->
    <footer class="bg-secondary bg-gradient">
        <div class="container">
            <div class="row">
                <div class="m-4">
                    <ul class="p-2">
                        <li class="list-inline-item"><a class="link-light text-decoration-none" href="{{ url('/posts') }}">{{ __('Blog Post') }}</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a class="link-light text-decoration-none" href="{{ url('/about') }}">{{ __('About') }}</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a class="link-light text-decoration-none" href="{{ url('/edukasi') }}">{{ __('Education') }}</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a class="link-light text-decoration-none" href="{{ url('/projek') }}">{{ __('Projects') }}</a></li>
                    </ul>
                    <p class="p-2 text-white-50">&copy; MNRosyad 2022. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>