<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehiculoRequest extends FormRequest
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
    public function rules() {
        return [
            'modelo'       => 'required|max:100', //unique:vehiculo,modelo,idfabricante
            //'modelo'       => 'required|max:100|unique:vehiculo,modelo,' . $this->id . ',id,idfabricante,' . $this->idfabricante,
            'idfabricante' => 'required|numeric|exists:fabricante,id',
        ];
    }
}
