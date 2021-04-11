<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}|@yield('tital')</title>

    {{-- <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/adminlte.min.js') }}" defer></script> --}}

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600&display=swap" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/adminlte.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    </head>
    <body class="antialiased">
        <!-- Navigation fixed-top-->
        @include('public.include.navbar')
        <!-- Navigation end-->
         <!-- header -->
        @include('public.include.header')
        <!-- END header -->
        @switch(Route::current()->getName())
        @case('login')
            @yield('login')
            @break
        @case('register')

            @yield('register')
            @break
        @case('password.request')

            @yield('forgot-password')
            @break
        @case('password.reset')

            @yield('reset-password')
            @break
        @case('verification.notice')

            @yield('verify-email')
            @break
        @case('two-factor.login')

            @yield('two-factor-challenge')
            @break
        @default

            @yield('content')
        @endswitch

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" ></script>
        <script src="{{ asset('js/adminlte.min.js') }}" ></script>

        @yield('scripts')
        <script>
                $(function() {
                    Swal.fire({
                        title: 'success!',
                        text: 'Do you want to continue',
                        icon: 'success',
                        confirmButtonText: 'Cool'
                        })
                    });
        </script>

    </body>

    </html>
