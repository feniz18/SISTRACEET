$(document).on('click','.borrar', function() {
    id = $(this).attr('value');
    borrarTransferencia(id);
});

function borrarTransferencia(id)
{
  var confirmacion = confirm('Desea elminar esta transferencia, recuerde que despues de esta operacion ya no puede restaurar la transferencia.');

  if(confirmacion){
    $.ajax({
      type:'GET',
      url: '/transferencias/eliminar/' + id,
      success:function(data)
      {
        alert(data.final);
        location.href = '/administraTransferencia';
      }

    });
  }
}
