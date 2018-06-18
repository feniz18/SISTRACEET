<style>
@page {
            margin-top: 0.6em;
            margin-left: 0.6em;
            margin-right: 0.6em;
            margin-bottom: 0.6em;
        }
.imgsena
{
      width: 80px;
      height: 80px;
}
.imgfirma
{
      width: 300px;
      height: 80px;

}
</style>

<div style="width:980px; height:735px; padding:20px; text-align:center; border: 10px solid #51A421">
<div style="width:920px; height:665px; padding:20px; text-align:center; border: 6px solid #A42121">
      <span><img src="img/sena.png" class = "imgsena"></span>
      <br>
      <span style="font-size:50px; font-weight:bold">Certificado Transferencia</span>
      <br>
      <span style="font-size:25px"><i>El SENA certifica que:</i></span>
      <br><br>
      <span style="font-size:30px"><b>{{strtoupper($usuario->nombres)}} {{strtoupper($usuario->apellidos)}}</b></span><br/>
      <span style="font-size:20px"><b>{{$usuario->cedula}}</b></span>
      <br/>
      <br/>
      <span style="font-size:25px"><i>Completo satisfactoriamente la transferencia</i></span> <br/><br/><br/><br/>
      <span style="font-size:30px; font-weight:bold">{{strtoupper($transferencia->nombre)}}</span> <br/><br/>

      <br/><br/><br/>
      <img src="img/firma.jpg" class="imgfirma">
      <br>
      <span style="font-size:15px;font-weight:bold">Director general</span>
      <br>
      <br>
       <span style="font-size:25px"><i>Certificado digital generado:</i></span><br>

       <span style="font-size:30px">                  
      {{Carbon\Carbon::now()->format("h:i a,") . " " . Carbon\Carbon::now()->formatLocalized(" %d de %B de %G")}}             
      </span>
</div>
</div>