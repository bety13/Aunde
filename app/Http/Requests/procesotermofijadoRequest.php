<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class procesotermofijadoRequest extends FormRequest
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
                           'pOrilla_PTermo'     => 'max:50',
                           'pCentro_PTermo'     => 'max:50',
                           'ppOrilla_PTermo'        => 'max:50',
                           'pPromedio_PTermo'       => 'max:50',
                           'anchoU_PTermo'      => 'max:50',
                           'elongacionW_PTermo'     => 'max:50',
                           'elongacionF_PTermo'     => 'max:50',
                           'espesor_PTermo'     => 'max:50',
                           'lecColorDL_PTermo'      => 'max:50',
                           'lecColorDA_PTermo'      => 'max:50',
                           'lecColorDB_PTermo'      => 'max:50',
                           'distanciaW_PTermo'      => 'max:50',
                           'tiempoW_PTermo'     => 'max:50',
                           'velocidadW_PTermo'      => 'max:50',
                           'distanciaF_PTermo'      => 'max:50',
                           'tiempoF_PTermo'     => 'max:50',
                           'velocidadF_PTermo'      => 'max:50',
                           'apariencia_PTermo'      => 'max:50',
                           'tono_PTermo'        => 'max:50',
                           'disposicion_Ptermo'     => 'max:50',
                           'fechaE_PTermo'      => 'max:50',
                           'horaE_PTermo'       => 'max:50',
                           'analista_PTermo'        => 'required',
                           'comentario_PTermo'      => 'max:50',
                           'id_Ramas'       => 'max:50',
        ];
    }
}
