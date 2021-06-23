function registro() {
    $.ajax({
        type:"POST",
        data:$('#frmRegistro').serialize(),
        url:"procesos/registro/registro.php",
        success:function(respuesta) {
            if (respuesta == 1) {
                $('#frmRegistro')[0].reset();
                swal(":D","Registrado con exito!","success");
            } else {
                swal(":(","No se pudo registrar!" + respuesta, "error");
            }
        }
    });

    return false;
}

function login() {
    $.ajax({
        type:"POST",
        data:$('#frmLogin').serialize(),
        url:"procesos/login/login.php",
        success:function(respuesta) {
            if (respuesta == 1) {
                window.location.href = "vistas/inicio.php";
            } else {
                swal(":(", "No se pudo ingresar :(" + respuesta, "error");
            }
        }
    });

    return false;
}