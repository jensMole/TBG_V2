@extends('panel.masterPanel')

@section('title')
    Dashboard
@stop

@section('content')
<!-- Home pagina. -->
<section id="sectionHeadPage">
    <h3>Home pagina</h3>
    <br/>
    <div>
        <!-- Tekst hoofdpagina -->
        <div class="col-sm-3 updateTekstVoorPagina">
            <form class="centerVidLink" method="post" action="updateTekstVoorPagina">
                <div>
                {{csrf_field()}}
                    <label id="tekstFronpage" for="tekstFronpageEdit">Tekst hoofdpagina: </label><br/>
                    <textarea rows="15" cols="50" name="tekstFronpage" placeholder="Tekst hoofdpagina" id="tekstFronpageEdit" required>{{$tekstFront[0]}}</textarea>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
        <!-- Tonen van de tekst -->
        <div class="col-sm-3" id="tekstFrontVoorbeeld">
            <?= htmlspecialchars_decode($tekstFront[0]);?>
        </div>
    </div> 

    <div class="centerVidLinkPres">
        <!-- Input veld voor link. -->
        <div class="col-sm-3 centerVidLink">
            <form class="centerVidLink" method="post" action="updateLinkVidVoorPagina">
                <div>
                {{csrf_field()}}
                    <label id="vidLinkTekst" for="vidLink">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vidLink" type="text" placeholder="Video link (URL)" id="vidLink" value="{{$vidLink[0]}}" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vidFrontDash">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$newVidLink}}"></iframe>
            </div>
        </div>
    </div>  
</section>
<!-- Home pagina -->

<br/>
<hr>
<br/>

<!-- Video's Home pagina -->
<section id="sectionVideosHomeMinecraft">    
    <h3><a class="notLink" id="videoLink">Video's home pagina</a></h3>
    <div class="row rijen">
        <div>
        <h3><a href="/dashboard/minecraft">Minecraft Video's</a></h3>
        <br/><br/><br/>
            <!-- Input veld voor link. -->
            <div class="col-sm-2">
                <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdate', 1)}}">
                    <div>
                    {{csrf_field()}}
                        <label id="vid1Label" for="vid1">Video link: </label><br/>
                        <input class="vidLink" size="48" name="vid1" type="text" placeholder="Video link (URL)" id="vid1" value="{{$vids[0]}}" required/>
                    </div>
                    <br/>
                    <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
                </form> 
            </div>
            <!-- video voorstelling -->
            <div class="col-sm-2">
                <div class="embed-responsive embed-responsive-16by9 vids">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[0], 32, 11)}}"></iframe>
                </div>
            </div>
        </div>
        <div>
            <!-- Input veld voor link. -->
            <div class="col-sm-2 centerVidLink">
                <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdate', 2)}}">
                    <div>
                    {{csrf_field()}}
                        <label id="vid2Label" for="vid2">Video link: </label><br/>
                        <input class="vidLink" size="48" name="vid2" type="text" placeholder="Video link (URL)" id="vid2" value="{{$vids[1]}}" required/>
                    </div>
                    <br/>
                    <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
                </form> 
            </div>
            <!-- video voorstelling -->
            <div class="col-sm-2">
                <div class="embed-responsive embed-responsive-16by9 vids">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[1], 32, 11)}}"></iframe>
                </div>
            </div>
        </div>
        <div>
            <!-- Input veld voor link. -->
            <div class="col-sm-2 centerVidLink">
                <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdate', 3)}}">
                    <div>
                    {{csrf_field()}}
                        <label id="vid3Label" for="vid3">Video link: </label><br/>
                        <input class="vidLink" size="48" name="vid3" type="text" placeholder="Video link (URL)" id="vid3" value="{{$vids[2]}}" required/>
                    </div>
                    <br/>
                    <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
                </form> 
            </div>
            <!-- video voorstelling -->
            <div class="col-sm-2">
                <div class="embed-responsive embed-responsive-16by9 vids">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[2], 32, 11)}}"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Tweede deel -->
    <div class="row rijen">
        <div>
        <h3><a href="/dashboard/andere">Andere Video's</a></h3>
        <br/><br/><br/>
            <!-- Input veld voor link. -->
            <div class="col-sm-2">
                <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdate', 4)}}">
                    <div>
                    {{csrf_field()}}
                        <label id="vid4Label" for="vid4">Video link: </label><br/>
                        <input class="vidLink" size="48" name="vid4" type="text" placeholder="Video link (URL)" id="vid4" value="{{$vids[3]}}" required/>
                    </div>
                    <br/>
                    <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
                </form> 
            </div>
            <!-- video voorstelling -->
            <div class="col-sm-2">
                <div class="embed-responsive embed-responsive-16by9 vids">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[3], 32, 11)}}"></iframe>
                </div>
            </div>
        </div>
        <div>
            <!-- Input veld voor link. -->
            <div class="col-sm-2 centerVidLink">
                <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdate', 5)}}">
                    <div>
                    {{csrf_field()}}
                        <label id="vid5Label" for="vid5">Video link: </label><br/>
                        <input class="vidLink" size="48" name="vid5" type="text" placeholder="Video link (URL)" id="vid5" value="{{$vids[4]}}" required/>
                    </div>
                    <br/>
                    <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
                </form> 
            </div>
            <!-- video voorstelling -->
            <div class="col-sm-2">
                <div class="embed-responsive embed-responsive-16by9 vids">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[4], 32, 11)}}"></iframe>
                </div>
            </div>
        </div>
        <div>
            <!-- Input veld voor link. -->
            <div class="col-sm-2 centerVidLink">
                <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdate', 6)}}">
                    <div>
                    {{csrf_field()}}
                        <label id="vid6Label" for="vid6">Video link: </label><br/>
                        <input class="vidLink" size="48" name="vid6" type="text" placeholder="Video link (URL)" id="vid6" value="{{$vids[5]}}" required/>
                    </div>
                    <br/>
                    <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
                </form> 
            </div>
            <!-- video voorstelling -->
            <div class="col-sm-2">
                <div class="embed-responsive embed-responsive-16by9 vids">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[5], 32, 11)}}"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Video's Home pagina -->



<script>
// Nakijken als je op het begin spatie wilt meegeven.
$(function() {
    $('body').on('keydown', '#vidLink', function(e) {
        if (e.which === 32 &&  e.target.selectionStart === 0) {
        return false;
        }
    });

    $('body').on('keydown', '#tekstFronpageEdit', function(e) {
        if (e.which === 32 &&  e.target.selectionStart === 0) {
        return false;
        }
    });

    $('body').on('keydown', '.vidLink', function(e) {
        if (e.which === 32 &&  e.target.selectionStart === 0) {
        return false;
        }
    });
});
</script>
@endsection