@extends('master')

@section('title')
    Downloads
@stop

@section('content')

<h1>DOWNLOADS</h1>
<h2 id="muziek">Muziek</h2>
<div class="row">
    <div class="col-lg-5 col-md-5 col-sm-5">
        <img id="note" src="afbeeldingen/jukebox2.png" alt="Jukebox" class="hidden-xs hidden-sm hidden-md"/>
    </div>
    <div id="contentDownloads" class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
    <br>
        <ul class="music">
            <li><a href="http://www.bensound.com/" target="_blank" >Bensound.com (gratis muziek)</a></li>
            <li><a href="http://www.purple-planet.com/" target="_blank">Purple-planet (gratis muziek)</a></li>
            <li><a href="https://www.ninety9lives.com/" target="_blank">ninety9lives.com (licentie)</a></li>
            <li><a href="https://www.youtube.com/audiolibrary/music" target="_blank">Audiobibliotheek (YouTube)</a></li>
            <li><a href="http://www.bensound.com/royalty-free-music/track/house" target="_blank">House</a></li>
            <li><a href="http://www.bensound.com/royalty-free-music/track/jazzy-frenchy" target="_blank">Jazzy-Frenchy</a></li>
            <li><a href="http://www.bensound.com/royalty-free-music/track/the-elevator-bossa-nova" target="_blank">The-Elevator-Bossa-Nova</a></li>
        </ul>
    </div>
    <div class="col-lg-5 col-md-5 col-sm-5">
        <img id="note1" src="afbeeldingen/jukebox.png" alt="Jukebox" class="hidden-xs hidden-sm hidden-md"/>
    </div>
</div>

<div>
    <h2 id="plugin">Plugin's</h2>
</div>

<!-- Tekst als afbeeldingen weg gaan (gsm/tablet) -->
<div class="row">
    <div class="col-sm-4 Plugins">
        <h3 class="tekstPlugin"><a href="https://mcadmin.net/" target="_blank">lorem ipsum</a></h3>
        <h3 class="tekstPlugin"><a href="https://mods.curse.com/bukkit-plugins/minecraft/vault" target="_blank">lorem ipsum</a></h3>
        <h3 class="tekstPlugin"><a href="https://dev.bukkit.org/projects/worldguard" target="_blank">lorem ipsum</a></h3>
    </div>
    <div class="col-sm-4 Plugins">
        <h3 class="tekstPlugin"><a href="https://dev.bukkit.org/projects/skyblock" target="_blank">lorem ipsum</a></h3>
        <h3 class="tekstPlugin"><a href="https://dev.bukkit.org/projects/citizens" target="_blank">lorem ipsum</a></h3>
    </div>
    <div class="col-sm-4 Plugins">
        <h3 class="tekstPlugin"><a href="https://dev.bukkit.org/projects/skyblock" target="_blank">lorem ipsum</a></h3>
        <h3 class="tekstPlugin"><a href="https://dev.bukkit.org/projects/citizens" target="_blank">lorem ipsum</a></h3>
    </div>
</div>
@endsection