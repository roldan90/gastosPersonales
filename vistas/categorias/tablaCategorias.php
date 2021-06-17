<div class="table-responsive">
    <table class="table table-hover table-condensed table-bordered" id="categoriasDataTable">
        <thead>
            <th>Nombre</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td>
                    <span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalActualizar">
                        <span class="fas fa-edit"></span>
                    </span>
                </td>
                <td>
                    <span class="btn btn-danger btn-sm" onclick="eliminarCategoria()">
                        <span class="fas fa-trash-alt"></span>
                    </span>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function(){
        $('#categoriasDataTable').DataTable();
    });
</script>