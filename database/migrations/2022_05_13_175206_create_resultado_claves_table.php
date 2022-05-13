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
        Schema::create('resultado_claves', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->smallInteger('ponderacion');
            $table->date('inicio_periodo');
            $table->date('fin_periodo');
            $table->smallInteger('progreso');
            $table->integer('orden');
            $table->foreignID('user_id')->constrained();
            $table->foreignID('prioridad_id')->constrained();
            $table->foreignID('estatus_id')->constrained();
            $table->foreignID('proyecto_id')->constrained();
            $table->foreignID('resultado_id')->constrained();
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
        Schema::dropIfExists('resultado_claves');
    }
};
