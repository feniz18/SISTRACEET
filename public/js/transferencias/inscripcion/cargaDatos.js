$('#btn-inscripcion').on('click', function() {
    if($('.selecciona').length)
      {
        $('#tablaSeleccionInstructores').dataTable().fnDestroy();
        $('#modal-success').modal('show');
        var id = $('.selecciona #idTransferencia').attr('value');
        var cupos = $('.selecciona #transferenciaCupo').attr('value');
        Cookies.set('cuposTransferencia',cupos);
        Cookies.set('idTransferencia',id);
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
  var contador = 0;

  if(data.usuarios_registrado == "" && data.usuarios == "")
  {
    html = '<td colspan=3>No hay instructores disponibles para el horario especificado</td>';
  }

  $.each(data.usuarios_registrado,function(e,datos)
  {
    html = html +'<tr><td><div class="checkbox checkbox-danger"><input value="' + datos.cedula +'" id="chulo-'+ contador +'" class="chulo" type="checkbox" checked><label for="chulo-'+ contador +'"></label></div></td><td>' + datos.cedula + '</td><td>' + datos.nombres + ' ' + datos.apellidos + '</td></tr>';
    contador++;
  });

  $.each(data.usuarios,function(e,datos)
  {
    html = html +'<tr><td><div class="checkbox checkbox-danger"><input value="' + datos.cedula +'" id="chulo-'+ contador +'" class="chulo" type="checkbox"><label for="chulo-'+ contador +'"></label></div></td><td>' + datos.cedula + '</td><td>' + datos.nombres + ' ' + datos.apellidos + '</td></tr>';
    contador++;
  });


   $('#tablaSeleccionInstructores').dataTable({
     'paging'      : true,
     'lengthChange': false,
     'searching'   : true,
     'ordering'    : false,
     'info'        : true,
     'autoWidth'   : true,
     "dom"         : '<"top"fl>rt<"bottom" p><"clear" i>'
   });

   $('#modalBodyRegistraTrans').html(html);
   $('#cargaModalRegistraTrans').fadeOut(1000);
   $('#modalContenidoRegistraTrans').fadeIn(1000);

}
