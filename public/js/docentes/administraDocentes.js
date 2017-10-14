function infDocente(documento){
  $('#cedulaIni').attr('value',documento);
  $('#cedula').attr('value',documento);

  $.get("api/admin/" + documento,function(datos){
    
    var fecha_nacimiento = datos.fecha_nacimiento;
    fecha_nacimiento = fecha_nacimiento.replace(/-/g,'/');
    $('#nombres').attr('value',datos.nombres);
    $('.fecha_nacimiento').attr('value',fecha_nacimiento);
    $('#apellidos').attr('value',datos.apellidos);
    $('#telefono').attr('value',datos.telefono);
    $('#email').attr('value', datos.email);

      $.get("/api/combo/ciudad/usuario/" + datos.cedula,function(usuario){
        // funcion encargada de rellenar departamentos
        $.get("/api/combo/departamento",function(departamentos){
          var departamentosHTML = "";
            for (var i = 0; i < departamentos.length; i++) {

                if (departamentos[i].id_departamento == usuario[0].departamento_id ) {
                      departamentosHTML = departamentosHTML + "<option value=" + departamentos[i].id_departamento + " selected>" + departamentos[i].nombre + "</option>";
                }else{

                    departamentosHTML = departamentosHTML + "<option value=" + departamentos[i].id_departamento + ">" + departamentos[i].nombre + "</option>";

                }

            }
            $('#dep').html(departamentosHTML);
        });

        // funcion encargada de rellenar la ciudad
        $.get("api/combo/ciudad/" + usuario[0].departamento_id,function(ciudad){

            var municipios = "";
            for (var i = 0; i < ciudad.length; i++) {
              if (usuario[0].id_ciudad == ciudad[i].id_ciudad ) {
                municipios = municipios + "<option value=" + ciudad[i].id_ciudad + " selected>"+ ciudad[i].nombre + "</option>";
              }else{

                  municipios = municipios + "<option value=" + ciudad[i].id_ciudad + ">"+ ciudad[i].nombre + "</option>";
              }
            }

            $('#ciu').html(municipios);
        });

      });

      //fin relleno ciudad



  });

}
