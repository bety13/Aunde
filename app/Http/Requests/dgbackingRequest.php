<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class dgbackingRequest extends FormRequest
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
            'fechaE_DGB'          => 'max:50',
            'horaE_DGB'           => 'max:50',
            'Npieza_DGB'          => 'required',
            'color_DGB'           => 'required',
            'loteProd_DGB'        => 'max:50',
            'equipo_DGB'          => 'max:50',
            'batch_DGB'           => 'max:50',
            'loteUrdido_DGB'      => 'max:50',
            'folioBond_DGB'       => 'max:50',
            'codProdTermin_DGB'   => 'max:50',
            'nombreOpera_DGB'     => 'max:50',
            'comentarios_DGB'     => 'max:50'
        ];
    }
}
