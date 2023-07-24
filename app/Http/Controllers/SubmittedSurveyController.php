<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitSurveyRequest;
use App\Models\SubmittedSurvey;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class SubmittedSurveyController extends Controller
{
    public function store(SubmitSurveyRequest $request)
    {
        $submittedSurvey = SubmittedSurvey::create([
            'survey_id' => $request->input('survey_id'),
            'user_id' => Auth::id(),
        ]);
        $submitted_survey_text_response = $request->input('text_questions_responses');

        $multiple_select_questions_responses = $this->_prepareMultipleSelectQuestionsResponses($request->input('multiple_select_questions_responses'));
        $choose_questions_responses = $request->input('choose_questions_responses');
        $survey_option_responses = [
            ...$multiple_select_questions_responses,
            ...$choose_questions_responses,
        ];

        $submittedSurvey->submittedSurveyTextResponses()->createMany($submitted_survey_text_response);
        $submittedSurvey->surveyOptionResponses()->createMany($survey_option_responses);


        return response($submittedSurvey, Response::HTTP_CREATED);
    }

    private function _prepareMultipleSelectQuestionsResponses($multiple_select_questions_responses)
    {
        $multiple_select_questions_responses = [];

        foreach ($multiple_select_questions_responses as $response) {
            $optionQuestionId = $response["option_question_ids"];
            $optionIds = $response["option_id"];

            foreach ($optionIds as $optionId) {
                $multiple_select_questions_responses[] = [
                    "option_question_id" => $optionQuestionId,
                    "option_id" => $optionId,
                ];
            }
        }

        return $multiple_select_questions_responses;
    }
}
