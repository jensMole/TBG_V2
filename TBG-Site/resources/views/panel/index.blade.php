@extends('panel.masterPanel')

@section('title')
    Dashboard
@stop

@section('content')
<!-- Home pagina. -->
    <h3>Home pagina</h3>
    <br/>
    <section id="sectionHeadPage">
        <div>
            <!-- Tekst hoofdpagina -->
            <div class="col-sm-3 updateTekstVoorPagina">
                <form  class="centerVidLink" method="post" action="updateTekstVoorPagina">
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
                        <input size="48" name="vidLink" type="text" placeholder="Video link (URL)" id="vidLink" value="{{$vidLink[0]}}" required/>
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

<div>
    <p>pp</p>
</div>

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
});
</script>
@endsection