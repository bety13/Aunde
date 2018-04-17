<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class telaslavadoRequest extends FormRequest
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
            'Diseño_Lav'    => 'required',
            'color_Lav'     => 'required',
            'OEM_Lav'       => 'required',
            'MP_peso_Lav'   => 'max:50',
            'MP_anchoU_Lav' => 'max:50',
            'MP_apari_Lav'  => 'max:50',
            'UM_peso_Lav'   => 'max:50',
            'UM_anchoU_Lav' => 'max:50',
            'UM_apari_Lav'  => 'max:50',
            'LSE_peso_Lav'  => 'max:50',
            'LSE_anchoU_Lav'=> 'max:50',
            'LSE_apari_Lav' => 'max:50',
            'LIE_peso_Lav'  => 'max:50',
            'LIE_anchoU_Lav'=> 'max:50',
            'LIE_apari_Lav' => 'max:50',
            'id_Clien'      => 'required'
        ];
    }
}
