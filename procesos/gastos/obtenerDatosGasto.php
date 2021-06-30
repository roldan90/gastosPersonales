<?php 

    $idGasto = $_POST['idGasto'];
    include "../../clases/Gastos.php";

    $Gastos = new Gastos();
    echo json_encode($Gastos->obtenerDatosGasto($idGasto));

?>