@extends('panel.masterPanel')

@section('title')
    Dashboard - Andere
@stop

@section('content')

<h1>ANDERE VIDS PAG</h1>

<hr>

<h3><a class="notLink" id="1">Planet coaster</a></h3>

<div class="row rijen">
    <br/>
    <!-- video voorstelling -->
    <div class="col-sm-3">
        <div class="embed-responsive embed-responsive-16by9 vids">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[28], 32, 11)}}"></iframe>
        </div>
    </div>

    <!-- video voorstelling -->
    <div class="col-sm-3">
        <div class="embed-responsive embed-responsive-16by9 vids">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[29], 32, 11)}}"></iframe>
        </div>
    </div>

    <!-- video voorstelling -->
    <div class="col-sm-3">
        <div class="embed-responsive embed-responsive-16by9 vids">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[30], 32, 11)}}"></iframe>
        </div>
    </div>

    <!-- video voorstelling -->
    <div class="col-sm-3">
        <div class="embed-responsive embed-responsive-16by9 vids">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[31], 32, 11)}}"></iframe>
        </div>
    </div>
</div>


<div class="row rijen">
    <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdateAndere', '1')}}">
        <!-- Input veld voor link. -->
        <div class="col-sm-3 labelsVids">
            <div>
            {{csrf_field()}}
                <label class="vidLabel" for="vid29">Video link: </label><br/>
                <input class="vidLink" size="48" name="vid29" type="text" placeholder="Video link (URL)" id="vid29" value="{{$vids[28]}}" required/>
            </div>
            <br/>
        </div>

        <!-- Input veld voor link. -->
        <div class="col-sm-3 labelsVids">
            <div>
            {{csrf_field()}}
                <label class="vidLabel" for="vid30">Video link: </label><br/>
                <input class="vidLink" size="48" name="vid30" type="text" placeholder="Video link (URL)" id="vid30" value="{{$vids[29]}}" required/>
            </div>
            <br/>
        </div>

        <!-- Input veld voor link. -->
        <div class="col-sm-3 labelsVids">
            <div>
            {{csrf_field()}}
                <label class="vidLabel" for="vid31">Video link: </label><br/>
                <input class="vidLink" size="48" name="vid31" type="text" placeholder="Video link (URL)" id="vid31" value="{{$vids[30]}}" required/>
            </div>
            <br/>
        </div>

        <!-- Input veld voor link. -->
        <div class="col-sm-3 labelsVids">
            <div>
            {{csrf_field()}}
                <label class="vidLabel" for="vid32">Video link: </label><br/>
                <input class="vidLink" size="48" name="vid32" type="text" placeholder="Video link (URL)" id="vid32" value="{{$vids[31]}}" required/>
            </div>
            <br/>
        </div>
        <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
    </form>
</div>

<br/>
<hr>
<br/>

<h3><a class="notLink" id="2">Hoe maak je plugins</a></h3>

<div class="row rijen">
    <br/>
    <!-- video voorstelling -->
    <div class="col-sm-3">
        <div class="embed-responsive embed-responsive-16by9 vids">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[32], 32, 11)}}"></iframe>
        </div>
    </div>

    <!-- video voorstelling -->
    <div class="col-sm-3">
        <div class="embed-responsive embed-responsive-16by9 vids">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[33], 32, 11)}}"></iframe>
        </div>
    </div>

    <!-- video voorstelling -->
    <div class="col-sm-3">
        <div class="embed-responsive embed-responsive-16by9 vids">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[34], 32, 11)}}"></iframe>
        </div>
    </div>

    <!-- video voorstelling -->
    <div class="col-sm-3">
        <div class="embed-responsive embed-responsive-16by9 vids">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[35], 32, 11)}}"></iframe>
        </div>
    </div>
</div>


<div class="row rijen">
    <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdateAndere', '2')}}">
        <!-- Input veld voor link. -->
        <div class="col-sm-3 labelsVids">
            <div>
            {{csrf_field()}}
                <label class="vidLabel" for="vid33">Video link: </label><br/>
                <input class="vidLink" size="48" name="vid33" type="text" placeholder="Video link (URL)" id="vid33" value="{{$vids[32]}}" required/>
            </div>
            <br/>
        </div>

        <!-- Input veld voor link. -->
        <div class="col-sm-3 labelsVids">
            <div>
            {{csrf_field()}}
                <label class="vidLabel" for="vid34">Video link: </label><br/>
                <input class="vidLink" size="48" name="vid34" type="text" placeholder="Video link (URL)" id="vid34" value="{{$vids[33]}}" required/>
            </div>
            <br/>
        </div>

        <!-- Input veld voor link. -->
        <div class="col-sm-3 labelsVids">
            <div>
            {{csrf_field()}}
                <label class="vidLabel" for="vid35">Video link: </label><br/>
                <input class="vidLink" size="48" name="vid35" type="text" placeholder="Video link (URL)" id="vid35" value="{{$vids[34]}}" required/>
            </div>
            <br/>
        </div>

        <!-- Input veld voor link. -->
        <div class="col-sm-3 labelsVids">
            <div>
            {{csrf_field()}}
                <label class="vidLabel" for="vid36">Video link: </label><br/>
                <input class="vidLink" size="48" name="vid36" type="text" placeholder="Video link (URL)" id="vid36" value="{{$vids[35]}}" required/>
            </div>
            <br/>
        </div>
        <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
    </form>
</div>

<br/>
<hr>
<br/>

<h3><a class="notLink" id="3">Hoe maak je websites</a></h3>

<div class="row rijen">
    <br/>
    <!-- video voorstelling -->
    <div class="col-sm-3">
        <div class="embed-responsive embed-responsive-16by9 vids">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[36], 32, 11)}}"></iframe>
        </div>
    </div>

    <!-- video voorstelling -->
    <div class="col-sm-3">
        <div class="embed-responsive embed-responsive-16by9 vids">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[37], 32, 11)}}"></iframe>
        </div>
    </div>

    <!-- video voorstelling -->
    <div class="col-sm-3">
        <div class="embed-responsive embed-responsive-16by9 vids">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[38], 32, 11)}}"></iframe>
        </div>
    </div>

    <!-- video voorstelling -->
    <div class="col-sm-3">
        <div class="embed-responsive embed-responsive-16by9 vids">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[39], 32, 11)}}"></iframe>
        </div>
    </div>
</div>


<div class="row rijen">
    <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdateAndere', '3')}}">
        <!-- Input veld voor link. -->
        <div class="col-sm-3 labelsVids">
            <div>
            {{csrf_field()}}
                <label class="vidLabel" for="vid37">Video link: </label><br/>
                <input class="vidLink" size="48" name="vid37" type="text" placeholder="Video link (URL)" id="vid37" value="{{$vids[36]}}" required/>
            </div>
            <br/>
        </div>

        <!-- Input veld voor link. -->
        <div class="col-sm-3 labelsVids">
            <div>
            {{csrf_field()}}
                <label class="vidLabel" for="vid38">Video link: </label><br/>
                <input class="vidLink" size="48" name="vid38" type="text" placeholder="Video link (URL)" id="vid38" value="{{$vids[37]}}" required/>
            </div>
            <br/>
        </div>

        <!-- Input veld voor link. -->
        <div class="col-sm-3 labelsVids">
            <div>
            {{csrf_field()}}
                <label class="vidLabel" for="vid39">Video link: </label><br/>
                <input class="vidLink" size="48" name="vid39" type="text" placeholder="Video link (URL)" id="vid39" value="{{$vids[38]}}" required/>
            </div>
            <br/>
        </div>

        <!-- Input veld voor link. -->
        <div class="col-sm-3 labelsVids">
            <div>
            {{csrf_field()}}
                <label class="vidLabel" for="vid40">Video link: </label><br/>
                <input class="vidLink" size="48" name="vid40" type="text" placeholder="Video link (URL)" id="vid40" value="{{$vids[39]}}" required/>
            </div>
            <br/>
        </div>
        <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
    </form>
</div>

<br/>
<hr>
<br/>

<h3><a class="notLink" id="4">Lezen reacties & andere</a></h3>

<div class="row rijen">
    <br/>
    <!-- video voorstelling -->
    <div class="col-sm-3">
        <div class="embed-responsive embed-responsive-16by9 vids">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[40], 32, 11)}}"></iframe>
        </div>
    </div>

    <!-- video voorstelling -->
    <div class="col-sm-3">
        <div class="embed-responsive embed-responsive-16by9 vids">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[41], 32, 11)}}"></iframe>
        </div>
    </div>

    <!-- video voorstelling -->
    <div class="col-sm-3">
        <div class="embed-responsive embed-responsive-16by9 vids">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[42], 32, 11)}}"></iframe>
        </div>
    </div>

    <!-- video voorstelling -->
    <div class="col-sm-3">
        <div class="embed-responsive embed-responsive-16by9 vids">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[43], 32, 11)}}"></iframe>
        </div>
    </div>
</div>


<div class="row rijen">
    <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdateAndere', '4')}}">
        <!-- Input veld voor link. -->
        <div class="col-sm-3 labelsVids">
            <div>
            {{csrf_field()}}
                <label class="vidLabel" for="vid41">Video link: </label><br/>
                <input class="vidLink" size="48" name="vid41" type="text" placeholder="Video link (URL)" id="vid41" value="{{$vids[40]}}" required/>
            </div>
            <br/>
        </div>

        <!-- Input veld voor link. -->
        <div class="col-sm-3 labelsVids">
            <div>
            {{csrf_field()}}
                <label class="vidLabel" for="vid42">Video link: </label><br/>
                <input class="vidLink" size="48" name="vid42" type="text" placeholder="Video link (URL)" id="vid42" value="{{$vids[41]}}" required/>
            </div>
            <br/>
        </div>

        <!-- Input veld voor link. -->
        <div class="col-sm-3 labelsVids">
            <div>
            {{csrf_field()}}
                <label class="vidLabel" for="vid43">Video link: </label><br/>
                <input class="vidLink" size="48" name="vid43" type="text" placeholder="Video link (URL)" id="vid43" value="{{$vids[42]}}" required/>
            </div>
            <br/>
        </div>

        <!-- Input veld voor link. -->
        <div class="col-sm-3 labelsVids">
            <div>
            {{csrf_field()}}
                <label class="vidLabel" for="vid44">Video link: </label><br/>
                <input class="vidLink" size="48" name="vid44" type="text" placeholder="Video link (URL)" id="vid44" value="{{$vids[43]}}" required/>
            </div>
            <br/>
        </div>
        <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
    </form>
</div>

<br><br><br>

<img onclick="topFunction()" id="Top" src="../../afbeeldingen/boven.png" alt="Ga naar boven">

<script>
$(function() {
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
            $('html, body').animate({scrollTop : 0},800);
            return false;
        });
    }
</script>

@endsection