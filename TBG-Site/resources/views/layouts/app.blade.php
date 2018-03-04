<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login TBG</title>

    <link rel="shortcut icon" href="../afbeeldingen/youtubeTBG.png"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Achtergrond -->
    <style>

        body {
            background-image: url("afbeeldingen/404.png");
            background-position: 50% 0;
            color: white;
        }
    
    </style>
<!-- achtergrond -->

</head>
<body>
    <div id="app">

        @yield('content')
        
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
