
<?php 

    include "../../clases/Conexion.php";

    $Conexion = new Conexion();
    $con = $Conexion->conectar();

    $sql = "SELECT 
                gastos.id_gasto as idGasto,
                categoria.nombre as nombreCategoria,
                gastos.nombre as nombreGasto,
                gastos.monto as monto,
                gastos.fecha as fecha
            FROM
                t_gastos AS gastos
                    INNER JOIN
                t_categorias AS categoria ON gastos.id_categoria = categoria.id_categoria";
    $respuesta = mysqli_query($con, $sql);

?>


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
        <?php while($ver = mysqli_fetch_array($respuesta)): ?>
            <tr>
                <td><?php echo $ver['nombreCategoria']; ?></td>
                <td><?php echo $ver['nombreGasto']; ?></td>
                <td><?php echo "$" . $ver['monto']; ?></td>
                <td><?php echo $ver['fecha']; ?></td>
                <td>
                    <span class="btn btn-warning" data-toggle="modal" data-target="#modalActualizarGasto">
                        <span class="fas fa-edit"></span>
                    </span>
                </td>
                <td>
                    <span class="btn btn-danger" onclick="eliminarGasto('<?php echo $ver['idGasto'] ?>')">
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
        $('#gastosDatatable').DataTable();
    });
</script>