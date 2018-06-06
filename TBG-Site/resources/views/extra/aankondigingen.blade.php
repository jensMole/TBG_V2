@extends('master')

@section('title')
    Aankondigingen
@stop

@section('content')

<div class="row achtergrond">
    <!-- Foto Jens -->
    <div class="fotoJens">
        <img id="fotoJens" src="afbeeldingen/jensHoofdklein.png" alt="Foto Jens" Title="Jens, owner van The BelgiumGames"/>
    </div>
</div>

<div class="row videoTitel">

    <h1>Aankondigingen / Berichten</h1>

</div>

<div class="row">
       
    <!-- Aankondegingen -->
    <div class="aankondigingen col-md-6 col-xs-12">
        <h2 class="AankondigengenTitel">Aankondigingen</h2>
        <p></p>
        <h3 class="AankondigengenTitel">Hier komen aankondigingen voor toekomstige video's. Ook kan je hier info vinden over livestreams.</h3> 
        <p></p>
        <!-- Hier staan de opkomende video's -->

        <!--<p>De opkomende video's komen binnenkort.</p>-->
        <!--<p><strong>Er staan momenteel geen video's gepland wegens examens :(</strong></p>-->
        
            @if ($aankondigingen === false)

                <p>Geen aankondigingen om weer te geven.</p>

            @else

                @foreach ($aankondigingen as $aankondiging)

                    <?= htmlspecialchars_decode($aankondiging["aankondigingen"]);?>

                @endforeach

            @endif

        <p></p>
    </div>

    <!-- Berichten Jens -->
    <div class="berichten col-md-6 col-xs-12">
        <h2 class="BerichtTitel">Berichten van Jens</h2>
        <p></p>
        <h3 class="BerichtTitel">Hier komen berichten van jens als er iets belangrijk gaat gebeuren of als hij gewoon iets wilt zeggen.</h3>
        <p></p>
            <!-- Nakijken als er geen berichten zijn dan zetten we een basis bericht -->
            @if ($berichten === false)

                <p>Geen berichten om weer te geven.</p>

            @else

                @foreach ($berichten as $bericht)

                    <?= htmlspecialchars_decode($bericht["berichten"]);?>

                @endforeach

            @endif

        <p></p>    
    </div>

</div>

<div class="row">
    <div class="col-xs-3 hidden-sm">
    </div>
    <div class="berichten col-md-6 col-sm-12 col-xs-12">
        <h2 class="AankondigengenTitel">Online video's</h2>
        <p></p>
        <h3 class="AankondigengenTitel">Hier staan een paar video's die online staan op YouTube.</h3> 
        <p></p>
        <!-- Hier staan de video's die al geweest zijn. Zonder datum hier zetten. 6MAX-->
        
        @if($onlineVid === false)

             <p>Geen online video's om weer te geven.</p>

        @else

            @foreach ($onlineVid as $online)
            
                <?= htmlspecialchars_decode($online["onlineVidTekst"]);?>

            @endforeach 

        @endif
        
        <p></p>
    </div>
    <div class="col-xs-3 hidden-sm">
    </div>
</div>

@endsection