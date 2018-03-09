@extends('master')

@section('title')
    How to Plugins
@stop

@section('content')

<!-- Video's -->
<div>
    <h1 id="AnderVid">De "Hoe maak je een plugin?" serie</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[32], 32, 11)}}"></iframe>
                </div>
            </div>
            <div class="col-sm-6 vids" id="1">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[33], 32, 11)}}"></iframe>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[34], 32, 11)}}"></iframe>
                </div>
            </div>
            <div class="col-sm-6" id="2">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[35], 32, 11)}}"></iframe>
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