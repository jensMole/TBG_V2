@extends('master')

@section('title')
    Tutorials
@stop

@section('content')

<!-- Video's -->
<div class="row achtergrond">
    <!-- Foto Jens -->
    <div class="fotoJens">
        <img id="fotoJens" src="afbeeldingen/jensHoofdklein.png" alt="Foto Jens" Title="Jens, owner van The BelgiumGames"/>
    </div>
</div>

<div class="row videoTitel">

    <h1>Tutorial video's</h1>

</div>

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[20], 32, 11)}}"></iframe>
            </div>
        </div>
        <div class="col-sm-6" id="1">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[21], 32, 11)}}"></iframe>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[22], 32, 11)}}"></iframe>
            </div>
        </div>
        <div class="col-sm-6" id="2">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[23], 32, 11)}}"></iframe>
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