<?php
    session_start();
    if (isset($_SESSION['usuario'])) {
        include "header.php"; 
?>

<div class="container">
    <h1>Administracion de gastos</h1>

    <div class="row">
        <div class="col">
            <span class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarGasto" id="#btnCargaGasto">
                <span class="far fa-money-bill-alt"></span> Agregar nuevo gasto
            </span>
            <hr>
            <div id="cargaTablaGastos"></div>
        </div>
    </div>

</div>

<?php
    include "gastos/modalAgregar.php";
    include "gastos/modalActualizar.php";
?>

<?php include "footer.php"; ?>
<script src="../public/js/gastos.js"></script>


<?php 
    } else {
        header("location:../index.php");
    }
?>