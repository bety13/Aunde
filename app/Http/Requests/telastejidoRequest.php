<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class telastejidoRequest extends FormRequest
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
            'Diseño_Tej'    => 'required',
            'color_Tej'     => 'required',
            'OEM_Tej'       => 'required',
            'MP_peso_Tej'   => 'max:50',
            'MP_anchoU_Tej' => 'max:50',
            'MP_apari_Tej'  => 'max:50',
            'UM_peso_Tej'   => 'max:50',
            'UM_anchoU_Tej' => 'max:50',
            'UM_apari_Tej'  => 'max:50',
            'LSE_peso_Tej'  => 'max:50',
            'LSE_anchoU_Tej'=> 'max:50',
            'LSE_apari_Tej' => 'max:50',
            'LIE_peso_Tej'  => 'max:50',
            'LIE_anchoU_Tej'=> 'max:50',
            'LIE_apari_Tej' => 'max:50',
            'id_Clien'      => 'required'
        ];
    }
}
