<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTareaRequest extends FormRequest
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
            'user_id' => 'required|integer',
            'estatus_id' => 'required|integer',
            'inicio_periodo' => 'required|date',
            'fin_periodo' => 'required|date',
            'orden' => 'required|integer',
            'grupo_id' => 'required|integer',
            'resultado_clave_id' => 'nullable|integer',
        ];
    }
}
