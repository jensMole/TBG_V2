@extends('master')

@section('title')
    Aanvragen
@stop

@section('content')

<!-- begin content -->
<div class="row achtergrond">
    <!-- Foto Jens -->
    <div class="fotoJens">
        <img id="fotoJens" src="afbeeldingen/jensHoofdklein.png" alt="Foto Jens" Title="Jens, owner van The BelgiumGames"/>
    </div>
</div>

<div class="row videoTitel">

    <h1>Aanvragen</h1>

</div>

<div class="container">
    <div class="col-md-6 col-xs-12">

        <h3>Geef hier je aanvraag in</h3><br>

        <form class="centerBericht" method="POST" action="">
            <div>
            {{csrf_field()}}
                <label id="type" for="typeSelect">Type: </label>
                <select id="typeSelect">
                    <option value="0">Selecteer een optie:</option>
                    <option value="1">Plugin</option>
                    <option value="2">Mod</option>
                    <option value="3">Programeren</option>
                    <option value="4">Andere...</option>
                </select>
            </div>
            <br/>
            <!-- <button type="submit" value="Submit" style="margin-bottom: 20px;" class="submitButton">Voeg aankondiging toe</button> -->
        </form>

    </div>

    <div class=" col-md-6 col-xs-12">
        <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis imperdiet sapien, viverra suscipit ex. Quisque semper nunc bibendum purus suscipit tincidunt. Cras auctor nisl eu dolor imperdiet semper. In pretium malesuada dignissim. Nulla facilisi. Mauris a ligula rutrum, maximus dolor in, tincidunt turpis. Vestibulum risus risus, dignissim quis porttitor a, suscipit in nulla. Vestibulum tempor auctor elit eu sollicitudin. Donec aliquam a magna in gravida. Sed luctus mattis tellus, id rutrum magna ornare eu. Vestibulum imperdiet velit non ante feugiat tempus. Sed rutrum augue at sem tempus sodales. Vestibulum dapibus mauris quam, sed dictum quam volutpat eget. Donec congue convallis lacus, et sagittis sem consequat non. In tortor leo, viverra id turpis at, fermentum ultricies tortor. Donec egestas, magna a dictum commodo, risus ligula pulvinar odio, sed sagittis arcu odio id massa.
        </p>	
    </div>
</div>

@endsection