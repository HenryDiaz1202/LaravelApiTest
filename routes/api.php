<?php

use App\Http\Controllers\TareasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::POST('/tareas',[TareasController::class,'store']);
Route::GET('/tareas/listar',[TareasController::class,'index']);
Route::PUT('/tareas/{tareas}',[TareasController::class,'update']);
Route::DELETE('/tareas/{tareas}',[TareasController::class,'destroy']);
