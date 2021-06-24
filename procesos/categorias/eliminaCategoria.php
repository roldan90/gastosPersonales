<?php 

    $idCategoria = $_POST['idCategoria'];

    include "../../clases/Categorias.php";
    $Categorias = new Categorias();

    echo $Categorias->eliminarCategoria($idCategoria);

?>