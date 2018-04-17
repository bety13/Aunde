<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class reprocesotermofijadoRequest extends FormRequest
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
                           'pOrilla_ReTermo'        => 'max:50',
                           'pCentro_ReTermo'        => 'max:50',
                           'ppOrilla_ReTermo'       => 'max:50',
                           'pPromedio_ReTermo'      => 'max:50',
                           'anchoU_ReTermo'     => 'max:50',
                           'elongacionW_ReTermo'        => 'max:50',
                           'elongacionF_ReTermo'        => 'max:50',
                           'espesor_ReTermo'        => 'max:50',
                           'lecColorDL_ReTermo'     => 'max:50',
                           'lecColorDA_ReTermo'     => 'max:50',
                           'lecColorDB_ReTermo'     => 'max:50',
                           'distanciaW_ReTermo'     => 'max:50',
                           'tiempoW_ReTermo'        => 'max:50',
                           'velocidadW_ReTermo'     => 'max:50',
                           'distanciaF_ReTermo'     => 'max:50',
                           'tiempoF_ReTermo'        => 'max:50',
                           'velocidadF_ReTermo'     => 'max:50',
                           'apariencia_ReTermo'     => 'max:50',
                           'tono_ReTermo'       => 'max:50',
                           'disposicion_ReTermo'        => 'max:50',
                           'fechaE_ReTermo'     => 'max:50',
                           'horaE_ReTermo'      => 'max:50',
                           'analista_ReTermo'       => 'required',
                           'comentario_ReTermo'     => 'max:50',
                           'id_PTermo'      => 'required',
        ];
    }
}
