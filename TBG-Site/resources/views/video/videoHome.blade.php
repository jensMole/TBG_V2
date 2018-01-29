@extends('master')

@section('title')
    Video's
@stop

@section('content')

<div id="content">
    <!-- Minecraft video's -->
    <div id="Minecraft">
        
        <a href="Minecraft.html"><h1 id="Mine">Minecraft</h1></a>
        
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ljw6g1OMmks" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/kO2ZmZrrgn4" allowfullscreen></iframe>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/oLCe-irFfWU" allowfullscreen></iframe>
                    </div>
                </div>			
            </div>
        </div>
    </div>
    <!-- einde minecraft video's -->
    
    <!-- Andere video's -->
    <div id="Andere">
        
        <a href="Andere.html"><h1 id="Ander">Andere</h1></a>
        
        <div class="container">
            <div class="row">
                                            <div class="col-sm-4">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/EphA8dKWM_0" allowfullscreen></iframe>
                    </div>
                </div>
                                            <div class="col-sm-4">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_pYsj9ofmUY" allowfullscreen></iframe>
                    </div>
                </div>
                                        <div class="col-sm-4">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/TetFt66KO1I" allowfullscreen></iframe>
                    </div>
                                            </div>
            </div>
        </div>
    </div>
    <!-- einde andere video's -->
</div>

@endsection