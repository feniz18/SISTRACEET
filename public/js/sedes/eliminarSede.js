$(document).on('click','.borrar', function(event){

  var id = $(this).attr('value');
  var confirmacion = confirm("Desea eliminar esta Sede");
  var row = $(this).parents('tr');


  if (confirmacion) {

    $.ajax({
      type:"GET",
      url: "/sedes/eliminar/" + id ,
      success: function(respuesta){

        if(respuesta){

          alert('Sede eliminada correctamente');

          row.fadeOut();

        }else {
          alert('No se pudo eliminar la sede');
        }
      }
    });
  }
});
