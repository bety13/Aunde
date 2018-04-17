<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class dgtejidoRequest extends FormRequest
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
            'fechaE_DG'          => 'max:50',
            'horaE_DG'           => 'max:50',
            'Npieza_DG'          => 'required',
            'color_DG'           => 'required',
            'loteProd_DG'        => 'max:50',
            'equipo_DG'          => 'max:50',
            'batch_DG'           => 'max:50',
            'loteUrdido_DG'      => 'max:50',
            'folioBond_DG'       => 'max:50',
            'codProdTermin_DG'   => 'max:50',
            'nombreOpera_DG'     => 'max:50',
            'comentarios_DG'     => 'max:50',
            'id_Tej'             => 'required'
        ];
    }
}
