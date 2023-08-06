<?php

namespace App\Http\Requests\Api\v1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class StoreEmployeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'    => 'required',
            'birth'   => 'required',
            'address' => 'required',
            'job_id'     => 'required'
        ];
    }

    public function failedValidation(Validator $validator)
    {
    throw new HttpResponseException(response()->json([
        'success'   => false,
        'message'   => 'Validation errors',
        'data'      => $validator->errors()
    ]));
    }


    public function messages()
    {

        return [
            'name.required'       => 'El nombre es obligatorio',
            'birth.required'      => 'La de Fecha de nacimiento obligatoria',
            'address.required'    => 'La Dirección es obligatoria',
            'job_id.required'     => 'El Empleo es obligatorio',
        ];

    }
}
