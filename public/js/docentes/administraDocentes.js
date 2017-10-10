$(document).ready(function(){

    $('#formUpdate').on('submit',mensaje);

    function mensaje(evento){
      var confirmacion =confirm("Desea guardar la informacion");
      if(!confirmacion){
        evento.preventDefault();
      }
    }
});

function infDocente(documento){

  $('#cedula').attr('value',documento);

  $.get("api/admin/" + documento,function(datos){

  	$('#nombres').attr('value',datos.nombres);
  	$('.fecha_nacimiento').attr('value',datos.fecha_nacimiento);
  	$('#apellidos').attr('value',datos.apellidos);
  	$('#telefono').attr('value',datos.telefono);

  });

}
