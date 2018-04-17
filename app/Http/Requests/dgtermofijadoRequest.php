<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class dgtermofijadoRequest extends FormRequest
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
            'fechaE_DGTE'          => 'max:50',
            'horaE_DGTE'           => 'max:50',
            'Npieza_DGTE'          => 'required',
            'color_DGTE'           => 'required',
            'loteProd_DGTE'        => 'max:50',
            'equipo_DGTE'          => 'max:50',
            'batch_DGTE'           => 'max:50',
            'loteUrdido_DGTE'      => 'max:50',
            'folioBond_DGTE'       => 'max:50',
            'codProdTermin_DGTE'   => 'max:50',
            'nombreOpera_DGTE'     => 'max:50',
            'comentarios_DGTE'     => 'max:50',
            'id_Termo'            => 'required' 
        ];
    }
}
