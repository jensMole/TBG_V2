@extends('master')

@section('title')
    Video's
@stop

@section('content')

<div class="row achtergrond">
    <!-- Foto Jens -->
    <div class="fotoJens">
        <img id="fotoJens" src="afbeeldingen/jensHoofdklein.png" alt="Foto Jens" Title="Jens, owner van The BelgiumGames"/>
    </div>
</div>

<div class="row videoTitel">

    <h1>Video's</h1>

</div>

<div id="content">
    <!-- Minecraft video's -->
    <div id="Minecraft">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 vids" style="padding-bottom: 15px;">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[0], 32, 11)}}" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-sm-4 vids" style="padding-bottom: 15px;">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[1], 32, 11)}}" allowfullscreen></iframe>
                    </div>
                </div>
                
                <div class="col-sm-4 vids">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[2], 32, 11)}}" allowfullscreen></iframe>
                    </div>
                </div>			
            </div>
        </div>
    </div>
    <!-- einde minecraft video's -->
    
    <!-- Andere video's -->
    <div id="Andere">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 vids" style="padding-bottom: 15px;">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[3], 32, 11)}}" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-sm-4 vids" style="padding-bottom: 15px;">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[4], 32, 11)}}" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-sm-4 vids">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[5], 32, 11)}}" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- einde andere video's -->
</div>

@endsection