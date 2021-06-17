

$(document).ready(function(){

    $('#tablaCategoriasLoad').load("categorias/tablaCategorias.php");

});


function actualizaCategoria(){

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
            
        } 
    });
}