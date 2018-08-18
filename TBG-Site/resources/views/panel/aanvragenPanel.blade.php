@extends('panel.masterPanel')

@section('title')
    Dashboard - Aanvragen
@stop

@section('content')

<div class="aanvragen col-md-6 col-xs-12">

@if($Types === false)

    <h3>Er zijn geen aanvragen op dit moment</h3>

@else

    <h3>Aanvragen lijst</h3><br>

    @for($i = 0; $i < count($Types); $i++)

        @switch($Types[$i]["Type"])

            @case(1)

                <table class="table is-fullwidth">
                    <tr>
                        <td style="width:60%;"><?=$Types[$i]["Prefix"]?><?=$NaamType[0]["Naam"]?>: <?=$Types[$i]["Info"]?> <br> <a href="<?=$Types[$i]["Link"]?>" target="_blank"><?=$Types[$i]["Link"]?></a><?=$Types[$i]["Suffix"]?></td>
                        <td style="width:10%;">
                            <div class="inline-forms">
                                <form method="post" action='aanvragen/goed/{{$Types[$i]["Id"]}}'>
                                    {{ csrf_field() }}
                                    <!-- Modal openen voor edit functie. -->
                                    <button type="submit" class="card-footer-item btn btn-success btn-md"><span class="glyphicon glyphicon-ok"></span> OK</button>
                                </form>
                            </div>
                        </td>
                        <td style="width:10%;">
                            <div class="inline-forms">
                                <form method="post" action='aanvragen/slecht/{{$Types[$i]["Id"]}}'>
                                    {{ csrf_field() }}
                                    <!-- Modal openen voor edit functie. -->
                                    <button type="submit" class="card-footer-item btn btn-warning btn-md"><span class="glyphicon glyphicon-minus"></span> NOK</button>
                                </form>
                            </div>
                        </td>
                        <td style="width:10%;">
                            <input name="_method" type="hidden" value="DELETE"/>
                            {{ csrf_field() }}
                            <!-- Modal openen van de delete functie. -->
                            <button onclick='toggleModalAanvraag({{$Types[$i]["Id"]}});' class="kb-button btn btn-danger btn-md" type="submit" data-toggle="modal" data-target="#deleteModelAanvraag" value='{{$Types[$i]["Id"]}}'><span class="glyphicon glyphicon-remove"></span> Verwijder</button>  
                        </td>
                        <td style="width:10%;">
                            <div class="inline-forms">
                                <form method="post" action='aanvragen/reset/{{$Types[$i]["Id"]}}'>
                                    {{ csrf_field() }}
                                    <!-- Modal openen voor edit functie. -->
                                    <button type="submit" class="card-footer-item btn btn-info btn-md"><span class="glyphicon glyphicon-exclamation-sign"></span> Reset</button>
                                </form>
                            </div>
                        </td>
                    </tr>                
                </table>

                @break
            @case(2)

            <table class="table is-fullwidth">
                    <tr>
                        <td style="width:60%;"><?=$Types[$i]["Prefix"]?><?=$NaamType[1]["Naam"]?>: <?=$Types[$i]["Info"]?> <br> <a href="<?=$Types[$i]["Link"]?>" target="_blank"><?=$Types[$i]["Link"]?></a><?=$Types[$i]["Suffix"]?></td>
                        <td style="width:10%;">
                            <div class="inline-forms">
                                <form method="post" action='aanvragen/goed/{{$Types[$i]["Id"]}}'>
                                    {{ csrf_field() }}
                                    <!-- Modal openen voor edit functie. -->
                                    <button type="submit" class="card-footer-item btn btn-success btn-md"><span class="glyphicon glyphicon-ok"></span> OK</button>
                                </form>
                            </div>
                        </td>
                        <td style="width:10%;">
                            <div class="inline-forms">
                                <form method="post" action='aanvragen/slecht/{{$Types[$i]["Id"]}}'>
                                    {{ csrf_field() }}
                                    <!-- Modal openen voor edit functie. -->
                                    <button type="submit" class="card-footer-item btn btn-warning btn-md"><span class="glyphicon glyphicon-minus"></span> NOK</button>
                                </form>
                            </div>
                        </td>
                        <td style="width:10%;">
                            <input name="_method" type="hidden" value="DELETE"/>
                            {{ csrf_field() }}
                            <!-- Modal openen van de delete functie. -->
                            <button onclick='toggleModalAanvraag({{$Types[$i]["Id"]}});' class="kb-button btn btn-danger btn-md" type="submit" data-toggle="modal" data-target="#deleteModelAanvraag" value='{{$Types[$i]["Id"]}}'><span class="glyphicon glyphicon-remove"></span> Verwijder</button>  
                        </td>
                        <td style="width:10%;">
                            <div class="inline-forms">
                                <form method="post" action='aanvragen/reset/{{$Types[$i]["Id"]}}'>
                                    {{ csrf_field() }}
                                    <!-- Modal openen voor edit functie. -->
                                    <button type="submit" class="card-footer-item btn btn-info btn-md"><span class="glyphicon glyphicon-exclamation-sign"></span> Reset</button>
                                </form>
                            </div>
                        </td>
                    </tr>                
                </table> 

                 @break
            @case(3)

            <table class="table is-fullwidth">
                    <tr>
                        <td style="width:60%;"><?=$Types[$i]["Prefix"]?><?=$NaamType[2]["Naam"]?>: <?=$Types[$i]["Info"]?> <br> <a href="<?=$Types[$i]["Link"]?>" target="_blank"><?=$Types[$i]["Link"]?></a><?=$Types[$i]["Suffix"]?></td>
                        <td style="width:10%;">
                            <div class="inline-forms">
                                <form method="post" action='aanvragen/goed/{{$Types[$i]["Id"]}}'>
                                    {{ csrf_field() }}
                                    <!-- Modal openen voor edit functie. -->
                                    <button type="submit" class="card-footer-item btn btn-success btn-md"><span class="glyphicon glyphicon-ok"></span> OK</button>
                                </form>
                            </div>
                        </td>
                        <td style="width:10%;">
                            <div class="inline-forms">
                                <form method="post" action='aanvragen/slecht/{{$Types[$i]["Id"]}}'>
                                    {{ csrf_field() }}
                                    <!-- Modal openen voor edit functie. -->
                                    <button type="submit" class="card-footer-item btn btn-warning btn-md"><span class="glyphicon glyphicon-minus"></span> NOK</button>
                                </form>
                            </div>
                        </td>
                        <td style="width:10%;">
                            <input name="_method" type="hidden" value="DELETE"/>
                            {{ csrf_field() }}
                            <!-- Modal openen van de delete functie. -->
                            <button onclick='toggleModalAanvraag({{$Types[$i]["Id"]}});' class="kb-button btn btn-danger btn-md" type="submit" data-toggle="modal" data-target="#deleteModelAanvraag" value='{{$Types[$i]["Id"]}}'><span class="glyphicon glyphicon-remove"></span> Verwijder</button>  
                        </td>
                        <td style="width:10%;">
                            <div class="inline-forms">
                                <form method="post" action='aanvragen/reset/{{$Types[$i]["Id"]}}'>
                                    {{ csrf_field() }}
                                    <!-- Modal openen voor edit functie. -->
                                    <button type="submit" class="card-footer-item btn btn-info btn-md"><span class="glyphicon glyphicon-exclamation-sign"></span> Reset</button>
                                </form>
                            </div>
                        </td>
                    </tr>                
                </table>  

                 @break
            @case(4)

            <table class="table is-fullwidth">
                    <tr>
                        <td style="width:60%;"><?=$Types[$i]["Prefix"]?><?=$NaamType[3]["Naam"]?>: <?=$Types[$i]["Info"]?> <br> <a href="<?=$Types[$i]["Link"]?>" target="_blank"><?=$Types[$i]["Link"]?></a><?=$Types[$i]["Suffix"]?></td>
                        <td style="width:10%;">
                            <div class="inline-forms">
                                <form method="post" action='aanvragen/goed/{{$Types[$i]["Id"]}}'>
                                    {{ csrf_field() }}
                                    <!-- Modal openen voor edit functie. -->
                                    <button type="submit" class="card-footer-item btn btn-success btn-md"><span class="glyphicon glyphicon-ok"></span> OK</button>
                                </form>
                            </div>
                        </td>
                        <td style="width:10%;">
                            <div class="inline-forms">
                                <form method="post" action='aanvragen/slecht/{{$Types[$i]["Id"]}}'>
                                    {{ csrf_field() }}
                                    <!-- Modal openen voor edit functie. -->
                                    <button type="submit" class="card-footer-item btn btn-warning btn-md"><span class="glyphicon glyphicon-minus"></span> NOK</button>
                                </form>
                            </div>
                        </td>
                        <td style="width:10%;">
                            <input name="_method" type="hidden" value="DELETE"/>
                            {{ csrf_field() }}
                            <!-- Modal openen van de delete functie. -->
                            <button onclick='toggleModalAanvraag({{$Types[$i]["Id"]}});' class="kb-button btn btn-danger btn-md" type="submit" data-toggle="modal" data-target="#deleteModelAanvraag" value='{{$Types[$i]["Id"]}}'><span class="glyphicon glyphicon-remove"></span> Verwijder</button>  
                        </td>
                        <td style="width:10%;">
                            <div class="inline-forms">
                                <form method="post" action='aanvragen/reset/{{$Types[$i]["Id"]}}'>
                                    {{ csrf_field() }}
                                    <!-- Modal openen voor edit functie. -->
                                    <button type="submit" class="card-footer-item btn btn-info btn-md"><span class="glyphicon glyphicon-exclamation-sign"></span> Reset</button>
                                </form>
                            </div>
                        </td>
                    </tr>                
                </table> 

                @break

        @endswitch

    @endfor

@endif	

</div>

<br><br><br>

<img onclick="topFunction()" id="Top" src="../../afbeeldingen/boven.png" alt="Ga naar boven">

@include('panel.delete.deleteAanvraag')

<script>
$(function() {
    $('body').on('keydown', '.vidLink', function(e) {
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
            $('html, body').animate({scrollTop : 0},800);
            return false;
        });
    }
</script>

@endsection