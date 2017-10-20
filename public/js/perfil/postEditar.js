$('#guardar').on('click',editar);


function editar(){

  var formulario = new FormData($('#formUpdate')[0]);

    $.ajax({
      type: 'POST',
      url : '/perfil/actualiza',
      data:formulario,
      contentType: false,
      processData: false,
      beforeSend: function(){
        $('#contenido').fadeOut(1000);
        $('#carga').fadeIn(1000);
      },
      complete:function(){

        $('#carga').fadeOut(1000);
        $('#contenido').fadeIn(1000);

      },

      success:function(datos){

        postEditar(datos);

      },

    });

}


function postEditar(datos){


    if(datos.terminado == undefined ){

      $('#error').fadeIn(1000);
      var errorHTML= "";
      $.each(datos,function(i,item){

        errorHTML = errorHTML + '<li>'+ item + '</li>';

      });

      $('#listaErrores').html(errorHTML);

    }else{
      alert(datos.terminado);
      location.href="/perfil";
    }

}
