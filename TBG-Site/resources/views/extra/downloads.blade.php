@extends('master')

@section('title')
    Downloads
@stop

@section('content')

<div class="row achtergrond">
    <!-- Foto Jens -->
    <div class="fotoJens">
        <img id="fotoJens" src="afbeeldingen/jensHoofdklein.png" alt="Foto Jens" Title="Jens, owner van The BelgiumGames"/>
    </div>
</div>

<div class="row videoTitel">

    <h1>Muziek / Plugins</h1>

</div>

<div class="row muziek">

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

<hr>

<div class="row pluginsDownload">

    <div class="col-sm-4 Plugins">

    <!-- Aantal bijhouden. -->
    <?php $aantal = 0; ?>

    @foreach ($plugins as $plugin)
        
        <h3 class="tekstPlugin"><?= htmlspecialchars_decode($plugin["onlinePluginTekst"]);?></h3>

        <?php $aantal++ ?>

        @if($aantal == 3 || $aantal == 6 )

            </div><div class="col-sm-4 Plugins">

        @endif

    @endforeach

    </div>

</div>
@endsection