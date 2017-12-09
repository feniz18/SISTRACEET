$('#enviar').on('click',function(){


    var confirmacion = confirm("Desea guardar la informacion");
      if(confirmacion){
        //$('.modal').modal('hide');

        $.ajax({
            type:"POST",
            url: "/instructor/edit",
            data:$('#formUpdate').serialize(),
            success: function(respuesta){
              if(respuesta.final == undefined){

                $("#error").toggle(
                  function(e){
                    $('#error').slideDown();
                      var errorHTML = "";
                      $.each(respuesta, function(i, item) {

                          errorHTML = errorHTML + '<li>' + item + '</li>';

                      });

                      $('#listaErrores').html(errorHTML);
                  }
                );
              }else{

                $("#parrafoFinal").html(respuesta.final);

                $("#final").toggle(
                  function(e){
                    $(this).slideDown();
                  }
                );

                  $('.modal').modal('hide');
                  postActDocente();

                }
            },
        });
      }

});

function postActDocente(){

  $.ajax({

    type:"GET",
    url: "/instructor/edit/postEdit",
    success: function(respuesta){

      var activo;
      var datos = "";

      for(i=0; i<respuesta.length; i++){

          if (respuesta[i].activo) {
            activo = '<a onClick="activaDocente('+ respuesta[i].cedula +',1);" style="cursor:pointer;font-size:20px" id="'+ respuesta[i].cedula + '"><i class="fa fa-check-square" style="color:green"></i></a>';
          }else{
            activo = '<a onClick="activaDocente('+ respuesta[i].cedula +',0);" style="cursor:pointer;font-size:20px" id="'+ respuesta[i].cedula + '"><i class="fa fa-square-o" style="color:red"></i>';
          }
          datos = datos + `
          <tr class="text-center">
            <td>`+
              respuesta[i].cedula + `
            </td>
            <td>` +
              respuesta[i].nombres + `
            </td>
            <td>` +
              respuesta[i].apellidos + `
            </td>
            <td>`+
              respuesta[i].telefono + `
            </td>
            <td>
              <a style="cursor:pointer;font-size:20px" href="/instructor/horario/` + respuesta[i].cedula + `">
                <i class='fa fa-fw fa-clock-o' style="color:green"></i>
              </a>
            </td>
            <td>`+ activo + `</td>
            <td>
              <a style="cursor:pointer;font-size:20px" data-toggle="modal" data-target="#modal-danger" onclick="infDocente(` + respuesta[i].cedula + `)" >
                <i class="fa fa-folder-open" style="color:green"></i>
              </a>
            </td>

            <td>
              <a style="cursor:pointer;font-size:20px" value="`+ respuesta[i].cedula +`" class="borrar">
                <i class='fa fa-fw fa-times' style="color:red"></i>
              </a>
            </td>
          </tr>`;

      }

        $('#docenteBody').html(datos);

    }


  });


}
