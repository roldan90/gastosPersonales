<?php 
    $nombreCategoria = $_POST['nombre'];
    include "../../clases/Categorias.php";

    $Categorias = new Categorias();
    echo $Categorias->agregarCategoria($nombreCategoria);
?>