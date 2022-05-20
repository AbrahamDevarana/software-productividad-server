<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoAccion extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tipo_accion';

    protected $fillable = [
        'descripcion',
    ];

}
