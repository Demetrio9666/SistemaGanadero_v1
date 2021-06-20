<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\actual_state;
use App\Models\animal_type;
use App\Models\family_tree;
use App\Models\file_animale;
use App\Models\race;
use App\Models\file_partum;
use App\Models\file_area;
use App\Models\health_condition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
   
    public function Dashboard(){
        return view('admin.index');
    }
    public function welcome(){
        return view('teams.welcome');
    }
    public function Registro_Animal(){
        $Races = race::all();
        $Type = animal_type::all();
        $Local = file_area::all();
        $Health = health_condition::all();
        $Statu= actual_state::all();

        $mother  = DB::table('file_animale')
            ->select(    'animalCode',
                         'fecha_nacimiento',
                         'age_month',
                         'sex'
                      )
            ->where('sex','Hembra')
            ->where('age_month','>=',4)            
            ->get();
                             

        $padre = DB::table('file_animale')
                ->select(    'animalCode',
                            'fecha_nacimiento',
                            'age_month',
                            'sex'
                        )
                ->where('sex','Macho')        
                ->where('age_month','>=',8)
                ->get();



        return view('registro.fichaAnimal',compact('Races','Type','Local','Health','Statu','padre','mother'));
    }

    public function Registro_Parto(){

        $mother  = DB::table('file_animale')
        ->select(    'animalCode',
                     'fecha_nacimiento',
                     'age_month',
                     'sex'
                  )
        ->where('sex','Hembra')
        ->where('age_month','>=',4)            
        ->get();
        $padre = DB::table('file_animale')
        ->select(    'animalCode',
                     'fecha_nacimiento',
                     'age_month',
                     'sex'
                  )
        ->where('sex','Macho')        
        ->where('age_month','>=',8)
        ->get();

        $parto =DB::table('file_partum')
        ->select(    'datePartum',
                     'idanimalCode',
                     'male',
                     'female',
                     'dead',
                     'statu_mother'
        )
        ->get();
        return view('registro.fichaParto',compact('padre','mother','parto'));
    }


    public function Registro_Tratamiento(){
        $animales = DB::table('file_animale')
        ->select(    'animalCode',
                     'fecha_nacimiento',
                     'age_month',
                     'sex'
                  )
        ->get();
        return view('registro.fichaTratamiento',compact('animales'));
    }

    public function Registro_Reproduccion(){
        return view('registro.fichaReproduccion');
    }


    
    public function Control_Despara(){
        return view('controles.controlDesparasitacion');
    }
    public function Control_Peso(){
        return view('controles.controlPeso');
    }
    public function Control_Prenes(){
        return view('controles.controlPrenes');
    }
    public function Control_Vacuna(){
        return view('controles.controlVacuna');
    }




    public function Conf_Vacuna(){
        return view('conf.confVacuna');
    }
    public function Conf_Ubicacion(){
        return view('conf.confUbicacion');
    }
    public function Conf_Desparacitante(){
        return view('conf.confDesparasitante');
    }
    public function Conf_Pajuela(){
        return view('conf.confPajuela');
    }
    public function Conf_Antibiotico(){
        return view('conf.confAntibiotico');
    }
    public function Conf_Vitamina(){
        return view('conf.confVitamina');
    }

}
