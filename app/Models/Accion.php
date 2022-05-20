<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Accion extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'acciones';

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
        return $this->belongsToMany(User::class, 'pivot_accion_proyecto', 'accion_id', 'user_id');
    }

    public function comentarios(){
        return $this->belongsToMany(Comentario::class, 'pivot_comentario_accion', 'accion_id', 'comentario_id');
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, 'pivot_accion_tag', 'accion_id', 'tag_id');
    }

    public function tipo_accion(){
        return $this->hasOne(TipoAccion::class, 'id', 'tipo_accion_id');
    }
}
