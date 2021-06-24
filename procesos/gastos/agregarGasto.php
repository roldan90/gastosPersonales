<?php 

    $idCategoria = $_POST['id_categoria'];
    $nombreGasto = $_POST['nombreGasto'];
    $monto = $_POST['monto'];

    include "../../clases/Gastos.php";

    $Gastos = new Gastos();
    echo $Gastos->agregarGasto($idCategoria, $nombreGasto, $monto);

?>