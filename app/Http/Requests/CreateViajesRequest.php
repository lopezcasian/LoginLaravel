<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateViajesRequest extends FormRequest
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
            'pais' => ['required','max:50'],
            'estado' => ['required','max:50'],
            'ciudad' => ['nullable','max:50'],
            'dias' => ['required','numeric','max:2'],
            'noches' => ['required','numeric','max:2']
        ];
    }
}
