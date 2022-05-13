<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->date('inicio_periodo');
            $table->date('fin_periodo');
            $table->unsignedBigInteger('estatus_id');
            $table->foreignId('user_id')->constrained(); // Responsable de proyecto
            $table->foreignId('prioridad_id')->constrained();
            $table->foreignId('enfoque_id')->constrained();
            $table->foreignId('iniciativa_id')->constrained();
            $table->foreignId('tipo_proyecto_id')->constrained();
            $table->smallInteger('progreso')->default(0);
            $table->softDeletes('deleted_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectos');
    }
};
