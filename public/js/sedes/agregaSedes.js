$('#btnCrearSede').on('click',function()
{
  $('#error').fadeOut();
  $('#nombre').val('');
  $('#direccion').val('');
  $('#actualizar').fadeOut();
  $('#enviar').fadeIn();
});

$('#enviar').on('click',guardaSede);

function guardaSede(){
  var confirmacion = confirm('Desea guardar la informacion');
  if(confirmacion){
    $.ajax({
      type:'POST',
      url: 'sedes/guardar',
      data: $('#modalformulario').serialize(),
      success: function(e){
        finalizaGuardaSede(e);
      }
    });
  }

}

function finalizaGuardaSede(datos){
  if(datos.final == undefined)
  {
    var html = '';
      $.each(datos,function(i,dato)
      {
        html = html + '<li>' + dato +'</li>';
      });

    $('#listaErrores').html(html);
    $('#error').fadeIn(1000);
  }
  else
  {
    $('#error').fadeOut(1000);
      alert(datos.final);
      location.href='/sedes';
  }

}
