<?php 

    $idCategoria = $_POST['idCategoria'];
    $nombreCategoria = $_POST['nombreu'];

    include "../../clases/Categorias.php";

    $Categorias = new Categorias();

    echo $Categorias->actualizarCategoria($idCategoria, $nombreCategoria);

?>