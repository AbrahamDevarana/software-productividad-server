<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ObjetivoEstrategico extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'nombre',
        'descripcion',
        'estatus_id',
        'inicio_periodo',
        'fin_periodo',
        'perspectiva_id',
        'codigo'
    ];


    public function perspectiva(){
        return $this->belongsTo(Perspectiva::class);
    }

    public function iniciativas(){
        return $this->hasMany(Iniciativa::class);
    }
}
