function infDocente(documento){

  $('#cedula').val(documento);

  $.get({
    type: 'GET',
    url: "api/admin/" + documento,

    success: function(datos){

    var fecha_nacimiento = datos.fecha_nacimiento;
    fecha_nacimiento = fecha_nacimiento.replace(/-/g,'/');
    $('#nombres').val(datos.nombres);
    $('#fecha_nacimiento').val(fecha_nacimiento);
    $('#apellidos').val(datos.apellidos);
    $('#telefono').val(datos.telefono);
    $('#email').val(datos.email);

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
        $.ajax({
          type:'get',
          url: "api/combo/ciudad/" + usuario[0].departamento_id,
          complete: function(){
            $('#carga').fadeOut(500);
          },
          success: function(ciudad){

            var municipios = "";
            for (var i = 0; i < ciudad.length; i++) {
              if (usuario[0].id_ciudad == ciudad[i].id_ciudad ) {
                municipios = municipios + "<option value=" + ciudad[i].id_ciudad + " selected>"+ ciudad[i].nombre + "</option>";
              }else{

                  municipios = municipios + "<option value=" + ciudad[i].id_ciudad + ">"+ ciudad[i].nombre + "</option>";
              }
            }

            $('#ciu').html(municipios);
            $('#contenido').fadeIn(1000);
          }
        });

      });
        //llenado de documentos
    }
      //fin relleno ciudad

  });

}
