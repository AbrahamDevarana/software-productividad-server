<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreIniciativaRequest extends FormRequest
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
            'inicio_periodo' => 'required|date',
            'fin_periodo' => 'required|date|after:inicio_periodo',
            'objetivo_estrategico_id' => 'required|integer|exists:objetivos_estrategicos,id',
        ];
    }
}
