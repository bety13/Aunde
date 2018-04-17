<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class telasrepelenteRequest extends FormRequest
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
            'Diseño_Rep'            => 'required',             
            'color_Rep'             => 'required',
            'OEM_Rep'               => 'required',
            'MP_peso_Rep'           => 'max:50',
            'MP_anchoU_Rep'         => 'max:50',
            'MP_elongacionFW_Rep'   => 'max:50',
            'MP_rep_Rep'            => 'max:50',
            'MP_velcro_Rep'         => 'max:50',
            'MP_croking_Rep'        => 'max:50',
            'MP_flamabilidadWF_Rep' => 'max:50',
            'MP_apari_Rep'          => 'max:50',
            'MP_tono_Rep'           => 'max:50',
            'UM_peso_Rep'           => 'max:50',
            'UM_anchoU_Rep'         => 'max:50',
            'UM_elongacionFW_Rep'   => 'max:50',
            'UM_rep_Rep'            => 'max:50',
            'UM_velcro_Rep'         => 'max:50',
            'UM_croking_Rep'        => 'max:50',
            'UM_flamabilidadWF_Rep' => 'max:50',
            'UM_apari_Rep'          => 'max:50',
            'UM_tono_Rep'           => 'max:50',
            'LSE_peso_Rep'          => 'max:50',
            'LSE_anchoU_Rep'        => 'max:50',
            'LSE_elongacionW_Rep'   => 'max:50',
            'LSE_elongacionF_Rep'   => 'max:50',
            'LSE_rep_Rep'           => 'max:50',
            'LSE_velcro_Rep'        => 'max:50',
            'LSE_croking_Rep'       => 'max:50',
            'LSE_flamabilidadWF_Rep'=> 'max:50',
            'LSE_apari_Rep'         => 'max:50',
            'LSE_tono_Rep'          => 'max:50',
            'LIE_peso_Rep'          => 'max:50',
            'LIE_anchoU_Rep'        => 'max:50',
            'LIE_elongacionW_Rep'   => 'max:50',
            'LIE_elongacionF_Rep'   => 'max:50',
            'LIE_rep_Rep'           => 'max:50',
            'LIE_velcro_Rep'        => 'max:50',
            'LIE_croking_Rep'       => 'max:50',
            'LIE_flamabilidadWF_Rep'=> 'max:50',
            'LIE_apari_Rep'         => 'max:50',
            'LIE_tono_Rep'          => 'max:50',
            'id_Clien'              => 'required'
        ];
    }
}
