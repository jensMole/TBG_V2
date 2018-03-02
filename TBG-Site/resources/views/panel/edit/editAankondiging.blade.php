<!DOCTYPE html>
<html lang="nl">
    <head>
    <title>Edit aankondigingen</title>
    <link rel="shortcut icon" href="../../afbeeldingen/youtubeTBG.png"/>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="/css/cssHoofd.css" type="text/css" rel="stylesheet"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    </head>
    <body>
        <div id="editModal" class="col-xs-12" role="dialog">
            <div class="modal-dialog modal-lg" style="left: auto; width:840px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <div>
                            <!-- Tekst hoofdpagina -->
                            <div class="updateTekstVoorPagina">
                                <form class="centerVidLink" id="EditAankondiging" method="post" action="updateAankondiging/<?php echo $ID ?>">
                                    <div>
                                        <p  style="color:black;">
                                            Aanpassen van een aankondiging.
                                        </p>
                                        {{csrf_field()}}
                                        <textarea rows="3" cols="10" class="aankonding" name="aankonding" placeholder="Plaats hier een aankondiging. Voor link voeg <a> toe." id="aankondingTekst" required><?= htmlspecialchars_decode($aankondigingTransform);?></textarea>
                                    </div>
                                    <br/>
                                        <div class="col-xs-3"></div>
                                        <button type="submit" value="Submit" class="submitButton col-xs-2">Opslaan</button>
                                        <div class="col-xs-2"></div>
                                        <!-- Terugsturen naar het vorig scherm -->
                                        <a style="text-decoration:none;" href="{{ URL::previous() }}#aankondigingen" class="AnulateButton col-xs-2">Annuleer</a>
                                        <div class="col-xs-3"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>

        // Nakijken als je op het begin spatie wilt meegeven.
        $(function() {
            $('body').on('keydown', '.aankonding', function(e) {
                if (e.which === 32 &&  e.target.selectionStart === 0) {
                return false;
                }
            });
        });

        </script>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- SmartMenus jQuery plugin -->
        <script src="/js/jquery.smartmenus.js"></script>
    </body>
</html>