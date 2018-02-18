@extends('master')

@section('title')
    Aankondigingen
@stop

@section('content')

<!-- Berichten Jens -->
<div class="row">
    <div class="berichten col-md-6 col-xs-12">
        <h2 class="BerichtTitel">Berichten van Jens</h2>
        <p></p>
        <h3 class="BerichtTitel">Hier komen berichten van jens als er iets belangrijk gaat gebeuren of als hij gewoon iets wilt zeggen.</h3>
        <p></p>

            @foreach ($berichten as $bericht)

                <?= htmlspecialchars_decode($bericht);?>

            @endforeach

        <p></p>    
    </div>
    
    <!-- Aankondegingen -->
    <div class="aankondigingen col-md-6 col-xs-12">
        <h2 class="AankondigengenTitel">aankondigingen</h2>
        <p></p>
        <h3 class="AankondigengenTitel">Hier komen aankondigingen voor toekomstige video's. Ook kan je hier info vinden over livestreams.</h3> 
        <p></p>
        <!-- Hier staan de opkomende video's -->

        <!--<p>De opkomende video's komen binnenkort.</p>-->
        <!--<p><strong>Er staan momenteel geen video's gepland wegens examens :(</strong></p>-->
        
        @foreach ($aankondigingen as $aankondiging)
           
            <?= htmlspecialchars_decode($aankondiging);?>

        @endforeach

        <p></p>
    </div>
</div>

<div class="row">
    <div class="col-xs-3 hidden-sm">
    </div>
    <div class="berichten col-md-6 col-sm-12 col-xs-12">
        <h2 class="AankondigengenTitel">Online video's</h2>
        <p></p>
        <h3 class="AankondigengenTitel">Hier staan de video's die online staan op YouTube.</h3> 
        <p></p>
        <!-- Hier staan de video's die al geweest zijn. Zonder datum hier zetten. 6MAX-->
        
            @foreach ($onlineVid as $online)
            
                <?= htmlspecialchars_decode($online);?>

            @endforeach 
        
        <p></p>
    </div>
    <div class="col-xs-3 hidden-sm">
    </div>
</div>

@endsection