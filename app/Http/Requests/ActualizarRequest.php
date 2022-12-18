<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'firstName' => 'required',
            'lastName'  => 'required',
            'age'  => 'required',
            'sex'  => 'required',
            'dni'  => 'required|unique:pacientes,dni,'.$this->route('paciente')->id,
            'blood_type'  => 'required',
            'telephone'  => 'required',
            'email'  => 'required',
            'direction'  => 'required'
        ];
    }
}
