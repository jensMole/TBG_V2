@extends('panel.masterPanel')

@section('title')
    Dashboard - Minecraft
@stop

@section('content')

<h1>MINECRAFT VIDS PAG</h1>

<hr>

<h3><a class="notLink" id="1">Plugins</a></h3>

<div class="row rijen">
    <div>
    <br/>
        <!-- Input veld voor link. -->
        <div class="col-sm-3">
            <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdateMinecraft', '7.1')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid7">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid7" type="text" placeholder="Video link (URL)" id="vid7" value="{{$vids[6]}}" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[6], 32, 11)}}"></iframe>
            </div>
        </div>
    </div>
    <div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[7], 32, 11)}}"></iframe>
            </div>
        </div>
        <!-- Input veld voor link. -->
        <div class="col-sm-3 centerVidLink">
            <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdateMinecraft', '8.1')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid8">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid8" type="text" placeholder="Video link (URL)" id="vid8" value="{{$vids[7]}}" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
    </div>
</div>


<div class="row rijen">
    <div>
    <br/>
        <!-- Input veld voor link. -->
        <div class="col-sm-3">
            <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdateMinecraft', '9.1')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid9">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid9" type="text" placeholder="Video link (URL)" id="vid9" value="{{$vids[8]}}" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[8], 32, 11)}}"></iframe>
            </div>
        </div>
    </div>
    <div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[9], 32, 11)}}"></iframe>
            </div>
        </div>
        <!-- Input veld voor link. -->
        <div class="col-sm-3 centerVidLink">
            <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdateMinecraft', '10.1')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid10">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid10" type="text" placeholder="Video link (URL)" id="vid10" value="{{$vids[9]}}" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
    </div>
</div>

<br/>
<hr>
<br/>

<h3><a class="notLink" id="2">Mods</a></h3>

<div class="row rijen">
    <div>
    <br/>
        <!-- Input veld voor link. -->
        <div class="col-sm-3">
            <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdateMinecraft', '11.2')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid11">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid11" type="text" placeholder="Video link (URL)" id="vid11" value="{{$vids[10]}}" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[10], 32, 11)}}"></iframe>
            </div>
        </div>
    </div>
    <div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[11], 32, 11)}}"></iframe>
            </div>
        </div>
        <!-- Input veld voor link. -->
        <div class="col-sm-3 centerVidLink">
            <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdateMinecraft', '12.2')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid12">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid12" type="text" placeholder="Video link (URL)" id="vid12" value="{{$vids[11]}}" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
    </div>
</div>


<div class="row rijen">
    <div>
    <br/>
        <!-- Input veld voor link. -->
        <div class="col-sm-3">
            <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdateMinecraft', '13.2')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid13">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid13" type="text" placeholder="Video link (URL)" id="vid13" value="{{$vids[12]}}" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[12], 32, 11)}}"></iframe>
            </div>
        </div>
    </div>
    <div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[13], 32, 11)}}"></iframe>
            </div>
        </div>
        <!-- Input veld voor link. -->
        <div class="col-sm-3 centerVidLink">
            <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdateMinecraft', '14.2')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid14">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid14" type="text" placeholder="Video link (URL)" id="vid14" value="{{$vids[13]}}" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
    </div>
</div>

<br/>
<hr>
<br/>

<h3><a class="notLink" id="3">Maps</a></h3>

<div class="row rijen">
    <div>
    <br/>
        <!-- Input veld voor link. -->
        <div class="col-sm-3">
            <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdateMinecraft', '15.3')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid15">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid15" type="text" placeholder="Video link (URL)" id="vid15" value="{{$vids[14]}}" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[14], 32, 11)}}"></iframe>
            </div>
        </div>
    </div>
    <div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[15], 32, 11)}}"></iframe>
            </div>
        </div>
        <!-- Input veld voor link. -->
        <div class="col-sm-3 centerVidLink">
            <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdateMinecraft', '16.3')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid16">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid16" type="text" placeholder="Video link (URL)" id="vid16" value="{{$vids[15]}}" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
    </div>
</div>

<!-- TODO CSS -->
<div class="row rijen">
    <div>
    <br/>
        <!-- Input veld voor link. -->
        <div class="col-sm-3">
            <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdateMinecraft', '17.3')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid17">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid17" type="text" placeholder="Video link (URL)" id="vid17" value="{{$vids[16]}}" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[16], 32, 11)}}"></iframe>
            </div>
        </div>
    </div>
</div>

<br/>
<hr>
<br/>

<h3><a class="notLink" id="4">Minigames</a></h3>

<div class="row rijen">
    <div>
    <br/>
        <!-- Input veld voor link. -->
        <div class="col-sm-3">
            <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdateMinecraft', '18.4')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid18">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid18" type="text" placeholder="Video link (URL)" id="vid18" value="{{$vids[17]}}" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[17], 32, 11)}}"></iframe>
            </div>
        </div>
    </div>
    <div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[18], 32, 11)}}"></iframe>
            </div>
        </div>
        <!-- Input veld voor link. -->
        <div class="col-sm-3 centerVidLink">
            <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdateMinecraft', '19.4')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid19">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid19" type="text" placeholder="Video link (URL)" id="vid19" value="{{$vids[18]}}" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
    </div>
</div>


<div class="row rijen">
    <div>
    <br/>
        <!-- Input veld voor link. -->
        <div class="col-sm-3">
            <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdateMinecraft', '20.4')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid20">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid20" type="text" placeholder="Video link (URL)" id="vid20" value="{{$vids[19]}}" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[19], 32, 11)}}"></iframe>
            </div>
        </div>
    </div>
</div>

<br/>
<hr>
<br/>

<h3><a class="notLink" id="5">Tutorials</a></h3>

<div class="row rijen">
    <div>
    <br/>
        <!-- Input veld voor link. -->
        <div class="col-sm-3">
            <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdateMinecraft', '21.5')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid21">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid21" type="text" placeholder="Video link (URL)" id="vid21" value="{{$vids[20]}}" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[20], 32, 11)}}"></iframe>
            </div>
        </div>
    </div>
    <div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[21], 32, 11)}}"></iframe>
            </div>
        </div>
        <!-- Input veld voor link. -->
        <div class="col-sm-3 centerVidLink">
            <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdateMinecraft', '22.5')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid22">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid22" type="text" placeholder="Video link (URL)" id="vid22" value="{{$vids[21]}}" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
    </div>
</div>


<div class="row rijen">
    <div>
    <br/>
        <!-- Input veld voor link. -->
        <div class="col-sm-3">
            <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdateMinecraft', '23.5')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid23">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid23" type="text" placeholder="Video link (URL)" id="vid23" value="{{$vids[22]}}" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[22], 32, 11)}}"></iframe>
            </div>
        </div>
    </div>
    <div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[23], 32, 11)}}"></iframe>
            </div>
        </div>
        <!-- Input veld voor link. -->
        <div class="col-sm-3 centerVidLink">
            <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdateMinecraft', '24.5')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid24">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid24" type="text" placeholder="Video link (URL)" id="vid24" value="{{$vids[23]}}" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
    </div>
</div>

<br/>
<hr>
<br/>


<h3><a class="notLink" id="6">Snapshots</a></h3>

<div class="row rijen">
    <div>
    <br/>
        <!-- Input veld voor link. -->
        <div class="col-sm-3">
            <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdateMinecraft', '25.6')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid25">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid25" type="text" placeholder="Video link (URL)" id="vid25" value="{{$vids[24]}}" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[24], 32, 11)}}"></iframe>
            </div>
        </div>
    </div>
    <div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[25], 32, 11)}}"></iframe>
            </div>
        </div>
        <!-- Input veld voor link. -->
        <div class="col-sm-3 centerVidLink">
            <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdateMinecraft', '26.6')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid26">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid26" type="text" placeholder="Video link (URL)" id="vid26" value="{{$vids[25]}}" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
    </div>
</div>


<div class="row rijen">
    <div>
    <br/>
        <!-- Input veld voor link. -->
        <div class="col-sm-3">
            <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdateMinecraft', '27.6')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid27">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid27" type="text" placeholder="Video link (URL)" id="vid27" value="{{$vids[26]}}" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[26], 32, 11)}}"></iframe>
            </div>
        </div>
    </div>
    <div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{substr($vids[27], 32, 11)}}"></iframe>
            </div>
        </div>
        <!-- Input veld voor link. -->
        <div class="col-sm-3 centerVidLink">
            <form class="centerVidLink" method="post" action="{{action('DashboardController@vidUpdateMinecraft', '28.6')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid28">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid28" type="text" placeholder="Video link (URL)" id="vid28" value="{{$vids[27]}}" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
    </div>
</div>

<br><br><br>

<img onclick="topFunction()" id="Top" src="../../afbeeldingen/boven.png" alt="Ga naar boven">

<script>
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