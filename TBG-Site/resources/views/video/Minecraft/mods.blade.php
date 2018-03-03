@extends('master')

@section('title')
    Mods
@stop

@section('content')

<!-- Video's -->
<div>
<h1 id="AnderVid">Mod video's</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 vids">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[10], 32, 11)}}"></iframe>
                </div>
            </div>
            <div class="col-sm-6" id="1">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[11], 32, 11)}}"></iframe>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 vids">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[12], 32, 11)}}"></iframe>
                </div>
            </div>
            <div class="col-sm-6" id="2">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[13], 32, 11)}}"></iframe>
                </div>
            </div>
                </div>
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