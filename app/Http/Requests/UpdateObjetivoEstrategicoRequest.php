<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateObjetivoEstrategicoRequest extends FormRequest
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
            'estatus_id' => 'required|integer|exists:estatus,id',
            'inicio_periodo' => 'required|date',
            'fin_periodo' => 'required|date|after_or_equal:inicio_periodo', 
            'perspectiva_id' => 'required|integer|exists:perspectivas,id',
            'codigo' => 'required|string|max:10|unique:objetivo_estrategicos',
        ];
    }
}
