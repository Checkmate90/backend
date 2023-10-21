<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class marcasController extends Controller
{
    public function nombremarca(Request $request){
        return "_nombresmarcas_";
    }
}
