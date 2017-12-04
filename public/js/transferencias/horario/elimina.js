$(document).on('click', '.borrar', function() {
    borrarHorario($(this).attr('value'));
});

function borrarHorario(id)
{
  var confirmar = confirm('Desea elminar este horario');
  if(confirmar)
  {
    $.ajax(
      {
        type: 'GET',
        url: '/transferencia/horario/elimina/' + id,
        success: function(e)
        {
          alert(e.final);
          location.href = '/transferencia/horario/' + e.id;
        }
      }
    );
  }
}
