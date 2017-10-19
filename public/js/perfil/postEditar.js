$('#guardar').on('click',editar);


function editar(){

    $.ajax({
      type: 'POST',
      url : '/perfil/actualiza',
      data:$('#formUpdate').serialize(),
      beforeSend: function(){
        $('#contenido').fadeOut();
        $('#carga').fadeIn();
      },
      complete:function(){

        $('#carga').fadeOut();
        $('#contenido').fadeIn();

      },

      success:function(datos){

        postEditar(datos);

      },

    });

}


function postEditar(datos){

    $('#error').fadeOut();
      console.log(datos.fecha_nacimiento);


}
