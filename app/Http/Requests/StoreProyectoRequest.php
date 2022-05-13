<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProyectoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
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
            'inicio_periodo' => 'required|date',
            'fin_periodo' => 'required|date|after:inicio_periodo',
            'estatus_id' => 'required|integer|exists:estatus,id',
            'user_id' => 'required|integer|exists:users,id',
            'prioridad_id' => 'required|integer|exists:prioridades,id',
            'enfoque_id' => 'required|integer|exists:enfoques,id',
            'iniciativa_id' => 'required|integer|exists:iniciativas,id',
            'tipo_proyecto_id' => 'required|integer|exists:tipo_proyectos,id',
            'progreso' => 'required|integer|between:0,100',
        ];
    }
}
