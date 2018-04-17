<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class procesopunzonadoRequest extends FormRequest
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
                           'pOrilla_PPunzo'         => 'max:20',
                           'pCentro_PPunzo'         => 'max:20',
                           'ppOrilla_PPunzo'            => 'max:20',
                           'pPromedio_PPunzo'           => 'max:20',
                           'anchoU_PPunzo'          => 'max:20',
                           'apariencia_PPunzo'          => 'max:20',
                           'disposicion_PPunzo'         => 'max:20',
                           'fechaE_PPunzo'          => 'max:20',
                           'horaE_PPunzo'           => 'max:20',
                           'analista_PPunzo'            => 'required',
                           'comentario_PPunzo'          => 'max:20',
                           'id_Ramas'           => 'max:20',
        ];
    }
}
