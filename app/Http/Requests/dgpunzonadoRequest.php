<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class dgpunzonadoRequest extends FormRequest
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
            'fechaE_DGP'          => 'max:50',
            'horaE_DGP'           => 'max:50',
            'Npieza_DGP'          => 'required',
            'color_DGP'           => 'required',
            'loteProd_DGP'        => 'max:50',
            'equipo_DGP'          => 'max:50',
            'batch_DGP'           => 'max:50',
            'loteUrdido_DGP'      => 'max:50',
            'folioBond_DGP'       => 'max:50',
            'codProdTermin_DGP'   => 'max:50',
            'nombreOpera_DGP'     => 'max:50',
            'comentarios_DGP'     => 'max:50',
            'id_Punzo'            => 'required'
        ];
    }
}
