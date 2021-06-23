<?php 

    $nombre = $_POST['inputUserame'];
    $email = $_POST['inputEmail'];
    $password = $_POST['inputPassword'];

    include "../../clases/RegistroUsuario.php";
    $RegistroUsuario = new RegistroUsuario();

    echo $RegistroUsuario->registro($nombre, $email, $password);
?>