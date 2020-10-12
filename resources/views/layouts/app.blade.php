<html>
    <head>
        <title>Foodoms| @yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @foreach (assets('css') as $css)
            <link rel="stylesheet" href="{{ env('APP_URL', '') . '/assets/css/' . $css }}">
        @endforeach
        @foreach (assets('js') as $js)
            <script src="{{ env('APP_URL', '') . '/assets/js/' . $js }}"></script>
        @endforeach
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
        @yield('scripts')
    </body>
</html>