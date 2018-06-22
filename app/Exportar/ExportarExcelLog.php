<?php 

namespace App\Exportar;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Support\Facades\DB;
use App\Log_usuario;
use Carbon\Carbon;
use PDO;

class ExportarExcelLog implements FromCollection,WithHeadings,ShouldAutoSize
{
	use Exportable;

	public function __construct($fecha_inicio,$fecha_fin)
	{
		$this->fecha_inicio =  Carbon::createFromFormat("Y-m-d",$fecha_inicio);
		$this->fecha_fin = Carbon::createFromFormat("Y-m-d",$fecha_fin);
		
	}

	public function headings(): array
    {
        return [
            'Cedula',
            'Nombres',
            'Direccion IP registrada',
            'Ingreso al sistema',
        ];
    }


    public function collection()
    {
    	$op = "";
    	if ($this->fecha_inicio->diffInDays($this->fecha_fin) == 0) {
    		$this->fecha_fin->addDay();
    		$op = "<";
    	}else{
    		$op = "<=";
    	}
    	
    	
    	$tabla = DB::table("log_sesion")
    					->join("usuario","log_sesion.usuario_id","=","usuario.cedula")
    					->select("usuario.cedula",
    							DB::raw("CONCAT(usuario.nombres,' ', usuario.apellidos)"),
    							"log_sesion.direccion_ip",
    							"log_sesion.created_at")
    					->where("log_sesion.created_at",">=",$this->fecha_inicio->toDateString())
    					->where("log_sesion.created_at",$op,$this->fecha_fin->toDateString())->get();
  		
  		$tabla1 = array();

    	foreach ($tabla as $valor) {
    		$datos = array();
    		foreach ($valor as $nombre => $valor2) {
    			
    			$datos[$nombre] = $valor2;
    		}

    		array_push($tabla1, $datos);
    	}

    	$coleccion = collect($tabla1);

    	return $coleccion;

    

       


    }
}