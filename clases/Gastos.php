<?php

    include "Conexion.php";

    class Gastos extends Conexion {
        public function agregarGasto($idCategoria, $nombreGasto, $monto) {
            $conexion = Conexion::conectar();

            $sql = "INSERT INTO t_gastos (id_categoria,
                                            nombre,
                                            monto) 
                        VALUES ('$idCategoria','$nombreGasto','$monto')";
            $respuesta = mysqli_query($conexion, $sql);

            return $respuesta;
        }

        public function eliminarGasto($idGasto) {
            $conexion = Conexion::conectar();

            $sql = "DELETE FROM t_gastos WHERE id_gasto = '$idGasto'";
            $respuesta = mysqli_query($conexion, $sql);

            return $respuesta;
        }
    }

?>