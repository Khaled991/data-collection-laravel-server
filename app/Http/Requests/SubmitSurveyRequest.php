<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmitSurveyRequest extends FormRequest
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
            "user_id" => 'required|integer',
            "survey_id" => 'required|integer',
            'choose_questions_responses.*.option_question_id' => 'required|integer',
            'choose_questions_responses.*.option_id' => 'required|integer',
            'choose_questions_responses.*.text_response' => 'nullable|string',
            'multiple_select_questions_responses.*.option_question_id' => 'required|integer',
            'multiple_select_questions_responses.*.option.*.id' => 'required|integer',
            'multiple_select_questions_responses.*.option.*.text_response' => 'nullable|string',
            'text_questions_responses.*.text_question_id' => 'required|integer',
            'text_questions_responses.*.text_response' => 'required|string',
        ];
    }
}
