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
            <form class="centerVidLink" method="post" action="{{action('MinecraftVidsController@vidUpdateMinecraft', '7.1')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid7">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid7" type="text" placeholder="Video link (URL)" id="vid7" value="" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/"></iframe>
            </div>
        </div>
    </div>
    <div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/"></iframe>
            </div>
        </div>
        <!-- Input veld voor link. -->
        <div class="col-sm-3 centerVidLink">
            <form class="centerVidLink" method="post" action="{{action('MinecraftVidsController@vidUpdateMinecraft', '8.1')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid8">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid8" type="text" placeholder="Video link (URL)" id="vid8" value="" required/>
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
            <form class="centerVidLink" method="post" action="{{action('MinecraftVidsController@vidUpdateMinecraft', '9.1')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid9">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid9" type="text" placeholder="Video link (URL)" id="vid9" value="" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/"></iframe>
            </div>
        </div>
    </div>
    <div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/"></iframe>
            </div>
        </div>
        <!-- Input veld voor link. -->
        <div class="col-sm-3 centerVidLink">
            <form class="centerVidLink" method="post" action="{{action('MinecraftVidsController@vidUpdateMinecraft', '10.1')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid10">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid10" type="text" placeholder="Video link (URL)" id="vid10" value="" required/>
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
            <form class="centerVidLink" method="post" action="{{action('MinecraftVidsController@vidUpdateMinecraft', '11.2')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid11">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid11" type="text" placeholder="Video link (URL)" id="vid11" value="" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/"></iframe>
            </div>
        </div>
    </div>
    <div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/"></iframe>
            </div>
        </div>
        <!-- Input veld voor link. -->
        <div class="col-sm-3 centerVidLink">
            <form class="centerVidLink" method="post" action="{{action('MinecraftVidsController@vidUpdateMinecraft', '12.2')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid12">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid12" type="text" placeholder="Video link (URL)" id="vid12" value="" required/>
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
            <form class="centerVidLink" method="post" action="{{action('MinecraftVidsController@vidUpdateMinecraft', '13.2')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid13">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid13" type="text" placeholder="Video link (URL)" id="vid13" value="" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/"></iframe>
            </div>
        </div>
    </div>
    <div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/"></iframe>
            </div>
        </div>
        <!-- Input veld voor link. -->
        <div class="col-sm-3 centerVidLink">
            <form class="centerVidLink" method="post" action="{{action('MinecraftVidsController@vidUpdateMinecraft', '14.2')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid14">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid14" type="text" placeholder="Video link (URL)" id="vid14" value="" required/>
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
            <form class="centerVidLink" method="post" action="{{action('MinecraftVidsController@vidUpdateMinecraft', '15.3')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid15">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid15" type="text" placeholder="Video link (URL)" id="vid15" value="" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/"></iframe>
            </div>
        </div>
    </div>
    <div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/"></iframe>
            </div>
        </div>
        <!-- Input veld voor link. -->
        <div class="col-sm-3 centerVidLink">
            <form class="centerVidLink" method="post" action="{{action('MinecraftVidsController@vidUpdateMinecraft', '16.3')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid16">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid16" type="text" placeholder="Video link (URL)" id="vid16" value="" required/>
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
            <form class="centerVidLink" method="post" action="{{action('MinecraftVidsController@vidUpdateMinecraft', '17.3')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid17">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid17" type="text" placeholder="Video link (URL)" id="vid17" value="" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/"></iframe>
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
            <form class="centerVidLink" method="post" action="{{action('MinecraftVidsController@vidUpdateMinecraft', '18.4')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid18">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid18" type="text" placeholder="Video link (URL)" id="vid18" value="" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/"></iframe>
            </div>
        </div>
    </div>
    <div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/"></iframe>
            </div>
        </div>
        <!-- Input veld voor link. -->
        <div class="col-sm-3 centerVidLink">
            <form class="centerVidLink" method="post" action="{{action('MinecraftVidsController@vidUpdateMinecraft', '19.4')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid19">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid19" type="text" placeholder="Video link (URL)" id="vid19" value="" required/>
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
            <form class="centerVidLink" method="post" action="{{action('MinecraftVidsController@vidUpdateMinecraft', '20.4')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid20">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid20" type="text" placeholder="Video link (URL)" id="vid20" value="" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/"></iframe>
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
            <form class="centerVidLink" method="post" action="{{action('MinecraftVidsController@vidUpdateMinecraft', '21.5')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid21">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid21" type="text" placeholder="Video link (URL)" id="vid21" value="" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/"></iframe>
            </div>
        </div>
    </div>
    <div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/"></iframe>
            </div>
        </div>
        <!-- Input veld voor link. -->
        <div class="col-sm-3 centerVidLink">
            <form class="centerVidLink" method="post" action="{{action('MinecraftVidsController@vidUpdateMinecraft', '22.5')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid22">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid22" type="text" placeholder="Video link (URL)" id="vid22" value="" required/>
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
            <form class="centerVidLink" method="post" action="{{action('MinecraftVidsController@vidUpdateMinecraft', '23.5')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid23">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid23" type="text" placeholder="Video link (URL)" id="vid23" value="" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/"></iframe>
            </div>
        </div>
    </div>
    <div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/"></iframe>
            </div>
        </div>
        <!-- Input veld voor link. -->
        <div class="col-sm-3 centerVidLink">
            <form class="centerVidLink" method="post" action="{{action('MinecraftVidsController@vidUpdateMinecraft', '24.5')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid24">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid24" type="text" placeholder="Video link (URL)" id="vid24" value="" required/>
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
            <form class="centerVidLink" method="post" action="{{action('MinecraftVidsController@vidUpdateMinecraft', '25.6')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid25">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid25" type="text" placeholder="Video link (URL)" id="vid25" value="" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/"></iframe>
            </div>
        </div>
    </div>
    <div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/"></iframe>
            </div>
        </div>
        <!-- Input veld voor link. -->
        <div class="col-sm-3 centerVidLink">
            <form class="centerVidLink" method="post" action="{{action('MinecraftVidsController@vidUpdateMinecraft', '26.6')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid26">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid26" type="text" placeholder="Video link (URL)" id="vid26" value="" required/>
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
            <form class="centerVidLink" method="post" action="{{action('MinecraftVidsController@vidUpdateMinecraft', '27.6')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid27">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid27" type="text" placeholder="Video link (URL)" id="vid27" value="" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/"></iframe>
            </div>
        </div>
    </div>
    <div>
        <!-- video voorstelling -->
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9 vids">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/"></iframe>
            </div>
        </div>
        <!-- Input veld voor link. -->
        <div class="col-sm-3 centerVidLink">
            <form class="centerVidLink" method="post" action="{{action('MinecraftVidsController@vidUpdateMinecraft', '28.6')}}">
                <div>
                {{csrf_field()}}
                    <label class="vidLabel" for="vid28">Video link: </label><br/>
                    <input class="vidLink" size="48" name="vid28" type="text" placeholder="Video link (URL)" id="vid28" value="" required/>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Opslaan</button>
            </form> 
        </div>
    </div>
</div>

<br><br><br>

@endsection