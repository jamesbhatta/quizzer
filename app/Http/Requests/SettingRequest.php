<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'app_name' => 'required',
            'marks_per_question' => 'required|numeric',
            'negative_mark_per_question' => 'required|numeric',
            'exam_duration' => 'required|numeric',
        ];
    }
}
