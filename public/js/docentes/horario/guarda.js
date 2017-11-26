$('#guardar').on('click',guardaHorario);

function guardaHorario()
{
  confirmacion = confirm('Desea guardar la informacion para este usuario');
  if(confirmacion)
  {
    $.ajax(
      {
        type:'POST',
        url:'/instructor/horario/guardar',
        data: $('#formUpdate').serialize(),
        complete: function(e)
        {
          postGuardaHorario(e);
        }
      }
    );
  }
}

function postGuardaHorario(data)
{

}
