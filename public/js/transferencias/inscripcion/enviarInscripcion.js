$('#registrarTransferencia').on('click', function() {
  validaCheckbox();
});

function validaCheckbox()
{
  var instructores = [];
  var contador = 0;
  $("#tablaSeleccionInstructores .chulo").each(function()
  {
    var chulo = $(this).prop('checked');
      if (chulo == true)
      {
        var cedula = $(this).attr('value');
        contador++;
        instructores.push(cedula);
      }
  });

  if(contador == 0)
  {
    alert('Por lo menos debe seleccionar a un instructor para la transferencia');

  }else{
    enviarInscripcion(instructores);
  }
}

function enviarInscripcion(instructores)
{
  instructores = JSON.stringify(instructores);
  $.ajax
  ({
    type: 'POST',
    url: '/transferencia/registro',
    data:
    {
      "_token":  $('meta[name="csrf-token"]').attr('content'),
      "instructores" : instructores
    },
  });
}
