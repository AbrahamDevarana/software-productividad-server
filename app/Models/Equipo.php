<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipo extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nombre',
        'descripcion',
        'lider_id',
    ];

    public function lider()
    {
        return $this->belongsTo(User::class, 'lider_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'pivot_equipo_user', 'equipo_id', 'user_id');
    }
}
