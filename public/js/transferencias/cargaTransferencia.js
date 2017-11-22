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
    url:'',
    success:function(e)
    {

    }

  });
}

function cargaTransferenciaModalInput(data)
{
  
}
