<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubjectRequest extends FormRequest
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
            'name_en' => 'required|string',
            'name_ar' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'code' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name_ar.required' => 'Name in arabic is required',
        ];
    }

}
