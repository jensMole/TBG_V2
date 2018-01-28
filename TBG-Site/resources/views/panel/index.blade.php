@extends('panel.masterPanel')

@section('title')
    Dashboard
@stop

@section('content')
<section>
    <h3>Home pagina</h3>
    <br/>
    <div class="col-sm-6">

        <form class="centerVidLink" method="post" action="updateLinkVidVoorPagina">
            <div>
            {{csrf_field()}}
                <label id="vidLinkTekst" for="vidLink">Video link: </label>
                <input size="48" name="vidLink" type="text" placeholder="Video link (URL)" id="vidLink" value="{{$vidLink[0]}}" required/>
            </div>
            <br/>
            <button type="submit" value="Submit"  id="submitButton">Opslaan </button>
        </form> 

    </div>
</section>

@endsection