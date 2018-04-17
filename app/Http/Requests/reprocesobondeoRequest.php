<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class reprocesobondeoRequest extends FormRequest
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
                           'peso1_ReBondeo'         => 'max:20',
                           'peso2_ReBondeo'         => 'max:20',
                           'peso3_ReBondeo'         => 'max:20',
                           'pesoProm_ReBondeo'          => 'max:20',
                           'espesor1_ReBondeo'          => 'max:20',
                           'espesor2_ReBondeo'          => 'max:20',
                           'espesor3_ReBondeo'          => 'max:20',
                           'espesorProm_ReBondeo'           => 'max:20',
                           'anchoUtil_ReBondeo'         => 'max:20',
                           'adhesionWTU_ReBondeo'           => 'max:20',
                           'adhesionFTU_ReBondeo'           => 'max:20',
                           'adhesionWUS_ReBondeo'           => 'max:20',
                           'adhesionFUS_ReBondeo'           => 'max:20',
                           'elongacionW_ReBondeo'           => 'max:20',
                           'elongacionF_ReBondeo'           => 'max:20',
                           'distanciaW_ReBondeo'            => 'max:20',
                           'tiempoW_ReBondeo'           => 'max:20',
                           'velocidadW_ReBondeo'            => 'max:20',
                           'distanciaF_ReBondeo'            => 'max:20',
                           'tiempoF_ReBondeo'           => 'max:20',
                           'velocidadF_ReBondeo'            => 'max:20',
                           'apariencia_ReBondeo'            => 'max:20',
                           'tono_ReBondeo'          => 'max:20',
                           'recuperacionW_ReBondeo'         => 'max:20',
                           'recuperacionF_ReBondeo'         => 'max:20',
                           'lecColorDL_ReBondeo'            => 'max:20',
                           'lecColorDA_ReBondeo'            => 'max:20',
                           'lecColorDB_ReBondeo'            => 'max:20',
                           'disposicion_ReBondeo'           => 'max:20',
                           'fechaE_ReBondeo'            => 'max:20',
                           'horaE_ReBondeo'         => 'max:20',
                           'analista_ReBondeo'          => 'required',
                           'comentario_ReBondeo'            => 'max:20',
                           'id_PBondeo'         => 'required',
        ];
    }
}
