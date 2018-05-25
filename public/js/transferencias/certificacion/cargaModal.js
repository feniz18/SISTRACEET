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
  alert(datos.id);
  $.each(datos,function(i, e) {
    alert(e.id);
  });

}