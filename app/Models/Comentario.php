<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comentario extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'comentario',
        'fecha_comentario',
        'user_id',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function acciones()
    {
        return $this->belongsToMany(Accion::class, 'pivot_comentario_accion', 'comentario_id', 'accion_id');
    }
}
