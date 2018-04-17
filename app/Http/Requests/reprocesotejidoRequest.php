<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class reprocesotejidoRequest extends FormRequest
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
            'pOrilla_ReTej'         => 'max:50',
            'pCentro_ReTej'         => 'max:50',
            'ppOrilla_ReTej'            => 'max:50',
            'pPromedio_ReTej'           => 'max:50',
            'anchoU_ReTej'          => 'max:50',
            'apariencia_ReTej'          => 'max:50',
            'disposicion_ReTej'         => 'max:50',
            'fechaE_ReTej'          => 'max:50',
            'horaE_ReTej'           => 'max:50',
            'analista_ReTej'            => 'required',
            'comentario_ReTej'          => 'max:50',
            'id_PTej'           => 'required',
        ];
    }
}
