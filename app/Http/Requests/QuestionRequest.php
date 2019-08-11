<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
            // 'text' => 'required|unique:questions,text,' . $this->question['id'],.'chapters,,id,chapter_id,' . $this->question['chapter_id'],
            'text' => 'required',
            'chapter_id' => 'required|exists:chapters,id',
            // 'answer' => 'required',
            // 'question_id' => 'required',
            'option_one' => 'required',
            'option_two' => 'required',
            'option_three' => 'required',
            'option_four' => 'required',
            'is_correct' => 'required',
        ];
    }

     /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'text.required' => 'Please type the question.',
            'answer.required' => 'Provide the answer..',
            'is_correct.required' => 'You must choose the correct answer.',
        ];
    }

}
