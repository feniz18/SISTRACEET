
$('#actualizar').bind('click',actualizarSede);

function actualizarSede(){
  var confirmacion = confirm('Desea actualizar la informacion');
  if(confirmacion){
    $.ajax
    ({
      type:'POST',
      url: '/sedes/actualiza/'+ $(this).attr('value'),
      data:$('#modalformulario').serialize(),
      success:function(e){
        postActualizarSede(e);
      }

    });
  }
}

function postActualizarSede(datos){

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
