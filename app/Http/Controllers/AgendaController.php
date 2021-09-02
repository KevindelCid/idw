<?php

namespace App\Http\Controllers;
use App\models\Agenda;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
class AgendaController extends Controller
{



   function buscarp($id){
   
   

   //    // $evento = Agenda::find($id);
   
   //    //  $ev = $evento->find($id);
   
   
   // echo $id;
   
   
   
   
   // return view("agenda.index");
   }




function buscar(Request $request){
   
//    $input = $request->all();


//    $evento = Agenda::find($input["id"]);

//    //  $ev = $evento->find($id);


// echo $input["id"];




// return view("agenda.index")->with('idevente',$input["id"]);
}


   public function index(){

      // $descri = DB::table('users')->where('name', 'John')->value('email');
     
      //    $id = $input["id"];
         
         // dd($input);


return view("agenda.index");



   }




   public function ver($id){

      // $vista = Agenda::find($id);
      // return response()->json($vista);

   }

public function eventito(Request $request){

// $puta = "me cago en la puta";
   $input = $request->all();
   $id = $input["id"];
   
   $datos = Agenda::find($id);
   $descripcion = $datos->descripcion;
// $input = $request->all();

   // return view('agenda.index')->with('datos', $id);
   // return view("agenda.index")->with('datos', $id);

//    return response()->json([
//       'name' => 'Abigail',
//       'state' => 'CA'
//   ]);  
return array("datoid"=>$descripcion);

   // return response()->json(["ok"=>true ]);
   
// return view("agenda.index")->with("dato","POR LA GRAN PUTAAAAA FUNCIONÄ MIERDA!!" );
 }



public function guardar(Request $request){
    
    
    $input = $request->all();


    

    if($this->validacion($input["fecha"], $input["inicio"], $input["horafinal"])){




               $agenda = Agenda::create([
      
                  "id_usuario"=> auth()->user()->id,
                  "titulo"=>$input["titulo"],
                  "fecha"=>$input["fecha"],
                  "hora_inicio"=>$input["inicio"],
                  "hora_final"=>$input["horafinal"],
                  "descripcion"=>$input["descripcion"],
                  "estado"=> 1,
      
               ]);

               return response()->json(["ok"=>true]);
               
         } else{
     
            return response()->json(["ok"=>false]);
      
         }

         dd($input);
}



public function mostrar(){

   $agenda = Agenda::all();
   $n_agenda =[];

   foreach($agenda as $valor){

      $n_agenda[] = [

         "id"=>$valor->id,
         "start"=>$valor->fecha . " " . $valor->hora_inicio,
         "end"=>$valor->fecha . " ". $valor->hora_final,
         "title"=>$valor->titulo,
         "backgroundColor"=>$valor->estado == 1 ? "#7ACF2A" : "#CF2A2A",
         "textColor"=>"#fff",
         "extendedProps"=>[
            "id_usuario"=>$valor->id_usuario
         ]

      ]; 
//   return response()->json($n_agenda);
   }
 
}


public function listar(){

   $eventos = Agenda::all()->where('id_usuario', auth()->user()->id);
   $eve=[];

   foreach($eventos as $evento){


      $eve[] = [

         "id"=>$evento->id,
         "start"=>$evento->fecha . " " . $evento->hora_inicio,
         "end"=>$evento->fecha . " ". $evento->hora_final,
         "title"=>$evento->titulo,
         "backgroundColor"=>$evento->estado == 1 ? "#7ACF2A" : "#CF2A2A",
         "textColor"=>"#fff",
         "extendedProps"=>[
            "id_usuario"=>$evento->id_usuario
         ]

      ]; 


   }

   return response()->json($eve);

}

public function validacion($fecha, $horai, $horaf){



$sql = "select * from agemdas where id_usuario = ". auth()->user()->id ."and  (CASE WHEN 
hora_inicio >= $horai then hora_final >= $horaf end)";




// $sqq = "select * from agendas where id_usuario = 3 and fecha = '$fecha' and  CASE WHEN 
// hora_inicio >= '$horai' then hora_final >= '$horaf' end";
// $agenda = DB::select($sqq);
// dd($agenda);
   // $agenda = Agenda::select("*")

   // ->where("id_usuario", "=", 3)
   // ->where("fecha", "=",$fecha)
     
   //    ->whereBetween('hora_inicio',[$horai, $horaf])
   //    ->whereBetween('hora_final',[$horai, $horaf])
   //    // ->where('id_usuario', '=', auth()->user()->id )
   //   ->first();


// por el momento unicamente retorno un true para decirle que permita todo tipo de evento a la hora que sea, ya sea repetidos o no


      return true ;


}
}

// public function guardar(Request $request){
    

//     $input = $request->all();

//    if($this->validacion($input["fecha"], $input["inicio"], $input["horafinal"])){

//          $agenda = Agenda::create([

//             "id_usuario"=> auth()->user()->id,
//             "titulo"=>$input["titulo"],
//             "fecha"=>$input["fecha"],
//             "hora_inicio"=>$input["inicio"],
//             "hora_final"=>$input["horafinal"],
//             "descripcion"=>$input["descripcion"],

//          ]);

//          return response()->json(["ok"=>true]);

//    } else{
//       return response()->json(["ok"=>false]);

//    }