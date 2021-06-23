<?php 
    include "Conexion.php";

    class RegistroUsuario extends Conexion {
        public function registro($nombre, $email, $password) {
            $conexion = Conexion::conectar();
            $password = sha1($password);

            $sql = "INSERT INTO t_usuarios (nombre, 
                                            email, 
                                            password) 
                    VALUES ('$nombre', 
                            '$email', 
                            '$password')";

            $respuesta = mysqli_query($conexion, $sql);
            return $respuesta;
        }

        public function loginUsuario($email, $password) {
            $conexion = Conexion::conectar();
            $password = sha1($password);

            $sql = "SELECT * FROM t_usuarios 
                    WHERE email = '$email' AND password = '$password'";
            $respuesta = mysqli_query($conexion, $sql);
            $retorno = mysqli_num_rows($respuesta);

            if ($retorno > 0) {
                $_SESSION['usuario'] = $email;
            }

            return $retorno;
        }


    }

?>