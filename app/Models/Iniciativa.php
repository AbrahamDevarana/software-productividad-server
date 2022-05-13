<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Iniciativa extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'nombre',
        'descripcion',
        'inicio_periodo',
        'fin_periodo',
        'objetivo_estrategico_id',
        'estatus_id'
    ];

    public function objetivoEstrategico()
    {
        return $this->belongsTo(ObjetivoEstrategico::class);
    }
}
