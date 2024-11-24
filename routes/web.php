<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogController;

Route::get('/', function () {
    return view('home');
});

// Rutas de autenticación
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/logout', function () {
    return "Logout usuario";
});

// Rutas para el catálogo de películas
Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog.index'); // Muestra todas las películas
Route::get('/catalog/show/{id}', [CatalogController::class, 'show'])->name('catalog.show'); // Muestra los detalles de una película
Route::get('/catalog/create', [CatalogController::class, 'create'])->name('catalog.create'); // Muestra el formulario de creación de película
Route::post('/catalog/create', [CatalogController::class, 'store'])->name('catalog.store'); // Procesa el formulario de creación
Route::get('/catalog/edit/{id}', [CatalogController::class, 'edit'])->name('catalog.edit'); // Muestra el formulario de edición de película
Route::put('/catalog/edit/{id}', [CatalogController::class, 'update'])->name('catalog.update'); // Actualiza los datos de la película
Route::delete('/catalog/delete/{id}', [CatalogController::class, 'destroy'])->name('catalog.delete'); // Elimina una película