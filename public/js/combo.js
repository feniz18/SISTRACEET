$( document ).ready(function() {
    $('#dep').on('change',alCambiar);


});

function alCambiar(){

  $('#ciu').select2();
  
  var id = $(this).val();



  //AJAX SOLICITUD AL SERVIDOR
  $.get('api/combo/'+ id +'/nombre',function(datos){
      var html_select = '<option value = "0">Seleccione Departamento</option>';
      if (id==0) {
          var html_select = '<option value = "0">Seleccione Departamento</option>';
          $('#ciu').html(html_select);
      }else{

        html_select = "";

        for(var i=0;i<datos.length;++i){


          html_select = html_select +'<option value = "' + datos[i].id_ciudad +'">'+ datos[i].nombre +'</option>';


        }
        $('#ciu').html(html_select);

    }

  });
}
