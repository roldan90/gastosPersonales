<?php
    session_start();
    if (isset($_SESSION['usuario'])) {
        include "header.php"; 
?>

<div class="container">
<h2>Administrar categorias de gastos</h2>
    <div class="row">
        <div class="col">
            <span class="btn btn-primary" data-toggle="modal" data-target="#modalAgregar"> 
                <span class="fas fa-plus-square"></span> Agregar Categoria
            </span>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div id="tablaCategoriasLoad"></div>
        </div>
    </div>
</div>


<?php 
    include "categorias/modalAgregar.php";
    include "categorias/modalActualizar.php"; 
?>

<?php include "footer.php"; ?>
<script src="../public/js/categorias.js"></script>

<?php 
    } else {
        header("location:../index.php");
    }
?>