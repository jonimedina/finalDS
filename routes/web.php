<?php

use App\Http\Controllers\DocenteController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/auth.login');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::post('/home', [HomeController::class, 'index'])->name('home');

    //Ruta del perfil
    Route::get('/perfil', [UserController::class, 'mostrarPerfil'])->name('perfil');
    Route::post('/modificar-perfil{id}', [UserController::class, 'modificarPerfil'])->name('perfil.modificar');
    Route::post('/modificar-password{mail}', [UserController::class, 'modificarPassword'])->name('perfil.cambioPassword');

    //Rutas de Docentes
    Route::get('/docentes', [DocenteController::class, 'index'])->name('docentes.index');
    Route::post('/registro-docente', [DocenteController::class, 'create'])->name('docentes.create');
    Route::post('/editar-docente{id}', [DocenteController::class, 'update'])->name('docentes.update');
    Route::get('/eliminar-docente{id}', [DocenteController::class, 'destroy'])->name('docentes.destroy');
    Route::get('/buscar-docente', [DocenteController::class, 'buscar'])->name('docentes.buscar');


    //Rutas de Estudiantes
    Route::get('/estudiantes', [EstudianteController::class, 'index'])->name('estudiantes.index');
    Route::post('/registro-estudiante', [EstudianteController::class, 'create'])->name('estudiantes.create');
    Route::post('/editar-estudiante{id}', [EstudianteController::class, 'update'])->name('estudiantes.update');
    Route::get('/eliminar-estudiante{id}', [EstudianteController::class, 'destroy'])->name('estudiantes.destroy');
    Route::get('/buscar-estudiante', [EstudianteController::class, 'buscar'])->name('estudiantes.buscar');
    Route::get('/listado1-estudiantes', [EstudianteController::class, 'listado1'])->name('estudiantes.listado1');
    Route::get('/listado2-estudiantes', [EstudianteController::class, 'listado2'])->name('estudiantes.listado2');

    //Rutas de Materias
    Route::get('/materias', [MateriaController::class, 'index'])->name('materia.index');
    Route::post('/nueva-materia', [MateriaController::class, 'create'])->name('materia.create');
    Route::get('/eliminar-materia{id}', [MateriaController::class, 'destroy'])->name('materia.destroy');

});