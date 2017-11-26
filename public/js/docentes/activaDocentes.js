function activaDocente(cedula,activo){
  var confirmacion;
      if (activo == 1) {
        confirmacion = confirm("Desea desactivar el usuario");
      }else{
        confirmacion = confirm("Desea activar el usuario");
      }

      if(confirmacion){
        $.ajax({
          type:"GET",
          url: "/instructor/activar/" + cedula,
          success: function(respuesta){
            if(respuesta){
              $("#" + cedula).html('<i class="fa fa-check-square" style="color:green">');
              $("#" + cedula).attr('onClick','activaDocente('+ cedula +',1);');
            }else{
              $("#" + cedula).html('<i class="fa fa-square-o" style="color:red">');
              $("#" + cedula).attr('onClick','activaDocente('+ cedula +',0);');
            }
          }

        });
      }


}
