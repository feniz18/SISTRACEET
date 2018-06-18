$("#btn-cert").on("click", function()
{
	if($('.selecciona').length)
      {
        $('#tablaSeleccionCert').dataTable().fnDestroy();
        $('#modal-warning').modal('show');
        var id = $('.selecciona #idTransferencia').attr('value');
        Cookies.set('idTransferencia',id);
        cargaModalCert(id);
      }
      else
      {
        alert('Por favor seleccione una transferencia');
      }
});

function cargaModalCert(id)
{
	$.ajax
	({
		type: "get",
		url: "/transferencia/certificacion/cargamodal/" + id,
    beforeSend: function()
    {
      $("#cargaModalCert").fadeIn(1000);
      $("#modalContenidoCert").fadeOut(1000);
    },
    success: function(e)
    {
      postCargaModalCert(e);
    },

	});
}

function postCargaModalCert(datos)
{

  var html = '';
  var html1 = "";
  var htmlFinal = "";

  if(datos.usuarios_transferencias == "")
  {
    htmlFinal = '<td colspan=3>No hay instructores inscritos en esta transferencia</td>';

  }

  $.each(datos.usuarios_transferencias,function(e,datos)
  {

    if (datos.pivot.aprobacion == 1){
      html = html +'<tr><td><div class="checkbox checkbox-danger chuloC"><input value="cer' + datos.cedula +'"id="chulo-'+ e +'" type="checkbox" checked><label for="chulo-'+ e +'"></label></div></td><td>' + datos.cedula + '</td><td>' + datos.nombres + ' ' + datos.apellidos + '</td></tr>';
    }else {
      html1 = html1 +'<tr><td><div class="checkbox checkbox-danger chuloC"><input value="cer' + datos.cedula +'"id="chulo-'+ e +'" type="checkbox"><label for="chulo-'+ e +'"></label></div></td><td>' + datos.cedula + '</td><td>' + datos.nombres + ' ' + datos.apellidos + '</td></tr>';
    }

  });

  htmlFinal = html + html1;

  $("#modalBodyCertTrans").html(htmlFinal);

     $('#tablaSeleccionCert').dataTable({
       'paging'      : true,
       'lengthChange': false,
       'searching'   : true,
       'ordering'    : false,
       'info'        : true,
       'autoWidth'   : true,
       "dom"         : '<"top"fl>rt<"bottom" p><"clear" i>'
     });

    $('#cargaModalCert').fadeOut(1000);
    $('#modalContenidoCert').fadeIn(1000);

}