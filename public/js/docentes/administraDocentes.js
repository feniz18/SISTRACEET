$(document).ready(function(){

    $('#formUpdate').on('submit',mensaje);

    function mensaje(evento){
      var confirmacion =confirm("Desea guardar la informacion");
      if(!confirmacion){
        evento.preventDefault();
      }
    }
});

function infDocente(documento){

  alert('has hecho clic su numero de cedula es' + documento );

}
