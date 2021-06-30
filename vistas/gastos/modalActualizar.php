<!-- Modal -->
<div class="modal fade" id="modalActualizarGasto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Actualizar gasto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="post" id="frmActualizarGasto" onsubmit="return actualizarGasto()">
                <input type="text" hidden name="idGastou" id="idGastou">
                <div id="cargaCategoriasUpdate"></div>
                <label for="nombreGastou">Nombre</label>
                <input type="text" id="nombreGastou" name="nombreGastou" class="form-control" required>
                <label for="montou">Monto</label>
                <input type="text" id="montou" name="montou" class="form-control" required>
                <br>
                <button class="btn btn-warning">Actualizar</button>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
        </div>
    </div>
    </div>
