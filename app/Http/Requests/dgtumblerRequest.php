<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class dgtumblerRequest extends FormRequest
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
            'fechaE_DGT'          => 'max:50',
            'horaE_DGT'           => 'max:50',
            'Npieza_DGT'          => 'required',
            'color_DGT'           => 'required',
            'loteProd_DGT'        => 'max:50',
            'equipo_DGT'          => 'max:50',
            'batch_DGT'           => 'max:50',
            'loteUrdido_DGT'      => 'max:50',
            'folioBond_DGT'       => 'max:50',
            'codProdTermin_DGT'   => 'max:50',
            'nombreOpera_DGT'     => 'max:50',
            'comentarios_DGT'     => 'max:50',
        ];
    }
}
