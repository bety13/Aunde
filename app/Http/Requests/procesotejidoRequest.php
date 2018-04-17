<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class procesotejidoRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'pOrilla_PTej'          => 'max:20',
            'pCentro_PTej'          => 'max:20',
            'ppOrilla_PTej'         => 'max:20',
            'promedio_PTej'         => 'max:20',
            'anchoU_PTej'           => 'max:20',
            'apariencia_PTej'       => 'max:20',
            'disposicion_PTej'      => 'max:20',
            'fechaE_PTej'           => 'max:20',
            'horaE_PTej'            => 'max:20',
            'analista_PTej'         => 'required',    
            'comentario_PTej'       => 'max:20'
        ];
    }
}
