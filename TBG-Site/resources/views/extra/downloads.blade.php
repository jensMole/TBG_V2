@extends('master')

@section('title')
    Downloads
@stop

@section('content')

<h1>DOWNLOADS</h1>
<h2 id="muziek">Muziek</h2>
<div class="row">

    <div class="col-sm-1 hidden-sm">
    </div>

    <div class="col-sm-2 col-md-3">
        <img id="note" src="afbeeldingen/jukebox2.png" alt="Jukebox" class="hidden-xs hidden-sm hidden-md"/>
    </div>

    <div id="contentDownloads" class="col-sm-12 col-md-4">
    <br>
        <ul class="music">
            
        @if ($muziek === false)

            <h3>Geen muziek om weer te geven</h3>

            @else

            @foreach ($muziek as $muziekLink)

                <li> <?= htmlspecialchars_decode($muziekLink["onlineLinkTekst"]);?> </li>

            @endforeach

        @endif

        </ul>
    </div>

    <div class="col-sm-2 col-md-3">
        <img id="note1" src="afbeeldingen/jukebox.png" alt="Jukebox" class="hidden-xs hidden-sm hidden-md"/>
    </div>

    <div class="col-sm-1 hidden-sm">
    </div>
</div>

<div>
    <h2 id="plugin">Plugins</h2>
</div>

<div class="row">

    <div class="col-sm-4 Plugins" style="padding-top:30px;">

    <!-- Aantal bijhouden. -->
    <?php $aantal = 0; ?>

    @foreach ($plugins as $plugin)
        
        <h3 class="tekstPlugin"><?= htmlspecialchars_decode($plugin["onlinePluginTekst"]);?></h3>

        <?php $aantal++ ?>

        @if($aantal == 3 || $aantal == 6 )

            </div><div class="col-sm-4 Plugins" style="padding-top:30px;">

        @endif

    @endforeach

    </div>

</div>
@endsection