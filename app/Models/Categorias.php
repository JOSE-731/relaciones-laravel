<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;
    protected $table = "categorias";
    protected $fillable = ['descripcion'];

    public function productos(){
        //Una categoria tiene muchos productos
        return $this->hasMany(Productos::class, 'id');
    }
}
