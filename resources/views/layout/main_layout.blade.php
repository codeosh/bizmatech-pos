<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
        {{-- Links Compiled --}}

        {{-- Scripts Compiled --}}

        @yield('head')
    </head>

    <body>
        <div class="body-content">
            {{-- Navbar Contents --}}
            @include('layout.navbar')

            {{-- Sidebar Contents --}}
            @include('layout.sidebar')

            {{-- Main Content --}}
            <div class="main-content">
                @yield('content')
            </div>
        </div>
    </body>

</html>