@extends('panel.masterPanel')

@section('title')
    Dashboard
@stop

@section('content')
<!-- Home pagina. -->
<section id="sectionHeadPage">
    <h3>Home pagina</h3>
    <br/>

    <div class="container knopTekstEditor col-sm-3">
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Tekst editor</button>
    </div>

    <div class="col-sm-3" id="tekstFrontVoorbeeld">
        <?= htmlspecialchars_decode($tekstFront[0]);?>
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

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div>
                    <!-- Tekst hoofdpagina -->
                    <div class="col-sm-3 updateTekstVoorPagina">
                        <form class="centerVidLink" method="post" action="updateTekstVoorPagina">
                            <div>
                            {{csrf_field()}}
                                <label id="tekstFronpage" for="tekstFronpageEdit">Tekst hoofdpagina: </label><br><br>
                                <textarea rows="30" cols="105" name="tekstFronpage" placeholder="Tekst hoofdpagina" id="tekstFronpageEdit" required>{{$tekstFront[0]}}</textarea>
                            </div>
                            <br/>
                            <button type="submit" value="Submit" class="submitButton col-sm-12">Opslaan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Home pagina -->

<br/>
<hr>
<br/>

<!-- Video's Home pagina -->
<section id="sectionVideosHomeMinecraft">    
    <h3><a class="notLink" id="videoLink">Video's home pagina</a></h3>
    <div class="row rijen">
        <h3><a href="/dashboard/minecraft">Minecraft Video's</a></h3>
        <br/>

        <!-- video voorstelling -->
        <div class="col-sm-4">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[0], 32, 11)}}"></iframe>
            </div>
        </div>

        <!-- video voorstelling -->
        <div class="col-sm-4">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[1], 32, 11)}}"></iframe>
            </div>
        </div>

        <!-- video voorstelling -->
        <div class="col-sm-4">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[2], 32, 11)}}"></iframe>
            </div>
        </div>            
    </div>
  
    <div class="row rijen">
        <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdate', 1)}}">
            <!-- Input veld voor link. -->
            <div class="col-sm-4">
                <div>
                {{csrf_field()}}
                    <label id="vid1Label" for="vid1">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid1" type="text" placeholder="Video link (URL)" id="vid1" value="{{$vids[0]}}" required/>
                </div>
                <br/>
            </div>
            
            <!-- Input veld voor link. -->
            <div class="col-sm-4 centerVidLink">
                <div>
                {{csrf_field()}}
                    <label id="vid2Label" for="vid2">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid2" type="text" placeholder="Video link (URL)" id="vid2" value="{{$vids[1]}}" required/>
                </div>
                <br/>
            </div>
            
            <!-- Input veld voor link. -->
            <div class="col-sm-4 centerVidLink">
                <div>
                {{csrf_field()}}
                    <label id="vid3Label" for="vid3">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid3" type="text" placeholder="Video link (URL)" id="vid3" value="{{$vids[2]}}" required/>
                </div>
                <br/>
            </div>        
        <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
        </form> 
    </div>

    <br/><br/>

    <!-- Tweede deel -->
    <div class="row rijen">
        <h3><a href="/dashboard/andere">Andere Video's</a></h3>
        <br/>

        <!-- video voorstelling -->
        <div class="col-sm-4">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[3], 32, 11)}}"></iframe>
            </div>
        </div>

        <!-- video voorstelling -->
        <div class="col-sm-4">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[4], 32, 11)}}"></iframe>
            </div>
        </div>

        <!-- video voorstelling -->
        <div class="col-sm-4">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[5], 32, 11)}}"></iframe>
            </div>
        </div>
            
    </div>

    <div class="row rijen">
        <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdate', 2)}}">
            <!-- Input veld voor link. -->
            <div class="col-sm-4">
                <div>
                {{csrf_field()}}
                    <label id="vid4Label" class="vidLabel" for="vid4">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid4" type="text" placeholder="Video link (URL)" id="vid4" value="{{$vids[3]}}" required/>
                </div>
                <br/>
            </div>

            <!-- Input veld voor link. -->
            <div class="col-sm-4 centerVidLink">
                <div>
                {{csrf_field()}}
                    <label id="vid5Label" class="vidLabel" for="vid5">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid5" type="text" placeholder="Video link (URL)" id="vid5" value="{{$vids[4]}}" required/>
                </div>
                <br/>
            </div>

            <!-- Input veld voor link. -->
            <div class="col-sm-4 centerVidLink">
                <div>
                {{csrf_field()}}
                    <label id="vid6Label" class="vidLabel" for="vid6">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid6" type="text" placeholder="Video link (URL)" id="vid6" value="{{$vids[5]}}" required/>
                </div>
                <br/>
            </div>
        <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
        </form> 
    </div>
</section>
<!-- Video's Home pagina -->

<br/>
<hr>
<br/>

<!-- Video's Home pagina -->
<section id="sectionVideosHomeMinecraft">    
    <h3><a class="notLink" id="videoLink">Aankondigingen pagina</a></h3>
    <div class="row rijen">
        
        <h3>Berichten</h3>
        <br/>

                 
    </div>

    <div class="row rijen">
        
        <h3>Aankondigingen</h3>
        <br/>

                 
    </div>

    <div class="row rijen">
        
        <h3>Online video's</h3>
        <br/>

                 
    </div>
</section>


<img onclick="topFunction()" id="Top" src="afbeeldingen/boven.png" alt="Ga naar boven">

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

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
            // Knop rustig laten te voor schijn komen (functie van fadeIn).
            $("#Top").fadeIn();            
        } else {
            $("#Top").fadeOut();
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        //Click event to scroll to top
        $('#Top').click(function(){
            $('html, body').animate({scrollTop : 0},300);
            return false;
        });
    }
</script>
@endsection