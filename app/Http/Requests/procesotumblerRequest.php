<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class procesotumblerRequest extends FormRequest
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
                           'pOrilla_PTum'          => 'max:20',
                           'pCentro_PTum'          => 'max:20',
                           'ppOrilla_PTum'         => 'max:20',
                           'pPromedio_PTum'        => 'max:20',
                           'anchoU_PTum'           => 'max:20',
                           'eloncacionW_PTum'      => 'max:20',
                           'eloncacionF_PTum'      => 'max:20',
                           'apariencia_PTum'       => 'max:20',
                           'tono_PTum'             => 'max:20',
                           'disposicion_Ptum'      => 'max:20',
                           'fechaE_PTum'           => 'max:20',
                           'horaE_PTum'            => 'max:20',
                           'analista_PTum'         => 'required',
                           'comentario_PTum'       => 'max:20',
                           'id_Ramas'              => 'max:20'
        ];
    }
}
