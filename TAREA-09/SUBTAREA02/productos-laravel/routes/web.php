<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Rutas públicas de la aplicación
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Dashboard (solo usuarios autenticados y verificados)
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*
 Perfil del usuario (todos los usuarios autenticados)
*/
Route::middleware(['auth'])->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

/*

| Rutas SOLO para ADMIN
| CRUD completo de productos
*/
Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::resource('products', ProductController::class);
});

/*
| Rutas SOLO para CLIENTES (usuarios normales)
| Vista pública de productos (solo lectura)
*/
Route::middleware(['auth'])->group(function () {
    Route::get('/productos', [ProductController::class, 'publicIndex'])
        ->name('products.public');
});

/*
| Rutas de autenticación generadas por Breeze
*/
require __DIR__.'/auth.php';
