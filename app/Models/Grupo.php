<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grupo extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'grupos';

    protected $fillable = [
        'descripcion',
        'user_id',
    ];


    public function acciones()
    {
        return $this->hasMany(Accion::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
