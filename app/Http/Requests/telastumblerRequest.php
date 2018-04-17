<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class telastumblerRequest extends FormRequest
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
                'Diseño_Tum'            => 'required',
                'color_Tum'             => 'required',
                'OEM_Tum'               => 'required',
                'MP_peso_Tum'           => 'max:50',
                'MP_anchoU_Tum'         => 'max:50',
                'MP_elongacionFW_Tum'   => 'max:50',
                'MP_apari_Tum'          => 'max:50',
                'MP_tono_Tum'           => 'max:50',
                'UM_peso_Tum'           => 'max:50',
                'UM_anchoU_Tum'         => 'max:50',
                'UM_elongacionFW_Tum'   => 'max:50',
                'UM_apari_Tum'          => 'max:50',
                'UM_tono_Tum'           => 'max:50',
                'LSE_peso_Tum'          => 'max:50',
                'LSE_anchoU_Tum'        => 'max:50',
                'LSE_elongacionW_Tum'   => 'max:50',
                'LSE_elongacionF_Tum'   => 'max:50',
                'LSE_apari_Tum'         => 'max:50',
                'LSE_tono_Tum'          => 'max:50',
                'LIE_peso_Tum'          => 'max:50',
                'LIE_anchoU_Tum'        => 'max:50',
                'LIE_elongacionW_Tum'   => 'max:50',
                'LIE_elongacionF_Tum'   => 'max:50',
                'LIE_apari_Tum'         => 'max:50',
                'LIE_tono_Tum'          => 'max:50',
                'id_Clien'              => 'required'

        ];
    }
}
