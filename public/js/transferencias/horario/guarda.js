$('#nuevoHorario').on('click',function()
{
  $('#formUpdate')[0].reset();
  $('#error').fadeOut();
  $('#cargaModal').fadeOut();

});

$('#guardar').on('click',guardaHorario);

function guardaHorario()
{
  $('#error').fadeOut();
  confirmacion = confirm('Desea guardar la informacion para esta transferencia');
  if(confirmacion)
  {
    $.ajax(
      {
        type:'POST',
        url:'/transferencia/horario/guardar',
        data: $('#formUpdate').serialize(),
        success: function(e)
        {
          postGuardaHorario(e);
        }
      }
    );
  }
}

function postGuardaHorario(data)
{
  if(data.final == undefined)
  {
    var html="";
    $.each(data,function(i,datos)
    {
      html = html + '<li>' + datos + '</li>';
    });
    $('#listaErrores').html(html);
    $('#error').fadeIn(1000);
  }
  else
  {
    alert(data.final);
    location.href="/transferencia/horario/" + data.id;
  }
}
