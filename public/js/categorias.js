

$(document).ready(function(){

    $('#tablaCategoriasLoad').load("categorias/tablaCategorias.php");

});

function agregarCategoria() {
    $.ajax({
        type:"POST",
        data:$('#frmAgregarCategoria').serialize(),
        url:"../procesos/categorias/agregarCategoria.php",
        success:function(respuesta) {
            if (respuesta == 1) {
                $('#tablaCategoriasLoad').load("categorias/tablaCategorias.php");
                $('#frmAgregarCategoria')[0].reset();
                swal(":D","Se agrego con exito!","success");
            } else {
                swal(":(","No se pudo actualizar" + respuesta, "error");
            }
        }
    });

    return false;
}

function obtenerCategoria(idCategoria) {
    $.ajax({
        type:"POST",
        data:"idCategoria=" + idCategoria,
        url:"../procesos/categorias/obtenerCategoria.php",
        success:function(respuesta) {
            respuesta = jQuery.parseJSON(respuesta);
            $('#idCategoria').val(respuesta['id_categoria']);
            $('#nombreu').val(respuesta['nombre']);
        }
    });
}

function actualizaCategoria() { 
    $.ajax({
        type:"POST",
        data:$('#frmActualizaCategoria').serialize(),
        url:"../procesos/categorias/actualizarCategoria.php",
        success:function(respuesta) {
            if (respuesta == 1) {
                $('#tablaCategoriasLoad').load("categorias/tablaCategorias.php");
                swal(":D","Se actualizo con exito!","success");
            } else {
                swal(":(","No se pudo actualizar" + respuesta, "error");
            }
        }
    });

    return false;
}

function eliminarCategoria(idCategoria) {
    swal({
        title: "Estas seguro de eliminar este registro?",
        text: "Una vez eliminado no podra ser recuperado!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            //aqui va el ajax
            $.ajax({
                type:"POST",
                data:"idCategoria=" + idCategoria,
                url:"../procesos/categorias/eliminaCategoria.php",
                success:function(respuesta) {
                    if (respuesta == 1) {
                        $('#tablaCategoriasLoad').load("categorias/tablaCategorias.php");
                        swal(":D","Eliminado con exito!","success");
                    } else {
                        swal(":(","No se pudo eliminar" + respuesta, "error");
                    }
                }
            });
        } 
    });

    return false;
}