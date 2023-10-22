<?php

namespace App\Http\Controllers;

use App\Models\bodegas;
use App\Models\dispositivos;
use App\Models\existencias;
use App\Models\marcas;
use App\Models\modelos;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function TodasLasBodegas(Request $request){
        return bodegas::all();
    }

    public function TodosLosDisp(Request $request){
        return dispositivos::all();
    }

    public function TodasLasMarcas(Request $request){
        return marcas::all();
    }

    public function TodosLosModelos(Request $request){
        return modelos::all();
    }

    public function TodasLasExistencias(Request $request){
        return existencias::all();
    }

    public function TodaLaInfo(Request $request){
        $info = dispositivos::join('existencias', 'existencias.idDispositivos', 'dispositivos.id')
        ->join('bodegas', 'bodegas.id', 'existencias.idBodega')
        ->join('modelos', 'modelos.id', 'dispositivos.modeloDispositivos')
        ->join('marcas', 'marcas.id', 'dispositivos.marcasDispositivos')
        ->select(
            'dispositivos.*',
            'bodegas.id as bod_id',
            'bodegas.nombreBodega as bod_nombre',
            'modelos.nombreModelos as mod_nombre',
            'marcas.nombre as marcas_nombre'
        )
        ->get();
        return $info;
    }

    public function Filtro(Request $request){
        return "a";
    }
}
