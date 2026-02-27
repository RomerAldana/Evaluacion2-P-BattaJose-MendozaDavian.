<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\LibroController;

// Asegúrate de que las rutas estén definidas así
Route::resource('autores', AutorController::class);
Route::resource('libros', LibroController::class);

// Si quieres forzar el nombre del parámetro, puedes definirlas manualmente:
// Route::resource('autores', AutorController::class)->parameters([
//     'autores' => 'autor'
// ]);