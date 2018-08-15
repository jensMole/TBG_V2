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
    <div class="col-md-6 col-xs-12 table-responsive" style="border:none;">

        <!-- <p id="aanvraagTitle">Geef hier je aanvraag in</p><br> -->

        <form class="" method="POST" action="">

            <table id="tableAanvragen">
                <tr>
                    <th style="text-align: center;">
                        Geef hier je aanvraag in
                    </th>
                </tr>
                <tr>
                    {{csrf_field()}}
                        <td><label id="type" for="typeSelect" required>Type </label><br>
                        <select id="typeSelect" required>
                            <option value="">Selecteer een optie</option>
                            <option value="1">Plugin</option>
                            <option value="2">Mod</option>
                            <option value="3">Programeren</option>
                            <option value="4">Andere...</option>
                        </select>
                        </td>
                </tr>
                <tr>
                    <td><label id="info" for="infoInput" required>Info</label><br>
                    <textarea rows="5" cols="50" name="tekstFronpage" placeholder="Info over welke Plugin / Mod / Programeren of andere" id="infoInput" required></textarea></td>
                </tr>
                <tr>
                    <td><label id="link" for="linkInput">Link</label><br>
                    <input type="url" id="linkInput" size="47" placeholder="Link naar Plugin / Mod / Andere"></input></td>
                </tr>
                <tr>
                    <td><button type="submit" value="Submit" style="margin-bottom: 20px;" id="submitAanvraag" class="">Zend aanvraag</button></td>
                </tr>
            </table>

        </form>

        <p>De velden met * zijn verplicht</p>

    </div>

    <div class="aanvragen col-md-6 col-xs-12">

        @if($Types === false)

            <h3>Er zijn geen aanvragen op dit moment</h3>

        @else

            <h3>Aanvragen lijst</h3><br>

            @for($i = 0; $i < count($Types); $i++)

                @switch($Types[$i])

                    @case(1)
                        <p><?=$NaamType[0]["Naam"]?>: <?=$Info[$i]?></p>
                        @break
                    @case(2)
                        <p><?=$NaamType[1]["Naam"]?>: <?=$Info[$i]?></p>
                        @break
                    @case(3)
                        <p><?=$NaamType[2]["Naam"]?>: <?=$Info[$i]?></p>
                        @break
                    @case(4)
                        <p><?=$NaamType[3]["Naam"]?>: <?=$Info[$i]?></p>
                        @break
                @endswitch

            @endfor

        @endif	

    </div>
</div>

@endsection