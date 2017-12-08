$('#btn-correo').on('click', function() {
    if($('.selecciona').length)
      {
        var id = $('.selecciona #idTransferencia').attr('value');
        Cookies.set('idTransferencia',id);
        enviarCorreos(id);
      }
      else
      {
        alert('Por favor seleccione una transferencia');
      }
});

function enviarCorreos(id)
{
  var confirmacion = confirm('Desea enviar un correo de notificacion a las personas inscritas?');
  if(confirmacion)
  {
      $.ajax
      ({
        type: 'GET',
        url : '/transferencia/correo/enviar/' + Cookies.get('idTransferencia',id),
        beforeSend: function()
        {
          $('#carga').fadeIn(1000);
          $('#contenido').fadeOut(1000);
        },
        success: function(data)
        {
          alert(data);
          location.href = '/administraTransferencia';
        }
      });

   }
}
