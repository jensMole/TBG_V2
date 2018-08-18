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

        <form method="POST" action="addAanvragen">

            <table id="tableAanvragen">
                <tr>
                    <th style="text-align: center;">
                        Geef hier je aanvraag in
                    </th>
                </tr>
                <tr>
                    {{csrf_field()}}
                        <td><label id="type" for="typeSelect" required>Type </label><br>
                        <select id="typeSelect" name="typeSelect" required>
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
                    <textarea rows="5" cols="50" name="infoAanvraag" placeholder="Info over welke Plugin / Mod / Programeren of andere" id="infoInput" required></textarea></td>
                </tr>
                <tr>
                    <td><label id="link" for="linkInput">Link</label><br>
                    <input type="url" id="linkInput" size="47" name="linkAanvraag" placeholder="Link naar Plugin / Mod / Andere"></input></td>
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

                @switch($Types[$i]["Type"])

                    @case(1)

                        @if($Types[$i]["Foto"] == 0)
                            <p><span class="glyphicon glyphicon-remove" style="color:red;">&nbsp;</span><?=$Types[$i]["Prefix"]?><?=$NaamType[0]["Naam"]?>: <?=$Types[$i]["Info"]?> <br> <a href="<?=$Types[$i]["Link"]?>" target="_blank"><?=$Types[$i]["Link"]?></a><?=$Types[$i]["Suffix"]?></p>
                        @elseif($Types[$i]["Foto"] == 1)
                            <p><span class="glyphicon glyphicon-ok" style="color:#156b08;">&nbsp;</span><?=$Types[$i]["Prefix"]?><?=$NaamType[0]["Naam"]?>: <?=$Types[$i]["Info"]?> <br> <a href="<?=$Types[$i]["Link"]?>" target="_blank"><?=$Types[$i]["Link"]?></a><?=$Types[$i]["Suffix"]?></p>
                        @else
                            <p>- <?=$Types[$i]["Prefix"]?><?=$NaamType[0]["Naam"]?>: <?=$Types[$i]["Info"]?> <br> <a href="<?=$Types[$i]["Link"]?>" target="_blank"><?=$Types[$i]["Link"]?></a><?=$Types[$i]["Suffix"]?></p>
                        @endif

                        @break

                    @case(2)

                        @if($Types[$i]["Foto"] == 0)
                            <p><span class="glyphicon glyphicon-remove" style="color:red;">&nbsp;</span><?=$Types[$i]["Prefix"]?><?=$NaamType[1]["Naam"]?>: <?=$Types[$i]["Info"]?> <br> <a href="<?=$Types[$i]["Link"]?>" target="_blank"><?=$Types[$i]["Link"]?></a><?=$Types[$i]["Suffix"]?></p>
                        @elseif($Types[$i]["Foto"] == 1)
                            <p><span class="glyphicon glyphicon-ok" style="color:green;">&nbsp;</span><?=$Types[$i]["Prefix"]?><?=$NaamType[1]["Naam"]?>: <?=$Types[$i]["Info"]?> <br> <a href="<?=$Types[$i]["Link"]?>" target="_blank"><?=$Types[$i]["Link"]?></a><?=$Types[$i]["Suffix"]?></p>
                        @else
                            <p>- <?=$Types[$i]["Prefix"]?><?=$NaamType[1]["Naam"]?>: <?=$Types[$i]["Info"]?> <br> <a href="<?=$Types[$i]["Link"]?>" target="_blank"><?=$Types[$i]["Link"]?></a><?=$Types[$i]["Suffix"]?></p>
                        @endif                        
                        
                        @break

                    @case(3)

                        @if($Types[$i]["Foto"] == 0)
                            <p><span class="glyphicon glyphicon-remove" style="color:red;">&nbsp;</span><?=$Types[$i]["Prefix"]?><?=$NaamType[2]["Naam"]?>: <?=$Types[$i]["Info"]?> <br> <a href="<?=$Types[$i]["Link"]?>" target="_blank"><?=$Types[$i]["Link"]?></a><?=$Types[$i]["Suffix"]?></p>
                        @elseif($Types[$i]["Foto"] == 1)
                            <p><span class="glyphicon glyphicon-ok" style="color:green;">&nbsp;</span><?=$Types[$i]["Prefix"]?><?=$NaamType[2]["Naam"]?>: <?=$Types[$i]["Info"]?> <br> <a href="<?=$Types[$i]["Link"]?>" target="_blank"><?=$Types[$i]["Link"]?></a><?=$Types[$i]["Suffix"]?></p>
                        @else
                            <p>- <?=$Types[$i]["Prefix"]?><?=$NaamType[2]["Naam"]?>: <?=$Types[$i]["Info"]?> <br> <a href="<?=$Types[$i]["Link"]?>" target="_blank"><?=$Types[$i]["Link"]?></a><?=$Types[$i]["Suffix"]?></p>
                        @endif                        
                        
                        @break

                    @case(4)

                        @if($Types[$i]["Foto"] == 0)
                            <p><span class="glyphicon glyphicon-remove" style="color:red;">&nbsp;</span><?=$Types[$i]["Prefix"]?><?=$NaamType[3]["Naam"]?>: <?=$Types[$i]["Info"]?> <br> <a href="<?=$Types[$i]["Link"]?>" target="_blank"><?=$Types[$i]["Link"]?></a><?=$Types[$i]["Suffix"]?></p>
                        @elseif($Types[$i]["Foto"] == 1)
                            <p><span class="glyphicon glyphicon-ok" style="color:green;">&nbsp;</span><?=$Types[$i]["Prefix"]?><?=$NaamType[3]["Naam"]?>: <?=$Types[$i]["Info"]?> <br> <a href="<?=$Types[$i]["Link"]?>" target="_blank"><?=$Types[$i]["Link"]?></a><?=$Types[$i]["Suffix"]?></p>
                        @else
                            <p>- <?=$Types[$i]["Prefix"]?><?=$NaamType[3]["Naam"]?>: <?=$Types[$i]["Info"]?> <br> <a href="<?=$Types[$i]["Link"]?>" target="_blank"><?=$Types[$i]["Link"]?></a><?=$Types[$i]["Suffix"]?></p>
                        @endif                        
                        
                        @break               
                        
                @endswitch

            @endfor

        <p class="bijschrift"><span class="glyphicon glyphicon-ok" style="color:green;">&nbsp;</span>: Je aanvraag is goedgekeurd en je kan er een video van verwachten.</p>	
        <p class="bijschrift2"><span class="glyphicon glyphicon-remove" style="color:red;">&nbsp;</span>: Je aanvraag is afgekeurd en hier komt geen video van.</p>

        @endif
        
    </div>

</div>

<script>
// Nakijken als je op het begin spatie wilt meegeven.
$(function() {
    $('body').on('keydown', '#infoInput', function(e) {
        if (e.which === 32 &&  e.target.selectionStart === 0) {
        return false;
        }
    });
});
</script>

@endsection