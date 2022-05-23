<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResultadoClave extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'nombre',
        'descripcion',
        'ponderacion',
        'inicio_periodo',
        'fin_periodo',
        'progreso',
        'orden',
        'user_id',
        'prioridad_id',
        'estatus_id',
        'proyecto_id',
        'resultado_id',
    ];

    public function responsable(){
        return $this->belongsToMany(User::class, 'pivot_proyecto_resultado_clave', 'resultado_clave_id', 'user_id');
    }

    public function proyectos(){
        return $this->belongsToMany(Proyecto::class, 'pivot_proyecto_resultado_clave', 'resultado_clave_id', 'proyecto_id');
    }

    public function tareas(){
        return $this->hasMany(Tarea::class);
    }
}
