<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class dgbondeoRequest extends FormRequest
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
            'fechaE_DGBO'          => 'max:50',
            'horaE_DGBO'           => 'max:50',
            'Npieza_DGBO'          => 'required',
            'color_DGBO'           => 'required',
            'loteProd_DGBO'        => 'max:50',
            'equipo_DGBO'          => 'max:50',
            'batch_DGBO'           => 'max:50',
            'loteUrdido_DGBO'      => 'max:50',
            'folioBond_DGBO'       => 'max:50',
            'codProdTermin_DGBO'   => 'max:50',
            'nombreOpera_DGBO'     => 'max:50',
            'comentarios_DGBO'     => 'max:50',
            'id_Bondeo'           => 'required'
        ];
    }
}
