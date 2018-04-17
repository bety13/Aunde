<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class dgrepelenteRequest extends FormRequest
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
            'fechaE_DGR'          => 'max:50',
            'horaE_DGR'           => 'max:50',
            'Npieza_DGR'          => 'required',
            'color_DGR'           => 'required',
            'loteProd_DGR'        => 'max:50',
            'equipo_DGR'          => 'max:50',
            'batch_DGR'           => 'max:50',
            'loteUrdido_DGR'      => 'max:50',
            'folioBond_DGR'       => 'max:50',
            'codProdTermin_DGR'   => 'max:50',
            'nombreOpera_DGR'     => 'max:50',
            'comentarios_DGR'     => 'max:50'
        ];
    }
}
