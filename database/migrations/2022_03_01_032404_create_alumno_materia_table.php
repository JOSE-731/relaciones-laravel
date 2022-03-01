<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnoMateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno_materia', function (Blueprint $table) {
            $table->id();

            $table->foreignId('alumno_id')
            ->nullable()
            ->constrained('alumnos')
            ->cascadeOnDelete()
            ->nullOnDelete();
            
            $table->foreignId('materia_id')
                  ->nullable()
                  ->constrained('materias')
                  ->cascadeOnDelete()
                  ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumno_materia');
    }
}
