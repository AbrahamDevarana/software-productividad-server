<?php

use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\EnfoqueController;
use App\Http\Controllers\EstatusController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\PrioridadController;
use App\Http\Controllers\IniciativaController;
use App\Http\Controllers\TipoTareaController;
use App\Http\Controllers\PerspectivaController;
use App\Http\Controllers\TipoProyectoController;
use App\Http\Controllers\ResultadoClaveController;
use App\Http\Controllers\Auth\GoogleLoginController;
use App\Http\Controllers\ObjetivoEstrategicoController;

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





Route::middleware('auth:api')->get('/user', function (Request $request) {
    return new UserResource( $request->user() );
});


// OAuth2 Routes
Route::get('login/google', [GoogleLoginController::class, 'redirect'])->middleware('cors');
Route::get('login/google/callback', [GoogleLoginController::class, 'callback'])->middleware('cors');


// Custom Routes
Route::get('tareas/filter/{filter?}', [TareaController::class, 'orderTarea']);


// API Routes
Route::resource('perspectivas', PerspectivaController::class)->except(['create']);
Route::resource('proyectos', ProyectoController::class)->except(['create', 'show'])->middleware('cors'); 
Route::resource('objetivos_estrategicos', ObjetivoEstrategicoController::class)->except(['create', 'show']);
Route::resource('iniciativas', IniciativaController::class)->except(['create', 'show']);
Route::resource('prioridades', PrioridadController::class)->except(['create', 'show']);
Route::resource('enfoque', EnfoqueController::class)->except(['create', 'show']);
Route::resource('estatus', EstatusController::class)->except(['create', 'show']);
Route::resource('resultado_clave', ResultadoClaveController::class)->except(['create', 'show']);
Route::resource('tareas', TareaController::class)->except(['create', 'show']);
Route::resource('users', UserController::class)->only(['index', 'update', 'destroy']);


Route::resource('tipo_proyectos', TipoProyectoController::class)->except(['create', 'show']);
Route::resource('tipo_tareas', TipoTareaController::class)->except(['create', 'show']);



