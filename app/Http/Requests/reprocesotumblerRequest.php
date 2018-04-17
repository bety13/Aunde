<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class reprocesotumblerRequest extends FormRequest
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
                           'pOrilla_ReTum'          => 'max:50',
                           'pCentro_ReTum'          => 'max:50',
                           'ppOrilla_ReTum'         => 'max:50',
                           'pPromedio_ReTum'            => 'max:50',
                           'anchoU_ReTum'           => 'max:50',
                           'eloncacionW_ReTum'          => 'max:50',
                           'eloncacionF_ReTum'          => 'max:50',
                           'apariencia_ReTum'           => 'max:50',
                           'tono_ReTum'         => 'max:50',
                           'disposicion_ReTum'          => 'max:50',
                           'fechaE_ReTum'           => 'max:50',
                           'horaE_ReTum'            => 'max:50',
                           'analista_ReTum'         => 'required',
                           'comentario_ReTum'           => 'max:50',
                           'id_PTum'            => 'required',
        ];
    }
}
