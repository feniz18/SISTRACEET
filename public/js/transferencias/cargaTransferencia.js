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
  $.each(data.transferencia.dias_semana,function(i,semana)
  {
    $('#chulo-'+ semana.id).attr('checked',true);
  });
  $('#nombreCurso').val(data.transferencia.nombre);
  $('#fechaInicio').val(data.transferencia.fecha_inicio);
  $('#fechaFinal').val(data.transferencia.fecha_fin);
  $('#hora_inicio').val(data.transferencia.hora_inicio);
  $('#hora_fin').val(data.transferencia.hora_fin);
  $('#sede').val(data.transferencia.sede_id);
  $('#cupos').val(data.transferencia.cupos);
  $('#observaciones').val(data.transferencia.descripcion);
  $('#actualizar').attr('value',data.transferencia.id);
  $('#guardar').fadeOut();
  $('#actualizar').fadeIn();


  $('#cargaModal').fadeOut(1000);
  $('#modalContenido').fadeIn(1000);
  //alert(data.transferencia.id);
}
