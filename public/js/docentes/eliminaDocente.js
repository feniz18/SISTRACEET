$(document).on('click','.borrar', function(event){

  var cedula = $(this).attr('value');
  var confirmacion = confirm("Desea eliminar a este instructor");
  var row = $(this).parents('tr');


  if (confirmacion) {

    $.ajax({
      type:"GET",
      url: "/instructor/eliminar/" + cedula ,
      success: function(respuesta){

        if(respuesta){

          alert('Usuario eliminado correctamente');
          
          row.fadeOut();

        }else {
          alert('No se pudo eliminar usuario');
        }

      }

    });

  }

});
