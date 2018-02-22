<div class="modal fade" id="editModal" role="dialog">
    <div class="modal-dialog modal-lg" style="left: auto; width:840px;">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div>
                    <!-- Tekst hoofdpagina -->
                    <div class="updateTekstVoorPagina">
                        <form class="centerVidLink" method="post" action="/">
                            <div>
                            {{csrf_field()}}
                                <p  style="color:black;">
                                    Aanpassen van Bericht. {{$berichten}}
                                </p>
                                <input size="48" name="edit" type="text" placeholder="Plaats hier een bericht. Voor link voeg <a> toe." id="edit" value="" required/>
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
  function toggleModalEdit(BerichtID) {
      document.getElementById("DeleteBericht").action = "/dashboard/update/" + BerichtID;
}
</script>
