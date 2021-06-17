<?php 
     //si es insert o update
    $tipoOrden = "insert";

    if (isset($_GET['idCategoria'])) {
        $tipoOrden = "update";
    }

    include "../../clases/Conexion.php";
    $Conexion = new Conexion();
    $con = $Conexion->conectar();
    $sql = "SELECT id_categoria, nombre FROM t_categorias";
    $respuesta = mysqli_query($con, $sql);

    $controlCompuesto = "";
    
    if ($tipoOrden == "insert") {
        $cadena = '<select id="id_categoria" name="id_categoria" class="form-control">';

        while($ver = mysqli_fetch_array($respuesta)){
            $cadena = $cadena . '<option value="' . $ver['id_categoria'] . '">' . $ver['nombre'] . '</option>';
        }

        $controlCompuesto = $cadena . '</select>';
    } else if ($tipoOrden == "update") {
        $cadena = '<select id="id_categoriau" name="id_categoriau" class="form-control">';

        while($ver = mysqli_fetch_array($respuesta)){
            if ($ver['id_categoria'] == $_GET['idCategoria']) {
                $cadena = $cadena . '<option selected value="' . $ver['id_categoria'] . '">' . $ver['nombre'] . '</option>';
            } else {
                $cadena = $cadena . '<option value="' . $ver['id_categoria'] . '">' . $ver['nombre'] . '</option>';
            }
        }

        $controlCompuesto = $cadena . '</select>';
    }
    
    echo '<label> Categoria </label>' . $controlCompuesto;
?>