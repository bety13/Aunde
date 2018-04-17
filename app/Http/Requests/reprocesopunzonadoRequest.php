<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class reprocesopunzonadoRequest extends FormRequest
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
                           'pOrilla_RePunzo'        => 'max:50',
                           'pCentro_RePunzo'        => 'max:50',
                           'ppOrilla_RePunzo'       => 'max:50',
                           'pPromedio_RePunzo'      => 'max:50',
                           'anchoU_RePunzo'     => 'max:50',
                           'apariencia_RePunzo'     => 'max:50',
                           'disposicion_RePunzo'        => 'max:50',
                           'fechaE_RePunzo'     => 'max:50',
                           'horaE_RePunzo'      => 'max:50',
                           'analista_RePunzo'       => 'required',
                           'comentario_RePunzo'     => 'max:50',
                           'id_PPunzo'      => 'required',
        ];
    }
}
