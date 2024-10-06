<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;

Route::get('/categorias', [CategoriaController::class, 'index']);
Route::get('/categorias/{id}/productos', [ProductoController::class, 'index']);
Route::get('/productos/{id}', [ProductoController::class, 'show'])->name('productos.show');

