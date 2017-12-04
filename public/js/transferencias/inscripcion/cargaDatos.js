$('#btn-inscripcion').on('click', function() {
    if($('.selecciona').length)
      {
        $('#modal-success').modal('show');
        var id = $('.selecciona #idTransferencia').attr('value');
        var cupos = $('.selecciona #transferenciaCupo').attr('value');
        Cookies.set('cuposTransferencia',cupos);
        cargaModal(id);
      }
      else
      {
        alert('Por favor seleccione una transferencia');
      }
});

function cargaModal(id)
{


  $.ajax
  ({
    type: 'GET',
    url: '/transferencia/registro/cargamodal/' + id,
    beforeSend: function()
    {
      $('#cargaModalRegistraTrans').fadeIn();
      $('#modalContenidoRegistraTrans').fadeOut();
    },
    success: function(e)
    {
      postcargaModal(e);
    }
  });
}

function postcargaModal(data)
{
  var html = '';

  if(data == "")
  {
    html = '<td colspan=3>No hay instructores disponibles para el horario especificado</td>';
  }

  $.each(data,function(e,datos)
  {
    html = html +'<tr><td>1</td><td>' + datos.cedula + '</td><td>' + datos.nombres + ' ' + datos.apellidos + '</td></tr>';
  });

  $('#modalBodyRegistraTrans').html(html);
  $('#cargaModalRegistraTrans').fadeOut(1000);
  $('#modalContenidoRegistraTrans').fadeIn(1000);
}
