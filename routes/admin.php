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
Route::get('/fichaVacunacion',[HomeController::class,'Registro_Vacunacion']);


Route::get('/dataFichaanimal',[HomeController::class,'Data_FichaAnimal']);
Route::get('/dataFichaparto',[HomeController::class,'Data_FichaParto']);
Route::get('/dataFichavacunacion',[HomeController::class,'Data_FichaVacunacion']);


Route::get('/confVacuna',[HomeController::class,'Conf_Vacuna']);
Route::get('/confUbicacion',[HomeController::class,'Conf_Ubicacion']);

//Route::get('/tabla_',[HomeController::class,'Tabla_Parto_R']);

//Route::get('/welcome',[HomeController::class,'welcome']);