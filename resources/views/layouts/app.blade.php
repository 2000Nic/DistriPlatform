<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Font Awesome (apparently not a font according to my brain) -->
    <script src="https://kit.fontawesome.com/47757d73c8.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="app">
            @include('inc.navbar')

        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="container-md">
                            @yield('content')
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
