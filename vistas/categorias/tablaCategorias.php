
<?php 

    include "../../clases/Conexion.php";

    $Conexion = new Conexion();
    $con = $Conexion->conectar();

    $sql = "SELECT * FROM t_categorias";
    $repsuesta = mysqli_query($con, $sql);
?>

<div class="table-responsive">
    <table class="table table-hover table-condensed table-bordered" id="categoriasDataTable">
        <thead>
            <th>Nombre</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
        <?php while($ver = mysqli_fetch_row($repsuesta)): ?>
            <tr>
                <td><?php echo $ver[1]; ?></td>
                <td>
                    <span onclick="obtenerCategoria('<?php echo $ver[0]; ?>')" 
                            class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalActualizar">
                        <span class="fas fa-edit"></span>
                    </span>
                </td>
                <td>
                    <span class="btn btn-danger btn-sm" onclick="eliminarCategoria('<?php echo $ver[0]; ?>')">
                        <span class="fas fa-trash-alt"></span>
                    </span>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function(){
        $('#categoriasDataTable').DataTable();
    });
</script>