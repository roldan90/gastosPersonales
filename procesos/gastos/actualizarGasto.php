<?php 

    $idGastou = $_POST['idGastou'];
    $id_categoriau = $_POST['id_categoriau'];
    $nombreGastou = $_POST['nombreGastou'];
    $montou = $_POST['montou'];

    include "../../clases/Gastos.php";

    $Gastos = new Gastos();
    echo $Gastos->actualizarGasto($id_categoriau, $nombreGastou, $montou, $idGastou);
?>