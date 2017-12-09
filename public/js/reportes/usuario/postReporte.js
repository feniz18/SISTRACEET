$('#gReporte').on('click', function() {

  reporte();
});

function reporte(){

  $.ajax(
    {
      data:$('#formReporte').serialize(),
      url: '/reporte/usuarios/gen',
      type: 'get',
      beforeSend: function(){
        $('#error').fadeOut(1000);
      },
      success: function (r){

         postReporte(r);

      },
    }
  );

}

function postReporte(respuesta){


  if (respuesta.final == undefined) {
    var errorHTML = "";
      $.each(respuesta,function(i,r){

        errorHTML = errorHTML + '<li>' + r + '</li>';

      });
    $('#listaErrores').html(errorHTML);
    $('#error').fadeIn(1000);
  }
  else
  {
    location.href = "/reporte/usuarios/gen/pos/" + respuesta.fecha_inicio + "/" + respuesta.fecha_fin;
  }
}
