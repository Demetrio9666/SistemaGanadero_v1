<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Race;

class RazaController extends Controller
{    ///este es el indix muestra tabla

   
    public function Conf_Raza(){
        $raza_v = Race::all();
        return view('conf.confRaza',compact('raza_v'));
    }

    public function Conf_Raza_create(){
        return view('f-raza.Raza');
    }

    public function store(Request $request){
       $raza = new Race();
        
       $raza->description = $request->description;
       $raza->percentage = $request->percentage;
       $raza->save(); 
       
       return redirect('/confRaza');
        
    }

    public function edit($id){
        $raza = Race:: find($id);

        
    }
  

    



}
