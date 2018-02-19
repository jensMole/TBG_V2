<div class="modal fade" id="deleteModel" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div>
                    <!-- Tekst hoofdpagina -->
                    <div class="col-sm-3 updateTekstVoorPagina">
                        <form class="centerVidLink" method="post" action="">
                            <div>
                                {{csrf_field()}}
                                <div class="field">
                                    <p>
                                    U staat op het punt  te verwijderen!<br>
                                    Bent u zeker?
                                    </p>
                                </div><br>
                            </div>
                            <br/>
                            <button type="submit" value="Submit" class="submitButton col-sm-12">Opslaan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
  function toggleModal(gegevensId) {
    //   document.getElementById("confirmAction").action = "/beacons/" + beaconId;
      var element = document.getElementById("confirmModal");
      element.classList.toggle("is-active");
      console.log("testje");
}
function ToggleModal() {
  var element = document.getElementById("confirmModal");
  element.classList.toggle("is-active");
}
</script>
