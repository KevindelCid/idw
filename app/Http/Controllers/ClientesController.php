<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clientes;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;



class ClientesController extends Controller
{
    //
    public function vista(){
        



        $ncc = DB::select("select * from nacionalidades");
        
      




  return view('clientes.nuevo_cliente')->with('naci', $ncc);
   

    }
    
    public function vistar(){

      
  
    }
    

    public function create(Request $request){
        date_default_timezone_set("America/Guatemala");
        $dato = new clientes;
    
        $dato -> apellido1 = $request ->apellido1;
        $dato -> apellido2 = $request ->apellido2;
        $dato -> apellido_casada = $request ->apellido_casada;
        $dato -> nombre1 = $request ->nombre1;
        $dato -> nombre2 = $request ->nombre2;
        $dato -> sexo = $request ->sexo;
        $dato -> f_nacimiento = $request ->f_nacimiento;
        $dato -> dpi = $request ->dpi;
        $dato -> estado_civil = $request ->estado_civil;
        $dato -> nacionalidad = $request ->nacionalidad;
        $dato -> domicilio = $request ->domicilio;
        $dato -> residencia = $request ->residencia;
        $dato -> profesion = $request ->profesion;
        $dato -> telefono1 = $request ->telefono1;
        $dato -> telefono2 = $request ->telefono2;
        $dato -> telefono3 = $request ->telefono3;
        $dato -> referido_por = $request ->referido_por;
   

        if($request->hasFile('foto')){

            $dato['foto']=$request->file('foto')->store('uploads','public');
        }
        $dato ->save();
        $user= clientes::all();


 
        return redirect('clientes/perfil_cliente/'.$user->last()->id_cliente);

    }






public function index(Request $request, $id){


    // echo "el ide es ".$id;



    $cc = DB::select("select `clientes`.`apellido1`, `clientes`.`apellido2`,`clientes`.`nombre1`,`clientes`.`nombre2`,`clientes`.`apellido_casada`,
    `clientes`.`sexo`, `clientes`.`f_nacimiento`,`clientes`.`dpi`,`clientes`.`estado_civil`,`nacionalidades`.`GENTILICIO_NAC` as nacionalidad,
    `clientes`.`domicilio`,`clientes`.`residencia`,`clientes`.`profesion`,`clientes`.`telefono1`,`clientes`.`telefono2`,`clientes`.`telefono3`,
    `referencias`.`nombre_referencia` as referido_por,`clientes`.`foto`,`clientes`.`created_at`
    from clientes inner join nacionalidades 
    ON clientes.nacionalidad = nacionalidades.id_nacionalidad 
    inner join referencias 
    ON clientes.referido_por = referencias.id_referencia where id_cliente = $id");
    
    $fecha ="";
    
foreach($cc as $c){

   $fecha = $c->f_nacimiento;
}


    return view('clientes.perfil_cliente')->with('chol', $cc)->with('fesha',Carbon::parse($fecha)->formatLocalized('%A %d %B %Y'))->with('id',$id);

    }




    public function vistacp(){




        $cc = DB::select("select `clientes`.`foto`,`clientes`.`nombre1`,`clientes`.`nombre2`,`clientes`.`apellido1`, 
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




          public function vistacli(){




            $cc = DB::select("select `clientes`.`id_cliente`,`clientes`.`apellido1`, `clientes`.`apellido2`,`clientes`.`nombre1`,`clientes`.`nombre2`,`clientes`.`apellido_casada`,
            `clientes`.`sexo`, `clientes`.`f_nacimiento`,`clientes`.`dpi`,`clientes`.`estado_civil`,`nacionalidades`.`GENTILICIO_NAC` as nacionalidad,
            `clientes`.`domicilio`,`clientes`.`residencia`,`clientes`.`profesion`,`clientes`.`telefono1`,`clientes`.`telefono2`,`clientes`.`telefono3`,
            `referencias`.`nombre_referencia` as referido_por,`clientes`.`foto`,`clientes`.`created_at`
            from clientes inner join nacionalidades 
            ON clientes.nacionalidad = nacionalidades.id_nacionalidad 
            inner join referencias 
            ON clientes.referido_por = referencias.id_referencia 
            ");
            
    
    
    
            return view('clientes/listado')->with('chol', $cc); // esta cosa tiene que llamar a la vista con su nombre real y no el alias
             
          
              }


              
    public function vistaconsultasde($id){




        $cc = DB::select("select  `clientes`.`id_cliente`,`clientes`.`foto`,`clientes`.`nombre1`,`clientes`.`nombre2`,`clientes`.`apellido1`, 
        `clientes`.`sexo`, `clientes`.`residencia`,`clientes`.`telefono1`,
        `referencias`.`nombre_referencia` as referido_por,`consultas`.`tipo`,`consultas`.`motivo_consulta`,`consultas`.`estado`
        from clientes inner join consultas 
        ON clientes.id_cliente = consultas.id_cliente
        inner join referencias 
        ON clientes.referido_por = referencias.id_referencia 
        
        where clientes.id_cliente = $id
        ");
        



        return view('consultas/pendientes')->with('chol', $cc); // esta cosa tiene que llamar a la vista con su nombre real y no el alias
         
      
          }







}
