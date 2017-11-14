$('#gReporte').on('click', function() {

  reporte();
});

function reporte(){

  $.ajax(
    {
      data:$('#formReporte').serialize(),
      url: '/reportes/logs',
      type: 'post',
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


  if (respuesta.fecha_ini == undefined) {
    var errorHTML = "";
      $.each(respuesta,function(i,r){

        errorHTML = errorHTML + '<li>' + r + '</li>';

      });
    $('#listaErrores').html(errorHTML);
    $('#error').fadeIn(1000);
  }else {
    var ruta = '/reportes/logs/'+ respuesta.fecha_ini +'/' + respuesta.fecha_fin;
    location.href = ruta;
  }
}
