<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoTarea extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tipo_tarea';

    protected $fillable = [
        'descripcion',
    ];

}
