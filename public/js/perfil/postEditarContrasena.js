$('#modalGuardar').on('click',actualizaContrasena);

$('#cContrasena').on('click',function(){

  $('#modalError').fadeOut();
  $('#modalFinal').fadeOut();
  $('input[name=contrasenaOld]').val('');
  $('input[name=contrasena]').val('');
  $('input[name=rcontrasena]').val('');

});


function actualizaContrasena(){

  $.ajax({

      type: 'POST',
      url: '/perfil/actualiza/contrasena',
      data: $('#formUpdateContrasena').serialize(),
      beforeSend: function(){
        $('#cargaModal').fadeIn(1000);
        $('#modalContenido').fadeOut(1000);
        $('#modalError').fadeOut(1000);
      },
      complete:function(){
        $('#modalContenido').fadeIn(1000);
        $('#cargaModal').fadeOut(1000);
      },
      success: function(datos){
        postActualizaContrasena(datos);
      },

  });

}

function postActualizaContrasena(datos){
    var datosHtml = "";
    if(datos.final == undefined){
      $.each(datos,function(i,item)
      {
        datosHtml = datosHtml + '<li>' + item + '</li>';
      });
      $('#modalError').fadeIn(1000);
      $('#modalListaErrores').html(datosHtml);
    }else{

      $('#modalError').fadeOut(1000);
      $('#modalFinal').fadeIn(1000);
    }

}
