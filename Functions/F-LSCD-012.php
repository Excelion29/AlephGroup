<div class="container-fluid" >
    <div class="row text-center">
        <div class="col-12 border">
            <div class="content" style="overflow-x: auto;white-space: nowrap;">
                <div class="modal-header">
                    <h5 class="modal-title">LSCD-012</h5>
                </div>
                <div class="card-body">
                    <div class="author">
                        <div id="contLSCD012" class="table-responsive">
                        </div>
                    </div>
                </div>
                <div class="card-footer">      
                    <input type="submit" class="button btn btn-primary btn-round" value="Guardar">
                </div>
            </div>
        </div>
        <div class="col-12 border">
            <div class="content" style="overflow-x: auto;white-space: nowrap;">
                <div class="modal-header">
                    <h5 class="modal-title">Respuesta</h5>
                </div>
                <div class="card-body">
                    <div class="author">
                        <div id="contRLSCD012" class="table-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script></script>
<script>  
  var data = '<?=json_encode( $_POST['tasaVCV'] );?>';
</script>
<script src="./Public/JS/F-LSCD-012.js"></script>