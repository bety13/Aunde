<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class dglavadoRequest extends FormRequest
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
            'fechaE_DGL'          => 'max:50',
            'horaE_DGL'           => 'max:50',
            'Npieza_DGL'          => 'required',
            'color_DGL'           => 'required',
            'loteProd_DGL'        => 'max:50',
            'equipo_DGL'          => 'max:50',
            'batch_DGL'           => 'max:50',
            'loteUrdido_DGL'      => 'max:50',
            'folioBond_DGL'       => 'max:50',
            'codProdTermin_DGL'   => 'max:50',
            'nombreOpera_DGL'     => 'max:50',
            'comentarios_DGL'     => 'max:50',
            'id_Lav'             => 'required'
        ];
    }
}
