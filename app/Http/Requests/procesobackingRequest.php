<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class procesobackingRequest extends FormRequest
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
                           'pOrilla_PBack'       => 'max:50',
                           'pCentro_PBack'       => 'max:50',
                           'ppOrilla_PBack'      => 'max:50',
                           'pPromedio_PBack'     => 'max:50',
                           'anchoU_PBack'        => 'max:50',
                           'elongacionW_PBack'  => 'max:50',
                           'elongacionF_PBack'  => 'max:50',
                           'repelente_PBack'    => 'max:50',
                           'velcro_PBack'       => 'max:50',
                           'croking_PBack'      => 'max:50',
                           'distanciaW_PBack'   => 'max:50',
                           'tiempoW_PBack'      => 'max:50',
                           'velocidadW_PBack'   => 'max:50',
                           'distanciaF_PBack'   => 'max:50',
                           'tiempoF_PBack'      => 'max:50',
                           'velocidadF_PBack'   => 'max:50',
                           'apariencia_PBack'   => 'max:50',
                           'tono_PBack'         => 'max:50',
                           'disposicion_PBack'  => 'max:50',
                           'fechaE_PBack'       => 'max:50',
                           'horaE_PBack'        => 'max:50',
                           'analista_PBack'     => 'required',
                           'comentario_PBack'   => 'max:50',
                           'id_Ramas'           => 'max:50'
        ];
    }
}
