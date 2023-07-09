<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Replacement Scheduler</title>

        @vite(['resources/sass/app.scss','resources/js/app.js'])
        @stack('css')
    </head>
    <body>
        <div class="container-fluid">
            <div class="row flex-nowrap">
                @include('shared.sidebar')
                <div class="col p-3 bg-secondary">
                    @yield('content')
                </div>
            </div>
        </div>

        @stack('js')
    </body>
</html>
