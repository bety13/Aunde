<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class telasbackingRequest extends FormRequest
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
            'Diseño_Back'            => 'required',             
            'color_Back'             => 'required',
            'OEM_Back'               => 'required',
            'MP_peso_Back'           => 'max:50',
            'MP_anchoU_Back'         => 'max:50',
            'MP_elongacionFW_Back'   => 'max:50',
            'MP_velcro_Back'         => 'max:50',
            'MP_croking_Back'        => 'max:50',
            'MP_flamabilidadWF_Back' => 'max:50',
            'MP_apari_Back'          => 'max:50',
            'MP_tono_Back'           => 'max:50',
            'UM_peso_Back'           => 'max:50',
            'UM_anchoU_Back'         => 'max:50',
            'UM_elongacionFW_Back'   => 'max:50',
            'UM_velcro_Back'         => 'max:50',
            'UM_croking_Back'        => 'max:50',
            'UM_flamabilidadWF_Back' => 'max:50',
            'UM_apari_Back'          => 'max:50',
            'UM_tono_Back'           => 'max:50',
            'LSE_peso_Back'          => 'max:50',
            'LSE_anchoU_Back'        => 'max:50',
            'LSE_elongacionW_Back'   => 'max:50',
            'LSE_elongacionF_Back'   => 'max:50',
            'LSE_velcro_Back'        => 'max:50',
            'LSE_croking_Back'       => 'max:50',
            'LSE_flamabilidadWF_Back'=> 'max:50',
            'LSE_apari_Back'         => 'max:50',
            'LSE_tono_Back'          => 'max:50',
            'LIE_peso_Back'          => 'max:50',
            'LIE_anchoU_Back'        => 'max:50',
            'LIE_elongacionW_Back'   => 'max:50',
            'LIE_elongacionF_Back'   => 'max:50',
            'LIE_velcro_Back'        => 'max:50',
            'LIE_croking_Back'       => 'max:50',
            'LIE_flamabilidadWF_Back'=> 'max:50',
            'LIE_apari_Back'         => 'max:50',
            'LIE_tono_Back'          => 'max:50',
            'id_Clien'               => 'required'
        ];
    }
}
