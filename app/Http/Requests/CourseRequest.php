<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'name_en' => 'required',
            'name_ar' => 'required',
            'code' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'price' => 'required',
            'subject_id' => 'required',
            'term_id' => 'required',
            'grade_id' => 'required',
            'level_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name_en.required' => 'Name is required',
            'name_ar.required' => 'Name in arabic is required',
            'subject_id.required' => 'Subject is required',
            'term_id.required' => 'Term is required',
            'grade_id.required' => 'Grade is required',
            'level_id.required' => 'Level is required',
        ];
    }

}
