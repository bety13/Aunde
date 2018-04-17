<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class telasbondeoRequest extends FormRequest
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

                           'Diseño_Bondeo'              => 'required',
                           'color_Bondeo'               => 'required',
                           'OEM_Bondeo'                 => 'required',

                           'MP_peso_Bondeo'             => 'max:50',
                           'MP_espesor_Bondeo'          => 'max:50',
                           'MP_anchoU_Bondeo'           => 'max:50',
                           'MP_adhesion_Bondeo'         => 'max:50',
                           'MP_elongacion_Bondeo'       => 'max:50',
                           'MP_flamabilidad_Bondeo'     => 'max:50',
                           'MP_apariencia_Bondeo'       => 'max:50',
                           'MP_tono_Bondeo'             => 'max:50',
                           'MP_recuperacion_Bondeo'     => 'max:50',
                           'MP_lecColor_Bondeo'         => 'max:50',

                           'UM_peso_Bondeo'             => 'max:50',
                           'UM_espesor_Bondeo'          => 'max:50',
                           'UM_anchoU_Bondeo'           => 'max:50',
                           'UM_adhesion_Bondeo'         => 'max:50',
                           'UM_elongacion_Bondeo'       => 'max:50',
                           'UM_flamabilidad_Bondeo'     => 'max:50',
                           'UM_apariencia_Bondeo'       => 'max:50',
                           'UM_tono_Bondeo'             => 'max:50',
                           'UM_recuperacion_Bondeo'     => 'max:50',
                           'UM_lecColordL_Bondeo'       => 'max:50',
                           'UM_lecColorda_Bondeo'       => 'max:50',
                           'UM_lecColordb_Bondeo'       => 'max:50',

                           'LSE_peso_Bondeo'            => 'max:50',
                           'LSE_espesor_Bondeo'         => 'max:50',
                           'LSE_anchoU_Bondeo'          => 'max:50',
                           'LSE_adhesion_Bondeo'        => 'max:50',
                           'LSE_elongacion_Bondeo'      => 'max:50',
                           'LSE_flamabilidad_Bondeo'    => 'max:50',
                           'LSE_apariencia_Bondeo'      => 'max:50',
                           'LSE_tono_Bondeo'            => 'max:50',
                           'LSE_recuperacion_Bondeo'    => 'max:50',
                           'LSE_lecColordL_Bondeo'      => 'max:50',
                           'LSE_lecColorda_Bondeo'      => 'max:50',
                           'LSE_lecColordb_Bondeo'      => 'max:50',

                           'LIE_peso_Bondeo'            => 'max:50',
                           'LIE_espesor_Bondeo'         => 'max:50',
                           'LIE_anchoU_Bondeo'          => 'max:50',
                           'LIE_adhesionWFTU_Bondeo'    => 'max:50',
                           'LIE_adhesionWFUS_Bondeo'    => 'max:50',
                           'LIE_elongacionW_Bondeo'     => 'max:50',
                           'LIE_elongacionF_Bondeo'     => 'max:50',
                           'LIE_flamabilidad_Bondeo'    => 'max:50',
                           'LIE_apariencia_Bondeo'      => 'max:50',
                           'LIE_tono_Bondeo'            => 'max:50',
                           'LIE_recuperacion_Bondeo'    => 'max:50',
                           'LIE_lecColordL_Bondeo'      => 'max:50',
                           'LIE_lecColorda_Bondeo'      => 'max:50',
                           'LIE_lecColordb_Bondeo'      => 'max:50',
                           

                           'id_Clien'                   => 'required'
            
        ];
    }
}
