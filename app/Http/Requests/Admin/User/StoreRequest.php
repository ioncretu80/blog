<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'role'=>'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Acest camp este obligatoriu',
            'name.string' => 'Acest camp este obligatoriu sa fie de tip text',
            'email.required' => 'Acest camp este obligatoriu',
            'email.string' => 'Acest camp este obligatoriu sa fie de tip text',
            'email.email' => 'emailul trebuie sa fie sub format nume@domen.de',
            'email.unique' => 'Utilizator cu asa email deja este creat',

        ];

    }
}
