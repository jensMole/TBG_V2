@extends('panel.masterPanel')

@section('title')
    Dashboard - Aanvragen
@stop

@section('content')

<section id="sectionTeksten"> 

    <div class="row separation hidden-sm hidden-xs"></div>

    <div class="aanvragen col-lg-6 col-md-12">

        @if($pluginType === false)

            <h3>Er zijn geen plugin aanvragen op dit moment</h3>

        @else

            <h3>Plugin aanvragen</h3><br>

            @foreach ($pluginType as $plugin)

                <table class="table is-fullwidth">
                    <tr>
                        <td style="width:80%;"><?=$plugin["Prefix"]?><?=$plugin["Info"]?> <br> <a href="<?=$plugin["Link"]?>" target="_blank"><?=$plugin["Link"]?></a><?=$plugin["Suffix"]?></td>
                        <td style="width:5%;">
                            <div class="inline-forms">
                                <form method="post" action='aanvragen/goed/{{$plugin["Id"]}}'>
                                    {{ csrf_field() }}
                                    <!-- Modal openen voor edit functie. -->
                                    <button type="submit" class="card-footer-item btn btn-success btn-md"><span class="glyphicon glyphicon-ok"></span> OK</button>
                                </form>
                            </div>
                        </td>
                        <td style="width:5%;">
                            <div class="inline-forms">
                                <form method="post" action='aanvragen/slecht/{{$plugin["Id"]}}'>
                                    {{ csrf_field() }}
                                    <!-- Modal openen voor edit functie. -->
                                    <button type="submit" class="card-footer-item btn btn-warning btn-md"><span class="glyphicon glyphicon-minus"></span> NOK</button>
                                </form>
                            </div>
                        </td>
                        <td style="width:5%;">
                            <input name="_method" type="hidden" value="DELETE"/>
                            {{ csrf_field() }}
                            <!-- Modal openen van de delete functie. -->
                            <button onclick='toggleModalAanvraag({{$plugin["Id"]}});' class="kb-button btn btn-danger btn-md" type="submit" data-toggle="modal" data-target="#deleteModelAanvraag" value='{{$plugin["Id"]}}'><span class="glyphicon glyphicon-remove"></span> Verwijder</button>  
                        </td>
                        <td style="width:5%;">
                            <div class="inline-forms">
                                <form method="post" action='aanvragen/reset/{{$plugin["Id"]}}'>
                                    {{ csrf_field() }}
                                    <!-- Modal openen voor edit functie. -->
                                    <button type="submit" class="card-footer-item btn btn-info btn-md"><span class="glyphicon glyphicon-exclamation-sign"></span> Reset</button>
                                </form>
                            </div>
                        </td>
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
                        <td style="width:80%;"><?=$mod["Prefix"]?><?=$mod["Info"]?> <br> <a href="<?=$mod["Link"]?>" target="_blank"><?=$mod["Link"]?></a><?=$mod["Suffix"]?></td>
                        <td style="width:5%;">
                            <div class="inline-forms">
                                <form method="post" action='aanvragen/goed/{{$mod["Id"]}}'>
                                    {{ csrf_field() }}
                                    <!-- Modal openen voor edit functie. -->
                                    <button type="submit" class="card-footer-item btn btn-success btn-md"><span class="glyphicon glyphicon-ok"></span> OK</button>
                                </form>
                            </div>
                        </td>
                        <td style="width:5%;">
                            <div class="inline-forms">
                                <form method="post" action='aanvragen/slecht/{{$mod["Id"]}}'>
                                    {{ csrf_field() }}
                                    <!-- Modal openen voor edit functie. -->
                                    <button type="submit" class="card-footer-item btn btn-warning btn-md"><span class="glyphicon glyphicon-minus"></span> NOK</button>
                                </form>
                            </div>
                        </td>
                        <td style="width:5%;">
                            <input name="_method" type="hidden" value="DELETE"/>
                            {{ csrf_field() }}
                            <!-- Modal openen van de delete functie. -->
                            <button onclick='toggleModalAanvraag({{$mod["Id"]}});' class="kb-button btn btn-danger btn-md" type="submit" data-toggle="modal" data-target="#deleteModelAanvraag" value='{{$mod["Id"]}}'><span class="glyphicon glyphicon-remove"></span> Verwijder</button>  
                        </td>
                        <td style="width:5%;">
                            <div class="inline-forms">
                                <form method="post" action='aanvragen/reset/{{$mod["Id"]}}'>
                                    {{ csrf_field() }}
                                    <!-- Modal openen voor edit functie. -->
                                    <button type="submit" class="card-footer-item btn btn-info btn-md"><span class="glyphicon glyphicon-exclamation-sign"></span> Reset</button>
                                </form>
                            </div>
                        </td>
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
                        <td style="width:80%;"><?=$program["Prefix"]?><?=$program["Info"]?> <br> <a href="<?=$program["Link"]?>" target="_blank"><?=$program["Link"]?></a><?=$program["Suffix"]?></td>
                        <td style="width:5%;">
                            <div class="inline-forms">
                                <form method="post" action='aanvragen/goed/{{$program["Id"]}}'>
                                    {{ csrf_field() }}
                                    <!-- Modal openen voor edit functie. -->
                                    <button type="submit" class="card-footer-item btn btn-success btn-md"><span class="glyphicon glyphicon-ok"></span> OK</button>
                                </form>
                            </div>
                        </td>
                        <td style="width:5%;">
                            <div class="inline-forms">
                                <form method="post" action='aanvragen/slecht/{{$program["Id"]}}'>
                                    {{ csrf_field() }}
                                    <!-- Modal openen voor edit functie. -->
                                    <button type="submit" class="card-footer-item btn btn-warning btn-md"><span class="glyphicon glyphicon-minus"></span> NOK</button>
                                </form>
                            </div>
                        </td>
                        <td style="width:5%;">
                            <input name="_method" type="hidden" value="DELETE"/>
                            {{ csrf_field() }}
                            <!-- Modal openen van de delete functie. -->
                            <button onclick='toggleModalAanvraag({{$program["Id"]}});' class="kb-button btn btn-danger btn-md" type="submit" data-toggle="modal" data-target="#deleteModelAanvraag" value='{{$program["Id"]}}'><span class="glyphicon glyphicon-remove"></span> Verwijder</button>  
                        </td>
                        <td style="width:5%;">
                            <div class="inline-forms">
                                <form method="post" action='aanvragen/reset/{{$program["Id"]}}'>
                                    {{ csrf_field() }}
                                    <!-- Modal openen voor edit functie. -->
                                    <button type="submit" class="card-footer-item btn btn-info btn-md"><span class="glyphicon glyphicon-exclamation-sign"></span> Reset</button>
                                </form>
                            </div>
                        </td>
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
                        <td style="width:80%;"><?=$ander["Prefix"]?><?=$ander["Info"]?> <br> <a href="<?=$ander["Link"]?>" target="_blank"><?=$ander["Link"]?></a><?=$ander["Suffix"]?></td>
                        <td style="width:5%;">
                            <div class="inline-forms">
                                <form method="post" action='aanvragen/goed/{{$ander["Id"]}}'>
                                    {{ csrf_field() }}
                                    <!-- Modal openen voor edit functie. -->
                                    <button type="submit" class="card-footer-item btn btn-success btn-md"><span class="glyphicon glyphicon-ok"></span> OK</button>
                                </form>
                            </div>
                        </td>
                        <td style="width:5%;">
                            <div class="inline-forms">
                                <form method="post" action='aanvragen/slecht/{{$ander["Id"]}}'>
                                    {{ csrf_field() }}
                                    <!-- Modal openen voor edit functie. -->
                                    <button type="submit" class="card-footer-item btn btn-warning btn-md"><span class="glyphicon glyphicon-minus"></span> NOK</button>
                                </form>
                            </div>
                        </td>
                        <td style="width:5%;">
                            <input name="_method" type="hidden" value="DELETE"/>
                            {{ csrf_field() }}
                            <!-- Modal openen van de delete functie. -->
                            <button onclick='toggleModalAanvraag({{$ander["Id"]}});' class="kb-button btn btn-danger btn-md" type="submit" data-toggle="modal" data-target="#deleteModelAanvraag" value='{{$ander["Id"]}}'><span class="glyphicon glyphicon-remove"></span> Verwijder</button>  
                        </td>
                        <td style="width:5%;">
                            <div class="inline-forms">
                                <form method="post" action='aanvragen/reset/{{$ander["Id"]}}'>
                                    {{ csrf_field() }}
                                    <!-- Modal openen voor edit functie. -->
                                    <button type="submit" class="card-footer-item btn btn-info btn-md"><span class="glyphicon glyphicon-exclamation-sign"></span> Reset</button>
                                </form>
                            </div>
                        </td>
                    </tr>                
                </table>

            @endforeach 

        @endif

    </div>

</section>

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