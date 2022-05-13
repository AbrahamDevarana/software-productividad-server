<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'descripcion',
    ];


    public function acciones(){
        return $this->belongsToMany(Accion::class, 'pivot_accion_tag', 'tag_id', 'accion_id');
    }
}
