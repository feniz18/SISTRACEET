$('#crearTransferencia').on('click', function() {
  $('#formTransferencia')[0].reset();
  $('#guardar').fadeIn();
  $('#actualizar').fadeOut();
});

$("#guardar").on('click', enviarTransferencia);

function enviarTransferencia()
{
  $('#errorModalTransferencia').fadeOut();
  $confirmacion = confirm("¿Desea guardar la transferencia?");
  if ($confirmacion) {
    $.ajax({
      type:'post',
      url:'/transferencia/guardar',
      data: $("#formTransferencia").serialize(),
      success: function(e)
      {
        postEnviarTransferencia(e);
      },
    });
  }

}

function postEnviarTransferencia(data)
{
  if (data.final == undefined){
    var html="";
    $.each(data,function(i,datos)
    {
      html = html + '<li>' + datos +'</li>';
    });
    $('#listaErrores').html(html);
    $('#errorModalTransferencia').fadeIn(1000);

  }
  else
  {
    alert(data.final);
    location.href="/administraTransferencia";
  }
}
