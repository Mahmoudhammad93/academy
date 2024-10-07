<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TimetableRequest extends FormRequest
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
            'week_day' => 'required',
            'week' => 'required',
            'month' => 'required',
            'year' => 'required',
            'from' => 'required',
            // 'to' => 'required',
            'course_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name_en.required' => 'Name is required',
            'name_ar.required' => 'Name in arabic is required',
            'week_day.required' => 'Day required',
            'week.required' => 'Week required',
            'month.required' => 'Month required',
            'year.required' => 'Year required',
            'from.required' => 'From required',
            // 'to.required' => 'To required',
            'course_id.required' => 'Course required',
        ];
    }

}
