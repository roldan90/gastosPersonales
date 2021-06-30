$(document).ready(function(){

    $('#cargaTablaGastos').load('gastos/tablaGastos.php');
    $('#cargaCategorias').load('categorias/cargaCategorias.php');

});

function agregarGasto() {
    $.ajax({
        type:"POST",
        data:$('#frmAgregarGasto').serialize(),
        url:"../procesos/gastos/agregarGasto.php",
        success:function(respuesta) {
            if (respuesta == 1) {
                $('#cargaTablaGastos').load('gastos/tablaGastos.php');
                $('#frmAgregarGasto')[0].reset();
                swal(":D","Se agrego con exito!","success");
            } else {
                swal(":(","No se pudo agregar" + respuesta, "error");
            }
        }
    });

    return false;
}


function eliminarGasto(idGasto) {
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
                data:"idGasto=" + idGasto,
                url:"../procesos/gastos/eliminarGasto.php",
                success:function(respuesta) {
                    if (respuesta == 1) {
                        $('#cargaTablaGastos').load('gastos/tablaGastos.php');
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

function obtenerDatosGasto(idGasto) {

    $.ajax({
        type:"POST",
        data:"idGasto=" + idGasto,
        url:"../procesos/gastos/obtenerDatosGasto.php",
        success:function(respuesta) {
            respuesta = jQuery.parseJSON(respuesta);

            $('#nombreGastou').val(respuesta['nombre']);
            $('#montou').val(respuesta['monto']);
            $('#idGastou').val(respuesta['id_gasto']);

            $('#cargaCategoriasUpdate').load("categorias/cargaCategorias.php?idCategoria=" + respuesta['id_categoria']);
        }
    });

}

function actualizarGasto() {
    $.ajax({
        type:"POST",
        data:$('#frmActualizarGasto').serialize(),
        url:"../procesos/gastos/actualizarGasto.php",
        success:function(respuesta) {
            if (respuesta == 1) {
                $('#cargaTablaGastos').load('gastos/tablaGastos.php');
                swal(":D","Se actualizo con exito!","success");
            } else {
                swal(":(","No se pudo actualizar" + respuesta, "error");
            }
        }
    });

    return false;
}