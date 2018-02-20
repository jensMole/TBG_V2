<div class="modal fade" id="deleteModel" role="dialog">
    <div class="modal-dialog modal-lg" style="left: auto;">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div>
                    <!-- Tekst hoofdpagina -->
                    <div class="updateTekstVoorPagina">
                        <form class="centerVidLink" id="DeleteBericht" method="post" action="/">
                            <div>
                                {{csrf_field()}}
                                <div class="field">
                                    <p  style="color:black;">
                                    U staat op het punt een bericht te verwijderen!<br>
                                    Bent u zeker?
                                    </p>
                                </div><br>
                            </div>
                            <br/>
                            <div class="col-xs-3"></div>
                            <button type="submit" value="Submit" class="submitButton col-xs-6">Opslaan</button>
                            <div class="col-xs-3"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
  function toggleModal(gegevensId) {
      console.log(gegevensId);
      document.getElementById("DeleteBericht").action = "";
      console.log("testje");
}
</script>
