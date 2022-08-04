<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\reservasController;
use App\Http\Controllers\pistasController;
use App\Http\Controllers\deporteController;
use App\Http\Controllers\usuariosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// RESERVAS
Route::get('/reservas/{id}', [reservasController::class,'index']); //muestra todas las reservas
Route::get('/reservas', [reservasController::class,'index']); 
Route::post('/reservas', [reservasController::class,'store']); // crea una reserva
// Route::put('/reservas/{id}', [ArticuloController::class,'update']); // actualiza un reserva
Route::delete('/reservas/{id}', [reservasController::class,'destroy']); //elimina un reserva

// PISTAS
Route::get('/pistas/{id}', [pistasController::class,'index']); //muestra todas las pistas
Route::get('/pistas', [pistasController::class,'index']); 
Route::post('/pistas', [pistasController::class,'store']); // crea una pista
Route::put('/pistas/{id}', [pistasController::class,'update']); // actualiza una pista
Route::delete('/pistas/{id}', [pistasController::class,'destroy']); //elimina una pista

//DEPORTE
Route::get('/deporte/{id}', [deporteController::class,'index']); //muestra todas los deportes
Route::get('/deporte', [deporteController::class,'index']); 
Route::post('/deporte', [deporteController::class,'store']); // añade un deporte
Route::delete('/deporte/{id}', [deporteController::class,'destroy']); //elimina un deporte

//LOGIN
Route::view('/login', 'login') ->name('login');
Route::view('/registro', 'register')->name('registro');
Route::view('/privada', 'secret')->middleware('auth') ->name('privada'); //ruta segura/privada

Route::post('/validar-registro', [usuariosController::class,'register'])->name('validar-registro'); 
Route::post('/iniciar-sesion', [usuariosController::class,'login'])->name('iniciar-sesion'); // añade un deporte
Route::get('/logout', [usuariosController::class,'logout'])->name('logout'); //elimina un deporte
