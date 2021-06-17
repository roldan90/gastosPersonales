<div class="table-responsive">
    <table class="table table-hover table-condensed table-bordered" id="gastosDatatable">
        <thead>
            <th>Categoria</th>
            <th>Nombre</th>
            <th>Monto</th>
            <th>Fecha</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <span class="btn btn-warning" data-toggle="modal" data-target="#modalActualizarGasto">
                        <span class="fas fa-edit"></span>
                    </span>
                </td>
                <td>
                    <span class="btn btn-danger">
                        <span class="fas fa-trash-alt"></span>
                    </span>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function(){
        $('#gastosDatatable').DataTable();
    });
</script>