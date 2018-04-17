<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class reprocesolavadoRequest extends FormRequest
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
                           'pOrilla_ReLav'       => 'max:50',
                           'pCentro_ReLav'       => 'max:50',
                           'ppOrilla_ReLav'      => 'max:50',
                           'pPromedio_ReLav'         => 'max:50',
                           'anchoU_ReLav'        => 'max:50',
                           'apariencia_ReLav'        => 'max:50',
                           'disposicion_ReLav'       => 'max:50',
                           'fechaE_ReLav'        => 'max:50',
                           'horaE_ReLav'         => 'max:50',
                           'analista_ReLav'      => 'Required',
                           'comentario_ReLav'        => 'max:50',
                           'id_PLav'         => 'Required',
        ];
    }
}
