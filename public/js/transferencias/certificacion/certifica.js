$("#modalBodyCertTrans").on("click","input",function()
{

	var confirmacion = confirm("Desea certificar este usuario"); var cedula =
	$(this).attr("value");

	if (!confirmacion)
	{
		$(this).prop("checked",!$(this).prop("checked"));	
	}
	
	certificaUsuario(Cookies.get('idTransferencia'),cedula.substring(3, cedula.length));
});

function certificaUsuario(id,cedula)
{
	$.ajax({
		url: "/transferencia/certificacion/actualiza/" + cedula + "/" + id ,
		type: 'get',
		success: function (e) {
			postCertificaUsuario(e,cedula);
		},
	});
	
}

function postCertificaUsuario(data,cedula)
{
	if (data)
	{
		$("[value='cer"+ cedula +"']").prop("checked", true);
	}
	else
	{
		$("[value='cer"+ cedula +"']").prop("checked", false);
	}

	alert("Informacion actualizada correctamente.");
}