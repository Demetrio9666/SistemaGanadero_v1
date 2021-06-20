<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;


//Route::get('/',[HomeController::class,'welcome']);



Route::get('/dashboard',[HomeController::class,'Dashboard']);

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
  return view('admin.index');
})->name('index_admin');

Route::get('/fichaAnimal',[HomeController::class,'Registro_Animal']);
Route::get('/fichaParto',[HomeController::class,'Registro_Parto']);
Route::get('/fichaTratamiento',[HomeController::class,'Registro_Tratamiento']);
Route::get('/fichaReproduccion',[HomeController::class,'Registro_Reproduccion']);



//Route::get('/dataFichaanimal',[HomeController::class,'Data_FichaAnimal']);
//Route::get('/dataFichaparto',[HomeController::class,'Data_FichaParto']);
//Route::get('/dataFichavacunacion',[HomeController::class,'Data_FichaVacunacion']);


Route::get('/controlDesparasitacion',[HomeController::class,'Control_Despara']);
Route::get('/controlPeso',[HomeController::class,'Control_Peso']);
Route::get('/controlPrenes',[HomeController::class,'Control_Prenes']);
Route::get('/controlVacuna',[HomeController::class,'Control_Vacuna']);


Route::get('/confVacuna',[HomeController::class,'Conf_Vacuna']);
Route::get('/confUbicacion',[HomeController::class,'Conf_Ubicacion']);
Route::get('/confDespa',[HomeController::class,'Conf_Desparacitante']);


//Route::get('/tabla_',[HomeController::class,'Tabla_Parto_R']);

//Route::get('/welcome',[HomeController::class,'welcome']);