$(document).on('click', '.editar', function() {
  $('#cargaModal').fadeIn();
  $('#modalContenido').fadeOut();

  var id = $(this).attr('id');
  cargaTransferenciaModal(id);

});
function cargaTransferenciaModal(id)
{
  $.ajax
  ({
    type:'GET',
    url:'/transferencias/cargamodal/' + id,
    success:function(e)
    {
      cargaTransferenciaModalInput(e);
    }

  });
}

function cargaTransferenciaModalInput(data)
{

  $('#nombreCurso').val(data.transferencia.nombre);
  $('#fechaInicio').val(data.transferencia.fecha_inicio);
  $('#fechaFinal').val(data.transferencia.fecha_fin);
  $('#sede').val(data.transferencia.sede_id);
  $('#especialidad').val(data.transferencia.especialidad_id);
  $('#cupos').val(data.transferencia.cupos);
  $('#observaciones').val(data.transferencia.descripcion);
  $('#actualizar').attr('value',data.transferencia.id);
  $('#guardar').fadeOut();
  $('#actualizar').fadeIn();


  $('#cargaModal').fadeOut(1000);
  $('#modalContenido').fadeIn(1000);
  //alert(data.transferencia.id);
}
