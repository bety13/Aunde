<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class procesorepelenteRequest extends FormRequest
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
                           'pOrilla_PRep'              => 'max:20',
                           'pCentro_PRep'              => 'max:20',
                           'ppOrilla_PRep'             => 'max:20',
                           'pPromedio_PRep'            => 'max:20',
                           'anchoU_PRep'               => 'max:20',
                           'elongacionW_PRep'          => 'max:20',
                           'elongacionF_PRep'          => 'max:20',
                           'repelente_PRep'            => 'max:20',
                           'velcro_PRep'               => 'max:20',
                           'croking_PRep'              => 'max:20',
                           'distanciaW_PRep'           => 'max:20',
                           'tiempoW_PRep'              => 'max:20',
                           'velocidadW_PRep'           => 'max:20',
                           'distanciaF_PRep'           => 'max:20',
                           'tiempoF_PRep'              => 'max:20',
                           'velocidadF_PRep'           => 'max:20',
                           'apariencia_PRep'           => 'max:20',
                           'tono_PRep'                 => 'max:20',
                           'disposicion_PRep'          => 'max:20',
                           'fechaE_PRep'               => 'max:20',
                           'horaE_PRep'                => 'max:20',
                           'analista_PRep'             => 'required',
                           'comentario_PRep'           => 'max:20',
                           'id_Ramas'                  => 'max:20'
        ];
    }
}
