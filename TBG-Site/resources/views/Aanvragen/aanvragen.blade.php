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

    <div class="col-md-4 col-sm-2 hidden-xs"></div>

    <div class="col-md-4 col-sm-8 col-xs-12 table-responsive aanvragenForm" style="border:none;">

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
                    <textarea rows="5" cols="50" name="infoAanvraag" placeholder="Info over welke Plugin / Mod / Programeren of andere" id="infoInput" required class="form-control"></textarea></td>
                </tr>
                <tr>
                    <td><label id="link" for="linkInput">Link</label><br>
                    <input type="url" id="linkInput" size="47" name="linkAanvraag" placeholder="Link naar Plugin / Mod / Andere" class="form-control"></td>
                </tr>
                <tr>
                    <td><button type="submit" value="Submit" style="margin-bottom: 20px;" id="submitAanvraag" class="">Zend aanvraag</button></td>
                </tr>
            </table>

        </form>

        <p>De velden met * zijn verplicht</p>

    </div>

    <div class="col-md-4 col-sm-2 hidden-xs"></div>

    @if ($Types === false)

    <div class="col-sm-12">

        <hr>
        <h3 style="padding-bottom:30px; padding-top:20px;">Er zijn geen aanvragen op dit moment</h3>

    </div>

    @else

    <section id="sectionAanvragen"> 

        <div class="row separation"></div>

        <hr>

        <div class="aanvragen col-lg-6 col-md-12" style="overflox:auto">

            @if($pluginType === false)

                <h3>Er zijn geen plugin aanvragen op dit moment</h3>

            @else

                <h3>Plugin aanvragen</h3><br>

                @foreach ($pluginType as $plugin)

                    <table class="table is-fullwidth">
                        <tr>
                            @if($plugin["Foto"] == 0)
                            <td style="width:100%;"><span class="glyphicon glyphicon-remove" style="color:red;">&nbsp;</span><?=$plugin["Prefix"]?><?=$plugin["Info"]?> <br> <a href="<?=$plugin["Link"]?>" target="_blank"><?=$plugin["Link"]?></a><?=$plugin["Suffix"]?></td>
                            @elseif($plugin["Foto"] == 1)
                            <td style="width:100%;"><span class="glyphicon glyphicon-ok" style="color:green;">&nbsp;</span><?=$plugin["Prefix"]?><?=$plugin["Info"]?> <br> <a href="<?=$plugin["Link"]?>" target="_blank"><?=$plugin["Link"]?></a><?=$plugin["Suffix"]?></td>
                            @else
                            <td style="width:100%;"><?=$plugin["Prefix"]?><?=$plugin["Info"]?> <br> <a href="<?=$plugin["Link"]?>" target="_blank"><?=$plugin["Link"]?></a><?=$plugin["Suffix"]?></td>
                            @endif
                        </tr>                
                    </table>

                @endforeach

            @endif

        </div>

        <div class="row separation visible-md visible-sm visible-xs"></div>

        <div class="aanvragen col-lg-6 col-md-12">

            @if($modType === false)

                <h3>Er zijn geen mod aanvragen op dit moment</h3>

            @else

                <h3>Mod aanvragen</h3><br>

                @foreach ($modType as $mod)

                    <table class="table is-fullwidth">
                        <tr>
                            @if($mod["Foto"] == 0)
                            <td style="width:100%;"><span class="glyphicon glyphicon-remove" style="color:red;">&nbsp;</span><?=$mod["Prefix"]?><?=$mod["Info"]?> <br> <a href="<?=$mod["Link"]?>" target="_blank"><?=$mod["Link"]?></a><?=$mod["Suffix"]?></td>
                            @elseif($mod["Foto"] == 1)
                            <td style="width:100%;"><span class="glyphicon glyphicon-ok" style="color:green;">&nbsp;</span><?=$mod["Prefix"]?><?=$mod["Info"]?> <br> <a href="<?=$mod["Link"]?>" target="_blank"><?=$mod["Link"]?></a><?=$mod["Suffix"]?></td>
                            @else
                            <td style="width:100%;"><?=$mod["Prefix"]?><?=$mod["Info"]?> <br> <a href="<?=$mod["Link"]?>" target="_blank"><?=$mod["Link"]?></a><?=$mod["Suffix"]?></td>
                            @endif
                        </tr>                
                    </table>

                @endforeach

            @endif

        </div>

        <div class="row separation"></div>

        <div class="aanvragen col-lg-6 col-md-12">

            @if($programType === false)

                <h3>Er zijn geen programmeer aanvragen op dit moment</h3>

            @else

                <h3>Programeren aanvragen</h3><br>

                @foreach ($programType as $program)

                    <table class="table is-fullwidth">
                        <tr>
                            @if($program["Foto"] == 0)
                            <td style="width:100%;"><span class="glyphicon glyphicon-remove" style="color:red;">&nbsp;</span><?=$program["Prefix"]?><?=$program["Info"]?> <br> <a href="<?=$program["Link"]?>" target="_blank"><?=$program["Link"]?></a><?=$program["Suffix"]?></td>
                            @elseif($program["Foto"] == 1)
                            <td style="width:100%;"><span class="glyphicon glyphicon-ok" style="color:green;">&nbsp;</span><?=$program["Prefix"]?><?=$program["Info"]?> <br> <a href="<?=$program["Link"]?>" target="_blank"><?=$program["Link"]?></a><?=$program["Suffix"]?></td>
                            @else
                            <td style="width:100%;"><?=$program["Prefix"]?><?=$program["Info"]?> <br> <a href="<?=$program["Link"]?>" target="_blank"><?=$program["Link"]?></a><?=$program["Suffix"]?></td>
                            @endif
                        </tr>                
                    </table>

                @endforeach 

            @endif

        </div>

        <div class="row separation visible-md visible-sm visible-xs"></div>

        <div class="aanvragen col-lg-6 col-md-12">

            @if($anderType === false)

                <h3>Er zijn geen andere aanvragen op dit moment</h3>

            @else

            
            <h3>Andere aanvragen</h3><br>

                @foreach ($anderType as $ander)

                    <table class="table is-fullwidth">
                        <tr>
                            @if($ander["Foto"] == 0)
                            <td style="width:100%;"><span class="glyphicon glyphicon-remove" style="color:red;">&nbsp;</span><?=$ander["Prefix"]?><?=$ander["Info"]?> <br> <a href="<?=$ander["Link"]?>" target="_blank"><?=$ander["Link"]?></a><?=$ander["Suffix"]?></td>
                            @elseif($ander["Foto"] == 1)
                            <td style="width:100%;"><span class="glyphicon glyphicon-ok" style="color:green;">&nbsp;</span><?=$ander["Prefix"]?><?=$ander["Info"]?> <br> <a href="<?=$ander["Link"]?>" target="_blank"><?=$ander["Link"]?></a><?=$ander["Suffix"]?></td>
                            @else
                            <td style="width:100%;"><?=$ander["Prefix"]?><?=$ander["Info"]?> <br> <a href="<?=$ander["Link"]?>" target="_blank"><?=$ander["Link"]?></a><?=$ander["Suffix"]?></td>
                            @endif
                        </tr>                
                    </table>

                @endforeach 

            @endif

        </div>

        <div class="row separation"></div>

    </div>

</section>

    <div class="row aanvragen col-md-12 col-xs-12" style="text-align:center">
        <hr>
        <p class="bijschrift"><span class="glyphicon glyphicon-ok" style="color:#156b08;">&nbsp;</span>: Je aanvraag is goedgekeurd en je kan er een video van verwachten.</p>	
        <p class="bijschrift2"><span class="glyphicon glyphicon-remove" style="color:#aa1414;">&nbsp;</span>: Je aanvraag is afgekeurd en hier komt geen video van.</p>
    </div>

        @endif
        

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