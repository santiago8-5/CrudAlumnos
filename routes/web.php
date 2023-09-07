<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('principal');
});

// ALUMNOS
Route::get('productos', [ProductoController::class, 'index'])->name('productos.index'); // URL CURSOS ESTA CIENDO ADMINITRADA POR EL METODO INDEX DEL CONTROLADOR CursoController
// Route::get('productos/dos', [ProductoController::class, 'indexdos'])->name('productos.indexdos'); //QUITAR
Route::get('productos/create', [ProductoController::class, 'create'])->name('productos.create'); //
Route::post('productos', [ProductoController::class, 'store'])->name('productos.store');
Route::get('productos/{id}', [ProductoController::class, 'show'])->name('productos.show');
Route::get('productos/{producto}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
Route::put('productos/{producto}', [ProductoController::class, 'update'])->name('productos.update');
Route::delete('productos/{producto}', [ProductoController::class, 'destroy'])->name('productos.destroy');


// PERSONAS
Route::get('personas', [PersonaController::class, 'index'])->name('personas.index'); 
Route::get('personas/create', [PersonaController::class, 'create'])->name('personas.create'); //
Route::post('personas', [PersonaController::class, 'store'])->name('personas.store');
Route::get('personas/{id}', [PersonaController::class, 'show'])->name('personas.show');
Route::get('personas/{persona}/edit', [PersonaController::class, 'edit'])->name('personas.edit');
Route::put('personas/{persona}', [PersonaController::class, 'update'])->name('personas.update');
Route::delete('personas/{persona}', [PersonaController::class, 'destroy'])->name('personas.destroy');




// ALUMNOS
Route::get('alumnos', [AlumnoController::class, 'index'])->name('alumnos.index'); // URL CURSOS ESTA CIENDO ADMINITRADA POR EL METODO INDEX DEL CONTROLADOR CursoController
// Route::get('productos/dos', [ProductoController::class, 'indexdos'])->name('productos.indexdos'); //QUITAR
Route::get('alumnos/create', [AlumnoController::class, 'create'])->name('alumnos.create'); //
Route::post('alumnos', [AlumnoController::class, 'store'])->name('alumnos.store');
Route::get('alumnos/{id}', [AlumnoController::class, 'show'])->name('alumnos.show');
Route::get('alumnos/{alumno}/edit', [AlumnoController::class, 'edit'])->name('alumnos.edit');
Route::put('alumnos/{alumno}', [AlumnoController::class, 'update'])->name('alumnos.update');
Route::delete('alumnos/{alumno}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');