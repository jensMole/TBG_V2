@extends('master')

@section('title')
    Maps
@stop

@section('content')

<!-- Video's -->
<div>
<h1 id="AnderVid">Map video's</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 vids">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[14], 32, 11)}}"></iframe>
                </div>
            </div>
            <div class="col-sm-6 vids">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[15], 32, 11)}}"></iframe>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[16], 32, 11)}}"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection