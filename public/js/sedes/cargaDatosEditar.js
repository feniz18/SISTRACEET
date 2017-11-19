$(document).on('click', '.editar', function(event) {

  var id = $(this).attr('id');
  $('#actualizar').attr('value',id);
  $('#actualizar').fadeIn();
  $('#enviar').fadeOut();

  $.ajax({
    type: 'GET',
    url:'/sedes/'+ id,
    success:function(e){
      insertaInput(e);
    }
  });

});

function insertaInput(datos)
{
  $('#nombre').val(datos.nombre);
  $('#direccion').val(datos.direccion);

}
