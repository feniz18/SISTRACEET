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
    html = html +'<tr><td><div class="checkbox checkbox-danger"><input value="' + datos.cedula +'" id="chulo-'+ e +'" class="chulo" type="checkbox"><label for="chulo-'+ e +'"></label></div></td><td>' + datos.cedula + '</td><td>' + datos.nombres + ' ' + datos.apellidos + '</td></tr>';
  });

  $('#modalBodyRegistraTrans').html(html);
  $('#cargaModalRegistraTrans').fadeOut(1000);
  $('#modalContenidoRegistraTrans').fadeIn(1000);


    $('#tablaSeleccionInstructores').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : true,
      "dom"         : '<"top"fl>rt<"bottom" p><"clear" i>'

    });
}
