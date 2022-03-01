<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    protected $table = "productos";
    protected $fillable = ['id_categorias','descripcion'];

    public function categorias(){
        //Un producto pertenece a una categoria
        return $this->belongsTo(Categorias::class, 'id_categorias');
    }
}
