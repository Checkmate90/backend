<?php

use App\Http\Controllers\TodoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("marcas", [TodoController::class, "TodasLasMarcas"]);

Route::get("bodegas", [TodoController::class, "TodasLasBodegas"]);

Route::get("dispositivos", [TodoController::class, "TodosLosDisp"]);

Route::get("modelos", [TodoController::class, "TodosLosModelos"]);

Route::get("existencias", [TodoController::class, "TodasLasExistencias"]);

Route::get("todo", [TodoController::class, "TodaLaInfo"]);

Route::post("crear", [TodoController::class, "CrearDispositivo"]);

Route::post("editar", [TodoController::class, "EditarDispositivo"]);

Route::post("eliminar", [TodoController::class, "EliminarDispositivo"]);