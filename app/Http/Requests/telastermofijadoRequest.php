<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class telastermofijadoRequest extends FormRequest
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
                           'Diseño_Termo'              => 'required',
                           'color_Termo'               => 'required',
                           'OEM_Termo'                 => 'required',

                           'MP_peso_Termo'             => 'max:50',
                           'MP_anchoU_Termo'           => 'max:50',
                           'MP_elongacionW_F_Termo'    => 'max:50',
                           'MP_espesor_Termo'          => 'max:50',
                           'MP_lecColor_Termo'         => 'max:50',
                           'MP_flamabilidad_Termo'     => 'max:50',
                           'MP_apari_Termo'            => 'max:50',
                           'MP_tono_Termo'             => 'max:50',

                           'UM_peso_Termo'             => 'max:50',
                           'UM_anchoU_Termo'           => 'max:50',
                           'UM_elongacionW_F_Termo'    => 'max:50',
                           'UM_espesor_Termo'          => 'max:50',
                           'UM_lecColorDL_Termo'       => 'max:50',
                           'UM_lecColorDA_Termo'       => 'max:50',
                           'UM_lecColorDB_Termo'       => 'max:50',
                           'UM_flamabilidad_Termo'     => 'max:50',
                           'UM_apari_Termo'            => 'max:50',
                           'UM_tono_Termo'             => 'max:50',

                          'LSE_peso_Termo'             => 'max:50',
                           'LSE_anchoU_Termo'          => 'max:50',
                           'LSE_W_Termo'               => 'max:50',    
                           'LSE_F_Termo'               => 'max:50',
                           'LSE_espesor_Termo'         => 'max:50',  
                           'LSE_lecColorDL_Termo'      => 'max:50',
                           'LSE_lecColorDA_Termo'      => 'max:50',    
                           'LSE_lecColorDB_Termo'      => 'max:50',
                           'LSE_flamabilidad_Termo'    => 'max:50',
                           'LSE_apari_Termo'           => 'max:50',
                           'LSE_tono_Termo'            => 'max:50',

                           'LIE_peso_Termo'            => 'max:50',
                           'LIE_anchoU_Termo'          => 'max:50',
                           'LIE_W_Termo'               => 'max:50',
                           'LIE_F_Termo'               => 'max:50',
                           'LIE_espesor_Termo'         => 'max:50',
                           'LIE_lecColorDL_Termo'      => 'max:50',
                           'LIE_lecColorDA_Termo'      => 'max:50',
                           'LIE_lecColorDB_Termo'      => 'max:50',
                           'LIE_flamabilidad_Termo'    => 'max:50',
                           'LIE_apari_Termo'           => 'max:50',
                           'LIE_tono_Termo'            => 'max:50',

                           'id_Clien'                   => 'required'
        ];
    }
}
