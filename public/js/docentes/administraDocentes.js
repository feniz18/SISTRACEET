function infDocente(documento){
  $('#error').hide();
  $('#final').hide();
  $('#cedulaIni').val(documento);
  $('#cedula').val(documento);

  $.ajax({

    type: 'GET',
    url: "api/admin/" + documento,
    beforeSend:function(){

      $('#modalContenido').fadeOut();
      $('#cargaModal').fadeIn();

    },
    success: function(datos){

    var fecha_nacimiento = datos.fecha_nacimiento;
    fecha_nacimiento = fecha_nacimiento.replace(/-/g,'/');
    $('#nombres').val(datos.nombres);
    $('.fecha_nacimiento').val(fecha_nacimiento);
    $('#apellidos').val(datos.apellidos);
    $('#telefono').val(datos.telefono);
    $('#email').val(datos.email);
    $('#hora_inicio').val(datos.hora_inicio);
    $('#hora_fin').val(datos.hora_fin);

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

          type: 'GET',
          url: "api/combo/ciudad/" + usuario[0].departamento_id,
          complete:function(){$('#cargaModal').fadeOut(1000);},
          success:function(ciudad){

            var municipios = "";
            for (var i = 0; i < ciudad.length; i++) {
              if (usuario[0].id_ciudad == ciudad[i].id_ciudad ) {
                municipios = municipios + "<option value=" + ciudad[i].id_ciudad + " selected>"+ ciudad[i].nombre + "</option>";
              }else{

                  municipios = municipios + "<option value=" + ciudad[i].id_ciudad + ">"+ ciudad[i].nombre + "</option>";
              }
            }

            $('#ciu').html(municipios);
            $('#modalContenido').fadeIn(1000);
          }

        });
      });
    }
      //fin relleno ciudad

  });

  $.ajax({
    type: 'GET',
    url: '/semana/'+ documento,
    success:function(semana){
      $('#check-dias input:checkbox').prop('checked',false);
      for(var i=0; i<semana.length;i++){

        $('#chulo-' + semana[i]).prop('checked',true);

      }

    },

  });

}
