<?php

namespace App\Http\Requests\Admin\Post;

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
            //
            'title'=>'required|string',
            'content'=>'required|string',
            'preview_image'=>'required|file',
            'main_image'=>'required|file',
            'category_id'=>'required|integer|exists:categories,id',
            'tag_ids'=>'nullable|array',
            'tag_ids.*'=>'nullable|integer|exists:tags,id'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Acest camp este necesar de completat',
            'title.string' => 'Datetele trebuie sa corespunda unui format string',
            'content.required' => 'Acest camp este necesar de completat',
            'content.string' => 'Datetele trebuie sa corespunda unui format string',
            'preview_image.required'=>'Acest camp este necesar de completat',
            'preview_image.file'=>'Este obligatoriu de ales un fisier',
            'main_image.required'=>'Acest camp este necesar de completat',
            'main_image.file'=>'Este obligatoriu de ales un fisier',
            'category_id.required'=>'Acest camp este necesar de completat',
            'category_id.integer'=>'Datetele trebuie sa corespunda unui format integer',
            'category_id.exists'=>'Id trebuie sa fie in baza de Date',
            'tag_ids'=>'nullable|array',
            'tag_ids.array'=>'Este necesar sa fie un Array'
        ];
    }
}
