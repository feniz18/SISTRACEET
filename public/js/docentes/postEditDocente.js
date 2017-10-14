$('#enviar').on('click',function(){


    var confirmacion = confirm("Desea guardar la informacion");
      if(confirmacion){
        //$('.modal').modal('hide');

        $.ajax({
            type:"POST",
            url: "/instructor/edit",
            data:$('#formUpdate').serialize(),
            success: function(respuesta){
              $.each(respuesta, function(i, item) {
                  console.log(item);
              });


            }
        });
      }

});
