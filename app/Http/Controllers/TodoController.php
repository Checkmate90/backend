<?php

namespace App\Http\Controllers;

use App\Models\bodegas;
use App\Models\dispositivos;
use App\Models\existencias;
use App\Models\marcas;
use App\Models\modelos;
use Exception;
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

        $bodegas=$request['bodega'];
        $marca=$request['marca'];
        $modelos=$request['modelo'];
        //dump($bodegas);
        //dump($marca);
        //dump($modelos);

        if(!$bodegas && !$marca && !$modelos){
            //dump("todo null");
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
        }elseif(!$marca && !$modelos){
            //dump("aqui entro");
            $info = dispositivos::join('existencias', 'existencias.idDispositivos', 'dispositivos.id')
            ->join('bodegas', 'bodegas.id', 'existencias.idBodega')
            ->join('modelos', 'modelos.id', 'dispositivos.modeloDispositivos')
            ->join('marcas', 'marcas.id', 'dispositivos.marcasDispositivos')
            ->where('bodegas.id', $bodegas)
            ->select(
                'dispositivos.*',
                'bodegas.id as bod_id',
                'bodegas.nombreBodega as bod_nombre',
                'modelos.nombreModelos as mod_nombre',
                'marcas.nombre as marcas_nombre'
            )
            ->get();
        }elseif(!$bodegas  && !$modelos){
            $info = dispositivos::join('existencias', 'existencias.idDispositivos', 'dispositivos.id')
            ->join('bodegas', 'bodegas.id', 'existencias.idBodega')
            ->join('modelos', 'modelos.id', 'dispositivos.modeloDispositivos')
            ->join('marcas', 'marcas.id', 'dispositivos.marcasDispositivos')
            ->where('marcas.id', $marca)
            ->select(
                'dispositivos.*',
                'bodegas.id as bod_id',
                'bodegas.nombreBodega as bod_nombre',
                'modelos.nombreModelos as mod_nombre',
                'marcas.nombre as marcas_nombre'
            )
            ->get();
        }
        elseif(!$bodegas && !$marca){
            $info = dispositivos::join('existencias', 'existencias.idDispositivos', 'dispositivos.id')
            ->join('bodegas', 'bodegas.id', 'existencias.idBodega')
            ->join('modelos', 'modelos.id', 'dispositivos.modeloDispositivos')
            ->join('marcas', 'marcas.id', 'dispositivos.marcasDispositivos')
            ->where('modelos.id', $modelos)
            ->select(
                'dispositivos.*',
                'bodegas.id as bod_id',
                'bodegas.nombreBodega as bod_nombre',
                'modelos.nombreModelos as mod_nombre',
                'marcas.nombre as marcas_nombre'
            )
            ->get();
        }elseif(!$bodegas ){
            $info = dispositivos::join('existencias', 'existencias.idDispositivos', 'dispositivos.id')
            ->join('bodegas', 'bodegas.id', 'existencias.idBodega')
            ->join('modelos', 'modelos.id', 'dispositivos.modeloDispositivos')
            ->join('marcas', 'marcas.id', 'dispositivos.marcasDispositivos')
            ->where('marcas.id', $marca)
            ->where('modelos.id', $modelos)
            ->select(
                'dispositivos.*',
                'bodegas.id as bod_id',
                'bodegas.nombreBodega as bod_nombre',
                'modelos.nombreModelos as mod_nombre',
                'marcas.nombre as marcas_nombre'
            )
            ->get();
        }elseif(!$marca){
            $info = dispositivos::join('existencias', 'existencias.idDispositivos', 'dispositivos.id')
            ->join('bodegas', 'bodegas.id', 'existencias.idBodega')
            ->join('modelos', 'modelos.id', 'dispositivos.modeloDispositivos')
            ->join('marcas', 'marcas.id', 'dispositivos.marcasDispositivos')
            ->where('modelos.id', $modelos)
            ->where('bodegas.id', $bodegas)
            ->select(
                'dispositivos.*',
                'bodegas.id as bod_id',
                'bodegas.nombreBodega as bod_nombre',
                'modelos.nombreModelos as mod_nombre',
                'marcas.nombre as marcas_nombre'
            )
            ->get();
        }elseif(!$modelos){
            $info = dispositivos::join('existencias', 'existencias.idDispositivos', 'dispositivos.id')
            ->join('bodegas', 'bodegas.id', 'existencias.idBodega')
            ->join('modelos', 'modelos.id', 'dispositivos.modeloDispositivos')
            ->join('marcas', 'marcas.id', 'dispositivos.marcasDispositivos')
            ->where('marcas.id', $marca)
            ->where('bodegas.id', $bodegas)
            ->select(
                'dispositivos.*',
                'bodegas.id as bod_id',
                'bodegas.nombreBodega as bod_nombre',
                'modelos.nombreModelos as mod_nombre',
                'marcas.nombre as marcas_nombre'
            )
            ->get();
        }else{
            $info = dispositivos::join('existencias', 'existencias.idDispositivos', 'dispositivos.id')
            ->join('bodegas', 'bodegas.id', 'existencias.idBodega')
            ->join('modelos', 'modelos.id', 'dispositivos.modeloDispositivos')
            ->join('marcas', 'marcas.id', 'dispositivos.marcasDispositivos')
            ->where('modelos.id', $modelos)
            ->where('bodegas.id', $bodegas)
            ->where('marcas.id', $marca)
            ->select(
                'dispositivos.*',
                'bodegas.id as bod_id',
                'bodegas.nombreBodega as bod_nombre',
                'modelos.nombreModelos as mod_nombre',
                'marcas.nombre as marcas_nombre'
            )
            ->get();
        }
        
        return $info;
    }

    public function CrearDispositivo(Request $request){
        try{
            $bodegas=$request['bodega'];
            $marca=$request['marca'];
            $modelos=$request['modelo'];
            $nombre=$request['nombre'];

            $bodyCrearDisp = [
                "nombreDispositivos"=>$nombre,
                "modeloDispositivos"=>$modelos,
                "marcasDispositivos"=>$marca
            ];

            $dispositivo=dispositivos::insertGetId($bodyCrearDisp);
            //return $dispositivo;

            $bodyexistencias = [
                "idDispositivos"=>$dispositivo,
                "idBodega"=>$bodegas
            ];

            $existencia = existencias::insert($bodyexistencias);

            return "Insercion Correcta";
        }catch(Exception $e){
            return $e;
            return "No se ha podido insertar";
        }
    }

    public function EditarDispositivo(Request $request){
        try{
            $dispositivo=$request['idDispositivo'];
            $bodegas=$request['bodega'];
            $marca=$request['marca'];
            $modelos=$request['modelo'];
            $nombre=$request['nombre'];
            $bodyEditarDisp = [
                "nombreDispositivos"=>$nombre,
                "modeloDispositivos"=>$modelos,
                "marcasDispositivos"=>$marca
            ];
    
            $updateDisp= dispositivos::where('id',$dispositivo)->update($bodyEditarDisp);
    
            $bodyEditarExistencias = [
                "idBodega"=>$bodegas
            ];
            existencias::where('idDispositivos',$dispositivo)->update($bodyEditarExistencias);
            
            return "Edicion Correcta";    
        }catch(Exception $e){
            return "No se ha podido editar";
        }
    }

    public function EliminarDispositivo(Request $request){
        try{
            $dispositivo=$request['idDispositivo'];
            $bodegas=$request['bodega'];
    
            dispositivos::where('id',$dispositivo)->delete();
            existencias::where('idDispositivos',$dispositivo)->delete();
            return "Eliminado Correctamente";    
        }catch(Exception $e){
            return "No se ha podido eliminar";
        }
    }

}
