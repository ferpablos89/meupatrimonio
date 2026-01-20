<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaGastoController;

Route::get('/categoriagasto', [CategoriaGastoController::class, 'index']);
Route::post('/categoriagasto', [CategoriaGastoController::class, 'store']);
Route::get('/categoriagasto/{categoriaGasto}', [CategoriaGastoController::class, 'show']);
Route::delete('/categoriagasto/{categoriaGasto}', [CategoriaGastoController::class, 'destroy']);
