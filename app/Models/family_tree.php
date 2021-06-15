<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class family_tree extends Model
{
    use HasFactory;
    protected $table = "family_tree";


    public function CodigoAnimal(){
        return $this->belongsTo(file_animale::class);
    }
}
