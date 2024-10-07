<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassroomRequest extends FormRequest
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
            'room_id'=> 'required',
            'name_en'=> 'required',
            'name_ar'=> 'required',
            'course_id'=> 'required',
            'unit_id'=> 'required',
        ];
    }

    public function messages()
    {
        return [
            'room_id.required' => 'Room Id required',
            'name_en.required' => 'Name required',
            'name_ar.required' => 'Name in arabic required',
            'course_id.required' => 'Course required',
            'unit_id.required' => 'Unit required',
        ];
    }

}
