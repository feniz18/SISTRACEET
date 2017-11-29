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
        url: '/instructor/horario/elimina/' + id,
        success: function(e)
        {
          alert(e.final);
          location.href = '/instructor/horario/' + e.cedula;
        }
      }
    );
  }
}
