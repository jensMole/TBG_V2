@extends('master')

@section('title')
    Minigames
@stop

@section('content')

<!-- Video's -->
<div>
<h1 id="AnderVid">Minigames video's</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[17], 32, 11)}}"></iframe>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[18], 32, 11)}}"></iframe>
                </div>
            </div>
            <div class="col-sm-6 vids">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[19], 32, 11)}}"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection