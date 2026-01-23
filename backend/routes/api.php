<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaGastoController;
use App\Http\Controllers\GastoController;

Route::get('/categoriagasto', [CategoriaGastoController::class, 'index']);
Route::post('/categoriagasto', [CategoriaGastoController::class, 'store']);
Route::get('/categoriagasto/{categoriaGasto}', [CategoriaGastoController::class, 'show']);
Route::delete('/categoriagasto/{categoriaGasto}', [CategoriaGastoController::class, 'destroy']);
Route::get('/gasto', [GastoController::class, 'index']);
Route::post('/gasto', [GastoController::class, 'store']);
Route::get('/gasto/{gasto}', [GastoController::class, 'show']);
Route::delete('/gasto/{gasto}', [GastoController::class, 'destroy']);

