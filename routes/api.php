<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;


Route::post('/cliente', [ClienteController::class, 'salvar']);
Route::put('/cliente/{id}', [ClienteController::class, 'editar']);
Route::get('/cliente/{id}', [ClienteController::class, 'buscar']);
Route::delete('/cliente/{id}', [ClienteController::class, 'excluir']);
Route::get('/consulta/final-placa/{numero}', [ClienteController::class, 'buscarFinalPlaca']);
