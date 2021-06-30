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

        public function actualizarGasto($idCategoria, $nombre, $monto, $idGasto) {
            $conexion = Conexion::conectar();

            $sql = "UPDATE t_gastos SET id_categoria = '$idCategoria',
                                        nombre = '$nombre',
                                        monto = '$monto' 
                    WHERE id_gasto = '$idGasto'";
            $respuesta =  mysqli_query($conexion, $sql);

            return $respuesta;
        }

        public function obtenerDatosGasto($idGasto) {
            $conexion = Conexion::conectar();

            $sql = "SELECT * FROM t_gastos WHERE id_gasto = '$idGasto'";
            $respuesta = mysqli_query($conexion, $sql);

            $gasto = mysqli_fetch_array($respuesta);

            $datos = array(
                'id_gasto' => $gasto['id_gasto'],
                'id_categoria' => $gasto['id_categoria'],
                'nombre' => $gasto['nombre'],
                'monto' => $gasto['monto'],
                'fecha' => $gasto['fecha']
            );

            return $datos;
        }
    }

?>