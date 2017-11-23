$("#actualizar").on('click', actualizarTransferencia);

function actualizarTransferencia()
{
  var id = $("#actualizar").attr('value');
  $('#errorModalTransferencia').fadeOut();
  $confirmacion = confirm("¿Desea guardar la transferencia?");
  if ($confirmacion) {
    $.ajax({
      type:'post',
      url:'/transferencia/guardar/' + id,
      data: $("#formTransferencia").serialize(),
      success: function(e)
      {
        postEnviarTransferencia(e);
      },
    });
  }

}
