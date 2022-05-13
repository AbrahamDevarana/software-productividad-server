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
        Schema::create('acciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->foreignId('user_id')->constrained();
            $table->foreignID('estatus_id')->constrained();
            $table->date('inicio_periodo');
            $table->date('fin_periodo');
            $table->smallInteger('orden');
            $table->foreignId('grupo_id')->constrained();
            $table->softDeletes('deleted_at');
            $table->unsignedInteger('resultado_clave_id')->nullable();
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
        Schema::dropIfExists('acciones');
    }
};
