<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class reprocesobackingRequest extends FormRequest
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
                           'pOrilla_ReBack'         => 'max:20',
                           'pCentro_ReBack'         => 'max:20',
                           'ppOrilla_ReBack'            => 'max:20',
                           'pPromedio_ReBack'           => 'max:20',
                           'anchoU_ReBack'          => 'max:20',
                           'elongacionW_ReBack'         => 'max:20',
                           'elongacionF_ReBack'         => 'max:20',
                           'repelente_ReBack'           => 'max:20',
                           'velcro_ReBack'          => 'max:20',
                           'croking_ReBack'         => 'max:20',
                           'distanciaW_ReBack'          => 'max:20',
                           'tiempoW_ReBack'         => 'max:20',
                           'velocidadW_ReBack'          => 'max:20',
                           'distanciaF_ReBack'          => 'max:20',
                           'tiempoF_ReBack'         => 'max:20',
                           'velocidadF_ReBack'          => 'max:20',
                           'apariencia_ReBack'          => 'max:20',
                           'tono_ReBack'            => 'max:20',
                           'disposicion_ReBack'         => 'max:20',
                           'fechaE_ReBack'          => 'max:20',
                           'horaE_ReBack'           => 'max:20',
                           'analista_ReBack'            => 'required',
                           'comentario_ReBack'          => 'max:20',
                           'id_PBack'           => 'required',
        ];
    }
}
