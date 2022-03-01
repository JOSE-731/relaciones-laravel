<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumnoMaterias extends Model
{
    use HasFactory;

    public function materias(){
        //Un alumno tiene muchas materias
        return $this->belongsToMany(Materia::class, 'alumno:materia');
    }
}
