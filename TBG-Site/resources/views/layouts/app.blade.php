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
            background-image: url("afbeeldingen/404back.jpg");
            background-position: top center;
            /* background-position: 50% 0; */
            font-family:Arial, sans-serif;
        }
        #loginscherm-kleur {
            color: white;
            border-color: #3a3a3a;
            background-color: #3e3e3e;
        }

        #loginscherm-tekstkleur {
            color: white;
        }

        #app{
            padding-top:110px;
        }

        .panel-heading {
            border-color: #3a3a3a !important;;
            color: white !important;
            background-color: #2a2a2a !important;
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
