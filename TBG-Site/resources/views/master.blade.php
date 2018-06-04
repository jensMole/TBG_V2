<!DOCTYPE html>
<html lang="nl">
    <head>
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="afbeeldingen/youtubeTBG.png"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Welkom bij TheBelgiumgames. Ik ben Jens en ik maak video's over minecraft en andere spelletjes. Op deze site vind je een verdeling van al de video's en welke video's binnenkort komen. Geniet van de video's" />
    <meta name="keywords" content="thebelgiumgames, the belgiumgames, The Belgiumgames, TheBelgiumgames, youtube, minecraft, mc, tutorials, videos, adventures, redstone, survival, respawn, network" />
    <meta name="author" content="Jens, Jasper"/>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="/css/jquery.smartmenus.bootstrap.css" rel="stylesheet">

    <link href="/css/cssHoofd.css" type="text/css" rel="stylesheet"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


        <!-- snowstorm uitgeschakeld
        <script src="snowstorm.js"></script>
        -->

    </head>
    <body>

        <!-- <div class="wide hidden-xs hidden-sm hidden-md"></div> -->

        @include('static.sidenav')
          
        @yield('content')

        @include('static.footer')


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- SmartMenus jQuery plugin -->
        <script src="/js/jquery.smartmenus.js"></script>

        <!-- SmartMenus jQuery Bootstrap Addon -->
        <script src="/js/jquery.smartmenus.bootstrap.js"></script>

    </body>
</html>
