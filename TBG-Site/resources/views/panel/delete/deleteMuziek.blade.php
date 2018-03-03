<div class="modal fade" id="deleteModelMuziek" role="dialog">
    <div class="modal-dialog modal-lg" style="left: auto;">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div>
                    <!-- Tekst hoofdpagina -->
                    <div class="updateTekstVoorPagina">
                        <form class="centerVidLink" id="DeleteMuziek" method="post" action="/">
                            <div>
                                {{csrf_field()}}
                                <div class="field">
                                    <p  style="color:black;">
                                    U staat op het punt een Muziek link te verwijderen!<br>
                                    Bent u zeker?
                                    </p>
                                </div><br>
                            </div>
                            <br/>
                            <div class="col-xs-3"></div>
                            <button type="submit" value="Submit" class="submitButtonDelete btn-danger col-xs-6">Verwijderen</button>
                            <div class="col-xs-3"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
  function toggleModalMuziek(muziekID) {
    document.getElementById("DeleteMuziek").action = "/muziek/" + muziekID;
  }
</script>
