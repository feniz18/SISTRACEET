$("#foto").change(function(){

      var file = $(this).val();

      if(!file == ""){

        file = file.split("\\");

        $('#fotoLleno').fadeIn(1000);
        $('#fotoVacio').fadeOut(1000);

        $('#fotoLleno').html(file[file.length - 1]);

      }else{

        $('#fotoLleno').fadeOut(1000);
        $('#fotoVacio').fadeIn(1000);

      }

});
