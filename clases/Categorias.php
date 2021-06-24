
<?php 

    include "Conexion.php";

    class Categorias extends Conexion {
        
        public function agregarCategoria($nombreCategoria) {
            $conexion = Conexion::conectar();

            $sql = "INSERT INTO t_categorias (nombre) VALUES ('$nombreCategoria')";
            $respuesta = mysqli_query($conexion, $sql);

            return $respuesta;
        }

        public function actualizarCategoria($idCategoria, $nombreCategoria) {
            $conexion = Conexion::conectar();

            $sql = "UPDATE t_categorias 
                    SET nombre = '$nombreCategoria' 
                    WHERE id_categoria = '$idCategoria'";
            $respuesta = mysqli_query($conexion, $sql);

            return $respuesta;
        }

        public function eliminarCategoria($idCategoria) {
            $conexion = Conexion::conectar();

            $sql = "DELETE FROM t_categorias WHERE id_categoria = '$idCategoria'";
            $respuesta = mysqli_query($conexion, $sql);

            return $respuesta;
        }

        public function obtenerCategoria($idCategoria) {
            $conexion = Conexion::conectar();

            $sql = "SELECT * FROM t_categorias WHERE id_categoria = '$idCategoria'";
            $respuesta = mysqli_query($conexion, $sql);
            $datos = mysqli_fetch_row($respuesta);

            $datosCategoria = array(
                "id_categoria" => $datos[0],
                "nombre" => $datos[1]
            );

            return $datosCategoria;
        }

    }
?>