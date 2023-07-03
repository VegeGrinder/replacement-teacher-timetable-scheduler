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

        <script>
            // Set theme to the user's preferred color scheme
            function updateTheme() {
                const colorMode = window.matchMedia("(prefers-color-scheme: dark)").matches ?
                    "dark" :
                    "light";
                document.querySelector("html").setAttribute("data-bs-theme", colorMode);
            }

            // Set theme on load
            updateTheme();

            // Update theme when the preferred scheme changes
            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', updateTheme)
        </script>
        @stack('js')
    </body>
</html>
