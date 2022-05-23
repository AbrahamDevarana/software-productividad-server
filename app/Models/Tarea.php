<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tarea extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nombre',
        'descripcion',
        'user_id',
        'estatus_id',
        'inicio_periodo',
        'fin_periodo',
        'orden',
        'grupo_id',
        'resultado_clave_id'
    ];

    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function estatus()
    {
        return $this->belongsTo(Estatus::class);
    }

    public function responsable(){
        return $this->belongsToMany(User::class, 'pivot_tarea_proyecto', 'tarea_id', 'user_id');
    }

    public function comentarios(){
        return $this->belongsToMany(Comentario::class, 'pivot_comentario_tarea', 'tarea_id', 'comentario_id');
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, 'pivot_tag_tarea', 'tarea_id', 'tag_id');
    }

    public function tipo_tarea(){
        return $this->hasOne(TipoTarea::class, 'id', 'tipo_tarea_id');
    }

    public function resultado_clave(){
        return $this->belongsTo(ResultadoClave::class, 'resultado_clave_id');
    }
}
