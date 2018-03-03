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
    <div class="modal-dialog modal-lg" style="left: auto; width:840px;">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div>
                    <!-- Tekst hoofdpagina -->
                    <div class="updateTekstVoorPagina">
                        <form class="centerVidLink" method="post" action="updateTekstVoorPagina">
                            <div>
                            {{csrf_field()}}
                                <label id="tekstFronpage" for="tekstFronpageEdit">Tekst hoofdpagina: </label><br><br>
                                <textarea rows="30" cols="105" name="tekstFronpage" placeholder="Tekst hoofdpagina" id="tekstFronpageEdit" required>{{$tekstFront[0]}}</textarea>
                            </div>
                            <br/>
                            <div class="col-xs-3"></div>
                            <button type="submit" value="Submit" class="submitButton col-xs-6">Opslaan</button>
                            <div class="col-xs-3"></div>
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

<!-- Berichten -->
<section id="sectionTeksten">    
    <h3><a class="notLink" id="aankondLink">Aankondigingen pagina</a></h3>

    <div class="row rijen">
    
        <br>
        <h3><a class="notLink" id="berichten">Berichten</a></h3>
        <br/>

        <div class="col-sm-1">
        </div>

        <!-- Input veld voor link. -->
        <!-- Toevoegen van berichten -->
        <div class="col-sm-4 centerBericht">
            <form class="centerBericht" method="POST" action="addBerichten">
                <div>
                {{csrf_field()}}
                    <label id="bericht" for="berichtTekst">Bericht: </label><br/>
                    <textarea rows="3" cols="10" class="bericht" name="bericht" placeholder="Plaats hier een bericht. Voor link voeg <a> toe." id="berichtTekst" required></textarea>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Voeg bericht toe</button>
            </form> 
        </div>

        <div class="col-sm-1">
        </div>

        <div class="col-sm-4 berichtenDashboard">
            <!-- Berichten oplijsten. -->
            <!-- Nakijken als er geen berichten zijn dan zetten we een basis bericht -->
            @if ($berichten === false)

                <h3>Geen berichten om weer te geven</h3>

            @else

                @foreach ($berichten as $bericht)

                <table class="table is-fullwidth">
                    <tr>
                        <td style="width:80%;"><?= htmlspecialchars_decode($bericht["berichten"]);?></td>
                        <td style="width:10%;">
                            <div class="inline-forms">
                                <form method="post" action='bericht/edit/{{$bericht["gegevensId"]}}'>
                                    {{ csrf_field() }}
                                    <!-- Modal openen voor edit functie. -->
                                    <button type="submit" class="card-footer-item btn btn-info btn-md"><span class="glyphicon glyphicon-edit"></span>Edit</button>
                                </form>
                            </div>
                        </td>
                        <td style="width:10%;">
                            <input name="_method" type="hidden" value="DELETE"/>
                            {{ csrf_field() }}
                            <!-- Modal openen van de delete functie. -->
                            <button onclick='toggleModalBericht({{$bericht["gegevensId"]}});' class="kb-button btn btn-danger btn-md" type="submit" data-toggle="modal" data-target="#deleteModelBericht" value='{{$bericht["gegevensId"]}}'><span class="glyphicon glyphicon-remove"></span>Verwijder</button>  
                        </td>
                    </tr>                
                </table>
                @endforeach

            @endif

        </div>

        <div class="col-sm-2">
        </div>

    </div>  

    <!-- Aankondigingen -->
    <div class="row rijen">
        
    <br>
        <h3><a class="notLink" id="aankondigingen">Aankondigingen</a></h3>
        <br/>

        <div class="col-sm-1">
        </div>

        <!-- Input veld voor link. -->
        <!-- Toevoegen van berichten -->
        <div class="col-sm-4 centerBericht">
            <form class="centerBericht" method="POST" action="addAankond">
                <div>
                {{csrf_field()}}
                    <label id="aankondiging" for="aankondigingTekst">Aankondiging: </label><br/>
                    <textarea rows="3" cols="10" class="bericht" name="aankondiging" placeholder="Plaats hier een aankondiging. Voor link voeg <a> toe." id="aankondigingTekst" required></textarea>
                </div>
                <br/>
                <button type="submit" value="Submit"  class="submitButton">Voeg aankondiging toe</button>
            </form> 
        </div>

        <div class="col-sm-1">
        </div>


        <div class="col-sm-4 berichtenDashboard">
            <!-- Berichten oplijsten. -->
            <!-- Nakijken als er geen berichten zijn dan zetten we een basis bericht -->
            @if ($aankondigingen === false)

                <h3>Geen aankondigingen om weer te geven</h3>

            @else

                @foreach ($aankondigingen as $aankondiging)

                <table class="table is-fullwidth">
                    <tr>
                        <td style="width:80%;"><?= htmlspecialchars_decode($aankondiging["aankondigingen"]);?></td>
                        <td style="width:10%;">
                            <div class="inline-forms">
                                <form method="post" action='aankondiging/edit/{{$aankondiging["aankonId"]}}'>
                                    {{ csrf_field() }}
                                    <!-- Modal openen voor edit functie. -->
                                    <button type="submit" class="card-footer-item btn btn-info btn-md"><span class="glyphicon glyphicon-edit"></span>Edit</button>
                                </form>
                            </div>
                        </td>
                        <td style="width:10%;">
                            <input name="_method" type="hidden" value="DELETE"/>
                            {{ csrf_field() }}
                            <!-- Modal openen van de delete functie. -->
                            <button onclick='toggleModalAankondiging({{$aankondiging["aankonId"]}});' class="kb-button btn btn-danger btn-md" type="submit" data-toggle="modal" data-target="#deleteModelAankond" value='{{$aankondiging["aankonId"]}}'><span class="glyphicon glyphicon-remove"></span>Verwijder</button>  
                        </td>
                    </tr>                
                </table>
                @endforeach

            @endif

        </div>

        <div class="col-sm-2">
        </div>
                 
    </div>

    <div class="row rijen">
        
        <h3><a class="notLink" id="online">Online video's (Max 6)</a></h3>
        <br/>

        <!-- Input veld voor link. -->
        <!-- Toevoegen van online video's -->
        <div class="col-sm-6 centerBericht">
            <form class="centerBericht" method="POST" action="addvid">
                <div class="col-sm-6">
                    {{csrf_field()}}
                    <label id="onlineVidLinkLabel" for="onlineVidLink">Link: </label><br>
                    <textarea rows="1" cols="10" class="bericht" name="onlineVidLink" placeholder="Plaats hier de link van de video." id="onlineVidLink" required></textarea><br><br>
                </div>
                <div class="col-sm-6">
                    {{csrf_field()}}
                    <label id="onlineVidTekstLabel" for="onlineVidTekst">Tekst: </label><br>
                    <textarea rows="1" cols="10" class="bericht" name="onlineVidTekst" placeholder="Plaats hier de tekst die getoond moet worden." id="onlineVidTekst" required></textarea>
                </div>
                <br>

                @if ($GenoegVideos == false )
                    
                    <button style="margin-top: 25px; left: -25%; background-color: gray;" type="submit" value="Submit" title="Max 6. Je kan er geen meer toevoegen." class="submitButton col-sm-6" disabled>Voeg online video toe</button>

                @else

                    <button style="margin-top: 25px; left: -25%;" type="submit" value="Submit"  class="submitButton col-sm-6">Voeg online video toe</button>

                @endif

            </form> 
        </div>


        <div class="col-sm-4 berichtenDashboard">
            <!-- online video's oplijsten. -->
            <!-- Nakijken als er geen online video's zijn dan zetten we een basis bericht -->
            @if ($OnlineVideos === false)

                <h3>Geen Online Videos om weer te geven</h3>

            @else

                @foreach ($OnlineVideos as $onlineVid)

                <table class="table is-fullwidth">
                    <tr>
                        <td style="width:80%;"><?= htmlspecialchars_decode($onlineVid["onlineVidTekst"]);?></td>
                        <td style="width:10%;">
                            <div class="inline-forms">
                                <form method="post" action='onlinevid/edit/{{$onlineVid["gegevensId"]}}'>
                                    {{ csrf_field() }}
                                    <!-- Modal openen voor edit functie. -->
                                    <button type="submit" class="card-footer-item btn btn-info btn-md"><span class="glyphicon glyphicon-edit"></span>Edit</button>
                                </form>
                            </div>
                        </td>
                        <td style="width:10%;">
                            <input name="_method" type="hidden" value="DELETE"/>
                            {{ csrf_field() }}
                            <!-- Modal openen van de delete functie. -->
                            <button onclick='toggleModalOnlineVid({{$onlineVid["gegevensId"]}});' class="kb-button btn btn-danger btn-md" type="submit" data-toggle="modal" data-target="#deleteModelOnlineVid" value='{{$onlineVid["gegevensId"]}}'><span class="glyphicon glyphicon-remove"></span>Verwijder</button>  
                        </td>
                    </tr>                
                </table>
                @endforeach

            @endif

        </div>

        <div class="col-sm-2">
        </div>
                 
    </div>
</section>

<br/>
<hr>
<br/>

<section>

    <h3><a class="notLink" id="downloadsPag">Downloads pagina</a></h3>

    <div class="row rijen">

        <h3><a class="notLink" id="muziek">Muziek (Max 8)</a></h3>
        <br/>

        <!-- Input veld voor link. -->
        <!-- Toevoegen van muziek -->
        <div class="col-sm-6 centerBericht">
            <form class="centerBericht" method="POST" action="addMuziek">
                <div class="col-sm-6">
                    {{csrf_field()}}
                    <label id="MuziekLinkLabel" for="MuziekLink">Link: </label><br>
                    <textarea rows="1" cols="10" class="bericht" name="MuziekLink" placeholder="Plaats hier de link van de muziek." id="MuziekLink" required></textarea><br><br>
                </div>
                <div class="col-sm-6">
                    {{csrf_field()}}
                    <label id="MuziekTekstLabel" for="MuziekTekst">Tekst: </label><br>
                    <textarea rows="1" cols="10" class="bericht" name="MuziekTekst" placeholder="Plaats hier de tekst die getoond moet worden." id="MuziekTekst" required></textarea>
                </div>
                <br>

                @if ($genoegMuziek == false )
                    
                    <button style="margin-top: 25px; left: -25%; background-color: gray;" type="submit" value="Submit" title="Max 8. Je kan er geen meer toevoegen." class="submitButton col-sm-6" disabled>Voeg muziek toe</button>

                @else

                    <button style="margin-top: 25px; left: -25%;" type="submit" value="Submit"  class="submitButton col-sm-6">Voeg muziek toe</button>

                @endif

            </form> 
        </div>


        <div class="col-sm-4 berichtenDashboard">
            <!-- Muziek oplijsten. -->
            <!-- Nakijken als er geen muziek is dan zetten we een basis bericht -->
            @if ($muziek === false)

                <h3>Geen Muziek om weer te geven</h3>

            @else

                @foreach ($muziek as $muziekLink)

                <table class="table is-fullwidth">
                    <tr>
                        <td style="width:80%;"><?= htmlspecialchars_decode($muziekLink["onlineLinkTekst"]);?></td>
                        <td style="width:10%;">
                            <div class="inline-forms">
                                <form method="post" action='muziek/edit/{{$muziekLink["muziekId"]}}'>
                                    {{ csrf_field() }}
                                    <!-- Modal openen voor edit functie. -->
                                    <button type="submit" class="card-footer-item btn btn-info btn-md"><span class="glyphicon glyphicon-edit"></span>Edit</button>
                                </form>
                            </div>
                        </td>
                        <td style="width:10%;">
                            <input name="_method" type="hidden" value="DELETE"/>
                            {{ csrf_field() }}
                            <!-- Modal openen van de delete functie. -->
                            <button onclick='toggleModalOnlineVid({{$muziekLink["muziekId"]}});' class="kb-button btn btn-danger btn-md" type="submit" data-toggle="modal" data-target="#deleteModelMuziek" value='{{$muziekLink["muziekId"]}}'><span class="glyphicon glyphicon-remove"></span>Verwijder</button>  
                        </td>
                    </tr>                
                </table>
                @endforeach

            @endif

        </div>

        <div class="col-sm-2">
        </div>
                 
    </div>

    <div class="row rijen">

        <h3><a class="notLink" id="plugins">plugins</a></h3>
        <br/><br>

         <!-- Input veld voor link. -->
        <!-- Toevoegen van plugin -->
        <div class="col-sm-6 centerBericht">
            <form class="centerBericht" method="POST" action="addPlugins">
                <div class="col-sm-6">
                    {{csrf_field()}}
                    <label id="pluginsLinkLabel" for="pluginsLink">Link: </label><br>
                    <textarea rows="1" cols="10" class="bericht" name="pluginsLink" placeholder="Plaats hier de link van de plugins." id="pluginsLink" required></textarea><br><br>
                </div>
                <div class="col-sm-6">
                    {{csrf_field()}}
                    <label id="pluginsTekstLabel" for="pluginsTekst">Tekst: </label><br>
                    <textarea rows="1" cols="10" class="bericht" name="pluginsTekst" placeholder="Plaats hier de tekst die getoond moet worden." id="pluginsTekst" required></textarea>
                </div>
                <br>
                <button style="margin-top: 25px; left: -25%;" type="submit" value="Submit"  class="submitButton col-sm-6">Voeg plugin toe</button>
            </form>

            <p>
                <strong>Let op.</strong> Als je eentje toevoegd wordt de laatste in de lijst verwijderd.<br>
                Dit doen we omdat we ons steeds aan 9 plugins houden op de pagina.
            </p>

        </div>

        <div class="col-sm-4 berichtenDashboard">
            <!-- plugins oplijsten. -->
            <!-- Nakijken als er geen plugin is dan zetten we een basis bericht -->

            @foreach ($plugin as $pluginLink)

            <table class="table is-fullwidth">
                <tr>
                    <td style="width:80%;"><?= htmlspecialchars_decode($pluginLink["onlinePluginTekst"]);?></td>
                    <td style="width:20%;">
                        <div class="inline-forms">
                            <form method="post" action='plugin/edit/{{$pluginLink["pluginsId"]}}'>
                                {{ csrf_field() }}
                                <!-- Modal openen voor edit functie. -->
                                <button style="width: 100px;" type="submit" class="card-footer-item btn btn-info btn-md"><span class="glyphicon glyphicon-edit"></span>Edit</button>
                            </form>
                        </div>
                    </td>
                </tr>                
            </table>
            @endforeach

        </div>

        <div class="col-sm-2">
        </div>        
                 
    </div>

</section>

<br/>
<hr>
<br/>


<img onclick="topFunction()" id="Top" src="../afbeeldingen/boven.png" alt="Ga naar boven">

@include('panel.delete.deleteBericht')
@include('panel.delete.deleteAankondiging')
@include('panel.delete.deleteOnlineVid')
@include('panel.delete.deleteMuziek')

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

    $('body').on('keydown', '.bericht', function(e) {
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
            $('html, body').animate({scrollTop : 0},500);
            return false;
        });
    }
</script>
@endsection