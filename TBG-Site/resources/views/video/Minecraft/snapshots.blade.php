@extends('master')

@section('title')
    Snapshots
@stop

@section('content')

<!-- Video's -->
<div>
<h1 id="AnderVid">Snapshot video's</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 vids">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[24], 32, 11)}}"></iframe>
                </div>
            </div>
            <div class="col-sm-6 vids">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[25], 32, 11)}}"></iframe>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[26], 32, 11)}}"></iframe>
                </div>
            </div>
            <div class="col-sm-6 vids">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[27], 32, 11)}}"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection