<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\PlanoController;
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

// Publics routes
//Registro and Auth
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
//plano
Route::get('/planos',[PlanoController::class,'index']);
Route::get('/plano/{id}',[PlanoController::class,'show']);
Route::post('/plano',[PlanoController::class,'store']);
Route::get('/estados',[EstadoController::class,'index']);
Route::get('/getEstados',[EstadoController::class,'getListAll']);
Route::get('/getMunicipios',[MunicipioController::class,'getListAll']);
Route::get('/getMunicipios/{id}',[MunicipioController::class,'getListAllUf']);
Route::get('/clientes',[ClienteController::class,'index']);
Route::get('/cliente/{id}',[ClienteController::class,'show']);
Route::delete('/cliente/{id}',[ClienteController::class,'destroy']);
Route::put('/cliente/{id}',[ClienteController::class,'update']);
Route::post('/cliente',[ClienteController::class,'store']);

Route::post('/logout', [AuthController::class, 'logout']);
Route::group(['middleware'=>['auth:sanctum']], function () {
    Route::post('/products', [ProductController::class, 'store']);
    Route::put('/products/{id}', [ProductController::class, 'update']);
    Route::delete('/products/{id}', [ProductController::class, 'destroy']);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
