<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Your website description here"> <!-- Add a description for SEO -->
        <title>@yield('title')</title>

        {{-- Vite for CSS and JS --}}
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])

        {{-- Bladewind CSS --}}
        <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />

        {{-- FontAwesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

        {{-- Google Fonts --}}
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">

        {{-- Additional Head Content --}}
        @yield('head')
    </head>

    <body>
        <div class="body-content">
            {{-- Navbar --}}
            @include('layout.navbar')

            {{-- Sidebar --}}
            @include('layout.sidebar')

            {{-- Main Content --}}
            <div class="main-content">
                @yield('content')
            </div>
        </div>
    </body>

</html>