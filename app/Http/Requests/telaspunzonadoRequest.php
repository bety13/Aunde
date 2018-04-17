<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class telaspunzonadoRequest extends FormRequest
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
            'Diseño_Punzo'    => 'required',
            'color_Punzo'     => 'required',
            'OEM_Punzo'       => 'required',
            'MP_peso_Punzo'   => 'max:50',
            'MP_anchoU_Punzo' => 'max:50',
            'MP_apari_Punzo'  => 'max:50',
            'UM_peso_Punzo'   => 'max:50',
            'UM_anchoU_Punzo' => 'max:50',
            'UM_apari_Punzo'  => 'max:50',
            'LSE_peso_Punzo'  => 'max:50',
            'LSE_anchoU_Punzo'=> 'max:50',
            'LSE_apari_Punzo' => 'max:50',
            'LIE_peso_Punzo'  => 'max:50',
            'LIE_anchoU_Punzo'=> 'max:50',
            'LIE_apari_Punzo' => 'max:50',
            'id_Clien'      => 'required'
        ];
    }
}
