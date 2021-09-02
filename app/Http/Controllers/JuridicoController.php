<?php

namespace App\Http\Controllers;
use App\juridico;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JuridicoController extends Controller
{
    

    public function	index(Request $request){




        return view('juridico.nuevo');


    }


}
