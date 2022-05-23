<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proyecto extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nombre',
        'descripcion',
        'user_id',
        'inicio_periodo',
        'fin_periodo',
        'estatus_id',
        'prioridad_id',
        'enfoque_id',
        'iniciativa_id',
        'tipo_proyecto_id',
        'progreso'
     ];


    public function responsable(){
        return $this->belongsToMany(User::class, 'pivot_proyecto_responsable', 'proyecto_id', 'user_id');
    }

    public function prioridad(){
        return $this->belongsTo(Prioridad::class);
    }
    
    public function enfoque(){
        return $this->belongsTo(Enfoque::class);
    }

    public function iniciativa(){
        return $this->belongsTo(Iniciativa::class);
    }

    public function tipo_proyecto(){
        return $this->belongsTo(TipoProyecto::class);
    }

    public function estatus(){
        return $this->belongsTo(Estatus::class);
    }

    public function resultados_clave(){
        return $this->hasMany(ResultadoClave::class);
    }
}
