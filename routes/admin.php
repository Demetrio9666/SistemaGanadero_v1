<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\RazaController;
//use App\Http\Controllers\DatatableController;

//Route::get('/',[HomeController::class,'welcome']);



Route::get('/dashboard',[HomeController::class,'Dashboard']);

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
  return view('admin.index');
})->name('index_admin');

Route::get('/fichaAnimal',[HomeController::class,'Registro_Animal']);
Route::get('/fichaParto',[HomeController::class,'Registro_Parto']);
Route::get('/fichaTratamiento',[HomeController::class,'Registro_Tratamiento']);
Route::get('/fichaReproduccion',[HomeController::class,'Registro_Reproduccion']);


Route::get('/controlDesparasitacion',[HomeController::class,'Control_Despara']);
Route::get('/controlPeso',[HomeController::class,'Control_Peso']);
Route::get('/controlPrenes',[HomeController::class,'Control_Prenes']);
Route::get('/controlVacuna',[HomeController::class,'Control_Vacuna']);


Route::get('/confVacuna',[HomeController::class,'Conf_Vacuna']);
Route::get('/confUbicacion',[HomeController::class,'Conf_Ubicacion']);
Route::get('/confDespa',[HomeController::class,'Conf_Desparacitante']);
Route::get('/confVi',[HomeController::class,'Conf_Vitamina']);
Route::get('/confMate',[HomeController::class,'Conf_Pajuela']);
Route::get('/confAnt',[HomeController::class,'Conf_Antibiotico']);



Route::get('/confRaza',[RazaController::class,'Conf_Raza'])->name('vista');
Route::get('/confRaza/create',[RazaController::class,'Conf_Raza_create'])->name('formulario');
Route::post('/confRaza', [RazaController::class,'store'])->name('confRaza.Raza_insert'); 




//Route::get('/tabla_',[HomeController::class,'Tabla_Parto_R']);

//Route::get('/welcome',[HomeController::class,'welcome']);