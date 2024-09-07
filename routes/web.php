<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;



// Redirecciona la ruta raíz a la ruta de productos
Route::get('/', [ProductController::class, 'index'])->name('products.index');

// Rutas de recursos para operaciones CRUD
Route::resource('products', ProductController::class);


