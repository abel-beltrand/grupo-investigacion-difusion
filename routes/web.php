<?php

use App\Http\Controllers\ActividadDeTutelajeController;
use App\Http\Controllers\ActividadDocenteController;
use App\Http\Controllers\ActualizacionPEController;
use App\Http\Controllers\ActualizacionPosgradosController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\EstanciasAcademicasController;
use App\Http\Controllers\GestionAcademicaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LgaicController;
use App\Http\Controllers\ObjetivoGeneralController;
use App\Http\Controllers\InvestigadoresController;
use App\Http\Controllers\MapaDelSitioController;
use App\Http\Controllers\ParticipacionConOtrasCA;
use App\Http\Controllers\ParticipacionConOtrasCAController;
use App\Http\Controllers\ProductosCientificosController;
use App\Http\Controllers\ProyectosDeEstudiantesController;
use App\Http\Controllers\ProyectosDesarrolladosController;

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
//Ruta de Home
Route::get('/', HomeController::class)->name('home');

//Ruta del Objetivo General
Route::get('objetivo-general', [ObjetivoGeneralController::class, 'show'])->name('objetivo_general.show');
Route::get('objetivo-general/create', [ObjetivoGeneralController::class, 'create'])->name('objetivo_general.create');

//Rutas del LGAIC
Route::get('lgaic', [LgaicController::class, 'show'])->name('lgaic.show');
Route::get('lgaic/create',[LgaicController::class, 'create'])->name('lgaic.create');

//Rutas de Investigadores
Route::get('investigadores', [InvestigadoresController::class, 'index'])->name('investigadores.index');
Route::get('investigadores/create', [InvestigadoresController::class, 'create'])->name('investigadores.create');
Route::get('investigadores/maal', [InvestigadoresController::class, 'maal'])->name('investigadores.maal');
Route::get('investigadores/cpi', [InvestigadoresController::class, 'cpi'])->name('investigadores.cpi');
Route::get('investigadores/mlv', [InvestigadoresController::class, 'mlv'])->name('investigadores.mlv');
Route::get('investigadores/msy', [InvestigadoresController::class, 'msy'])->name('investigadores.msy');

//Rutas para Proyectos desarrollados
Route::get('proyectos-desarrollados', [ProyectosDesarrolladosController::class, 'index'])->name('proyectos-desarrollados.index');
Route::get('proyectos-desarrollados/{anio}', [ProyectosDesarrolladosController::class, 'show'])->name('proyectos-desarrollados.show');
 
//Rutas para Productos Científicos
Route::get('productos-cientificos', [ProductosCientificosController::class ,'index'])->name('productos-cientificos.index');
Route::get('productos-cientificos/{anio}', [ProductosCientificosController::class ,'show'])->name('productos-cientificos.show');

//Rutas para Estancias académicas y científicas
Route::get('estancias-academicas-y-cientificas',[EstanciasAcademicasController::class, 'index'])->name('estancias-academicas-y-cientificas.index');
Route::get('estancias-academicas-y-cientificas/{anio}',[EstanciasAcademicasController::class, 'show'])->name('estancias-academicas-y-cientificas.show');

//Rutas para Participación con otros CA
Route::get('participacion-con-otras-ca', [ParticipacionConOtrasCAController::class, 'index'])->name('participacion-con-otras-ca.index');
Route::get('participacion-con-otras-ca/{anio}', [ParticipacionConOtrasCAController::class, 'show'])->name('participacion-con-otras-ca.show');

//Rutas de Actividad Docente
Route::get('actividad-docente', [ActividadDocenteController::class,'index'])->name('actividad-docente.index');
Route::get('actividad-docente/{anio}', [ActividadDocenteController::class,'show'])->name('actividad-docente.show');

//Rutas de Actividades de tutelaje
Route::get('actividades-de-tutelaje', [ActividadDeTutelajeController::class, 'index'])->name('actividades-de-tutelaje.index');
Route::get('actividades-de-tutelaje/{anio}', [ActividadDeTutelajeController::class, 'show'])->name('actividades-de-tutelaje.show');

//Rutas de proyectos de estudiantes
Route::get('proyectos-de-estudiantes', [ProyectosDeEstudiantesController::class, 'index'])->name('proyectos-de-estudiantes.index');
Route::get('proyectos-de-estudiantes/{anio}', [ProyectosDeEstudiantesController::class, 'show'])->name('proyectos-de-estudiantes.show');

//Rutas de Gestión Académica
Route::get('gestion-academica', [GestionAcademicaController::class, 'index'])->name('gestion-academica.index');
Route::get('gestion-academica/{anio}', [GestionAcademicaController::class, 'show'])->name('gestion-academica.show');

//Rutas de Actualización de PE
Route::get('actualizacion-pe', [ActualizacionPEController::class, 'index'])->name('actualizacion-de-pe.index');
Route::get('actualizacion-de-pe/{anio}', [ActualizacionPEController::class, 'show'])->name('actualizacion-de-pe.show');
//Rutas de posgrados

Route::get('actualizacion-de-posgrados',[ActualizacionPosgradosController::class,'index'])->name('actualizacion-de-posgrados.index');
Route::get('actualizacion-de-posgrados/{anio}', [ActualizacionPosgradosController::class, 'show'])->name('actualizacion-de-posgrados.show');
//Ruta del mapa del sitio
Route::get('mapa-sitio', MapaDelSitioController::class);
//Ruta de contacto
Route::get('contacto', ContactoController::class);

//Ruta de Inicio de Sesión