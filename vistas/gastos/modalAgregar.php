
<!-- Modal -->
    <div class="modal fade" id="modalAgregarGasto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agregar gasto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="post" id="frmAgregarGasto" onsubmit="return agregarGasto()">
                <div id="cargaCategorias"></div>
                <label for="nombreGasto">Nombre</label>
                <input type="text" id="nombreGasto" name="nombreGasto" class="form-control" required>
                <label for="monto">Monto</label>
                <input type="text" id="monto" name="monto" class="form-control" required>
                <br>
                <button class="btn btn-primary">Guardar</button>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
        </div>
    </div>
    </div>
