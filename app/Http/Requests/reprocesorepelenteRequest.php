<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class reprocesorepelenteRequest extends FormRequest
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
                           'pOrilla_ReRep'          => 'max:50',
                           'pCentro_ReRep'          => 'max:50',
                           'ppOrilla_ReRep'         => 'max:50',
                           'pPromedio_ReRep'            => 'max:50',
                           'anchoU_ReRep'           => 'max:50',
                           'elongacionW_ReRep'          => 'max:50',
                           'elongacionF_ReRep'          => 'max:50',
                           'repelente_ReRep'            => 'max:50',
                           'velcro_ReRep'           => 'max:50',
                           'croking_ReRep'          => 'max:50',
                           'distanciaW_ReRep'           => 'max:50',
                           'tiempoW_ReRep'          => 'max:50',
                           'velocidadW_ReRep'           => 'max:50',
                           'distanciaF_ReRep'           => 'max:50',
                           'tiempoF_ReRep'          => 'max:50',
                           'velocidadF_ReRep'           => 'max:50',
                           'apariencia_ReRep'           => 'max:50',
                           'tono_ReRep'         => 'max:50',
                           'disposicion_ReRep'          => 'max:50',
                           'fechaE_ReRep'           => 'max:50',
                           'horaE_ReRep'            => 'max:50',
                           'analista_ReRep'         => 'required',
                           'comentario_ReRep'           => 'max:50',
                           'id_PRep'            => 'required',
        ];
    }
}
