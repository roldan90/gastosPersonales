<?php 

    session_start();
    $email = $_POST['inputEmail'];
    $passowrd = $_POST['inputPassword'];

    include "../../clases/RegistroUsuario.php";
    $ResgitroUsuario = new RegistroUsuario();

    $respuesta = $ResgitroUsuario->loginUsuario($email, $passowrd);

    if ($respuesta > 0) {
        echo 1;
    } else {
        echo 0;
    }
?>