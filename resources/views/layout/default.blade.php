<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/sass/app.scss','resources/js/app.js'])
        @stack('css')
    </head>
    <body>
        <div class="container-fluid">
            <div class="row flex-nowrap">
                @include('shared.sidebar')
                @yield('content')
            </div>
        </div>

        @stack('js')
    </body>
</html>
