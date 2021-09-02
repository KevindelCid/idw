<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\consultas;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class ConsultasController extends Controller
{
  

    public function vista($id,$tipo){

        return view('razon_consulta')->with('id',$id)->with('tipo',$tipo); // esta cosa tiene que llamar a la vista con su nombre real y no el alias
         
      
          }

    public function create(Request $request, $id,$tipo){
        date_default_timezone_set("America/Guatemala");
        $dat = new consultas;
    
        $dat -> id_cliente = $id;
        $dat -> motivo_consulta = $request ->razon;
       
        $dat -> tipo = $tipo;
        $dat -> estado = 1;

   
        $dat ->save();
     


 
        return redirect('consultas/pendientes');

    }


  

    public function vistacp(){




        $cc = DB::select("select `clientes`.`foto`,`clientes`.`nombre1`,`clientes`.`apellido1`, 
        `clientes`.`sexo`, `clientes`.`residencia`,`clientes`.`telefono1`,
        `referencias`.`nombre_referencia` as referido_por,`consultas`.`tipo`,`consultas`.`motivo_consulta`,`consultas`.`estado`
        from clientes inner join consultas 
        ON clientes.id_cliente = consultas.id_cliente
        inner join referencias 
        ON clientes.referido_por = referencias.id_referencia 
        
        where estado = 1
        ");
        



        return view('consultas/pendientes')->with('chol', $cc); // esta cosa tiene que llamar a la vista con su nombre real y no el alias
         
      
          }

}
