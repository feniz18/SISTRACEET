$("#guardar").on('click', enviarTransferencia);

function enviarTransferencia()
{
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

function postEnviarTransferencia(data)
{

}
