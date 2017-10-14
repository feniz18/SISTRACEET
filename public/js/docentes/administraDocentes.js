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

    var departamentos = returnDepartamento();

    var departamentosHTML;

      /*for (var i = 0; i < departamentos.length; i++) {

        departamentosHTML = departamentosHTML + "<option value=" + departamentos[i].id_departamento + ">" + departamentos[i].nombre + "</option>";

      }*/


    alert(departamentos);
    alert(departamentos[0].nombre);

    /*var uDepartamento = returnDepartamentoPersona(datos.cedula);

    var ciudad = returnCiudad(uDepartamento.departamento_id);

    var ciudadHTML;

    for(var ciudades in ciudad){

        ciudadHTML = ciudadHTML + "<option>" + ciudades.nombre + "</option>";

    }*/

    var fecha_nacimiento = datos.fecha_nacimiento;
    fecha_nacimiento = fecha_nacimiento.replace(/-/g,'/');
  	$('#nombres').attr('value',datos.nombres);
  	$('.fecha_nacimiento').attr('value',fecha_nacimiento);
  	$('#apellidos').attr('value',datos.apellidos);
  	$('#telefono').attr('value',datos.telefono);
    $('#email').attr('value', datos.email);

    /*$(document).ready(function() {
         $('#combo').html(departamentosHTML);
    });*/







  });

}

function returnDepartamento(){

      /*$.get("/api/combo/departamento",function(departamentos){

          alert(departamentos[0].nombre);
          return departamentos;

      });*/

    var result = null;
    var scriptUrl = "/api/combo/departamento";
    $.ajax({
       url: scriptUrl,
       type: 'get',
       dataType: 'html',
       async: false,
       success: function(datos) {
           result = datos;
       }
    });

    alert(result);
    alert(result[nombre]);
    return result;

}

function returnCiudad(departamento){

  $.get("api/combo/ciudad/" + departamento,function(ciudad){

      return ciudad;

  });

}

function returnDepartamentoPersona(cedula)
{
    $.get("/api/combo/ciudad/usuario/" + cedula,function(ciudad){

        return ciudad;

    });
}
