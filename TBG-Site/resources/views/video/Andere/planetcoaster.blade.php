@extends('master')

@section('title')
    Planet Coaster
@stop

@section('content')

<div class="row achtergrond">
    <!-- Foto Jens -->
    <div class="fotoJens">
        <img id="fotoJens" src="afbeeldingen/jensHoofdklein.png" alt="Foto Jens" Title="Jens, owner van The BelgiumGames"/>
    </div>
</div>

<div class="row videoTitel">

    <h1>Planet coaster</h1>

</div><!-- Video's -->

<div class="container">
    <div class="row">
        <div class="col-sm-6 vids">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[28], 32, 11)}}"></iframe>
            </div>
        </div>
        <div class="col-sm-6" id="1">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[29], 32, 11)}}"></iframe>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-sm-6 vids">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[30], 32, 11)}}"></iframe>
            </div>
        </div>
        <div class="col-sm-6" id="2">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[31], 32, 11)}}"></iframe>
            </div>
        </div>
    </div>
</div>

<script>

    if($(window).width() < 767 || $(window).width() == 767){
        document.getElementById("1").style.marginTop = "10px";
        document.getElementById("2").style.marginTop = "10px";
    }

</script>

@endsection