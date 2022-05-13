<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreResultadoClaveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'ponderacion' => 'required|numeric',
            'inicio_periodo' => 'required|date',
            'fin_periodo' => 'required|date|after:inicio_periodo',
            'progreso' => 'required|numeric',
            'orden' => 'required|numeric',
            'user_id' => 'required|numeric|exists:users,id',
            'prioridad_id' => 'required|numeric|exists:prioridades,id',
            'estatus_id' => 'required|numeric|exists:estatus,id',
            'proyecto_id' => 'required|numeric|exists:proyectos,id',
            'resultado_id' => 'required|numeric|exists:resultados,id',
        ];
    }
}
