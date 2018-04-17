<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class procesolavadoRequest extends FormRequest
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
            'pOrilla_PLav'          => 'max:20',
            'pCentro_PLav'          => 'max:20',
            'ppOrilla_PLav'         => 'max:20',
            'promedio_PLav'         => 'max:20',
            'anchoU_PLav'           => 'max:20',
            'apariencia_PLav'       => 'max:20',
            'disposicion_PLav'      => 'max:20',
            'fechaE_PLav'           => 'max:20',
            'horaE_PLav'            => 'required',    
            'analista_PLav'         => 'max:20',
            'comentario_PLav'       => 'max:100'
        ];
    }
}
