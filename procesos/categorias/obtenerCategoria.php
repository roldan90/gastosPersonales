<?php 

    $idCategoria = $_POST['idCategoria'];

    include "../../clases/Categorias.php";
    $Categorias = new Categorias();

    echo json_encode($Categorias->obtenerCategoria($idCategoria));
?>