@extends('master')

@section('title')
    Contacteer ons
@stop

@section('content')

<div class="row achtergrond">
    <!-- Foto Jens -->
    <div class="fotoJens">
        <img id="fotoJens" src="afbeeldingen/jensHoofdklein.png" alt="Foto Jens" Title="Jens, owner van The BelgiumGames"/>
    </div>
</div>

<div class="row videoTitel">

    <h1>Contact</h1>

</div>

<!-- Midden Contact -->
<div id="contact1">
    <p>Contacteer Jens</p>
</div>

<div id="contact2">
    <p>Stuur me een email in verband met vragen of verzoeken.</p>
</div>

<div id="bericht">
    <p>Wil je mij iets vragen over van alles en nog wat? Dat kan. <a href="mailto:the.belgiumg@gmail.com">Klik mij</a> om een mail te sturen.<br/>
    Ik probeer binnen 2 dagen altijd te antwoorden.
</div>

<hr>

<div id="contact3">
    <p>Contacteer Jasper</p>
</div>

<div id="contact4">
    <p>Stuur een mail naar Jasper voor alle informatie over TBG.</p>
</div>

<div id="berichtJasper">
    <p>Wil je mij iets vragen over van alles en nog wat? Dat kan. <a href="mailto:catch-all@thebelgiumgames.be">Klik mij</a> om een mail te sturen.<br/>
    Ik probeer binnen 2 dagen altijd te antwoorden.</p>
</div>

@endsection