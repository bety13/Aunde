<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class procesobondeoRequest extends FormRequest
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
                           'peso1_PBondeo'        => 'max:20',
                           'peso2_PBondeo'        => 'max:20',
                           'peso3_PBondeo'        => 'max:20',
                           'pesoProm_PBondeo'         => 'max:20',
                           'espesor1_PBondeo'         => 'max:20',
                           'espesor2_PBondeo'         => 'max:20',
                           'espesor3_PBondeo'         => 'max:20',
                           'espesorProm_PBondeo'          => 'max:20',
                           'anchoUtil_PBondeo'        => 'max:20',
                           'adhesionWTU_PBondeo'          => 'max:20',
                           'adhesionFTU_PBondeo'          => 'max:20',
                           'adhesionWUS_PBondeo'          => 'max:20',
                           'adhesionFUS_PBondeo'          => 'max:20',
                           'elongacionW_PBondeo'          => 'max:20',
                           'elongacionF_PBondeo'          => 'max:20',
                           'distanciaW_PBondeo'       => 'max:20',
                           'tiempoW_PBondeo'          => 'max:20',
                           'velocidadW_PBondeo'       => 'max:20',
                           'distanciaF_PBondeo'       => 'max:20',
                           'tiempoF_PBondeo'          => 'max:20',
                           'velocidadF_PBondeo'       => 'max:20',
                           'apariencia_PBondeo'       => 'max:20',
                           'tono_PBondeo'         => 'max:20',
                           'recuperacionW_PBondeo'        => 'max:20',
                           'recuperacionF_PBondeo'        => 'max:20',
                           'lecColorDL_PBondeo'       => 'max:20',
                           'lecColorDA_PBondeo'       => 'max:20',
                           'lecColorDB_PBondeo'       => 'max:20',
                           'disposicion_PBondeo'          => 'max:20',
                           'fechaE_PBondeo'       => 'max:20',
                           'horaE_PBondeo'        => 'max:20',
                           'analista_PBondeo'         => 'required',
                           'comentario_PBondeo'       => 'max:20',
                           'id_Procesos'          => 'max:20'
        ];
    }
}
