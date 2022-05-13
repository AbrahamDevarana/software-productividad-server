<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'google_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function proyectos(){
        return $this->belongsToMany(Proyecto::class, 'pivot_proyecto_responsable', 'user_id', 'proyecto_id');
    }

    public function resultados(){
        return $this->belongsToMany(ResultadoClave::class, 'pivot_proyecto_resultado_clave', 'user_id', 'resultado_clave_id');
    }
    
    public function acciones(){
        return $this->belongsToMany(Accion::class, 'pivot_accion_proyecto', 'user_id', 'accion_id');
    }

    public function equipos(){
        return $this->belongsToMany(Equipo::class, 'pivot_equipo_user', 'user_id', 'equipo_id');
    }

    public function lider(){
        return $this->hasMany(Equipo::class, 'lider_id');
    }
}
