$("#btn-cert").on("click", function()
{
	if($('.selecciona').length)
      {
        $('#tablaSeleccionCert').dataTable().fnDestroy();
        $('#modal-success').modal('show');
        var id = $('.selecciona #idTransferencia').attr('value');
        Cookies.set('idTransferencia',id);
        cargaModal(id);
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
		url: "",
	});
}