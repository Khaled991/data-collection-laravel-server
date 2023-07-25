<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitSurveyRequest;
use App\Models\SubmittedSurvey;
use App\Models\SubmittedSurveyOptionResponse;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class SubmittedSurveyController extends Controller
{

    public function store(SubmitSurveyRequest $request)
    {
        $requestData = $request->all();

        $submittedSurvey = SubmittedSurvey::create([
            'survey_id' => $requestData['survey_id'],
            'user_id' => Auth::id(),
        ]);

        $chooseResponses = $requestData['choose_questions_responses'];
        $multipleSelectResponses = $requestData['multiple_select_questions_responses'];

        $chooseResponsesData = $this->_prepareChooseQuestionsResponses($chooseResponses);
        $multipleSelectResponsesData = $this->_prepareMultipleSelectQuestionsResponses($multipleSelectResponses);

        $submittedSurvey->surveyOptionResponses()->saveMany([...$chooseResponsesData, ...$multipleSelectResponsesData]);

        $textResponses = $requestData['text_questions_responses'];
        $submittedSurvey->submittedSurveyTextResponses()->createMany($textResponses);

        return response($submittedSurvey, Response::HTTP_CREATED);
    }


    private function _prepareMultipleSelectQuestionsResponses($multipleSelectResponses)
    {
        $multipleSelectResponsesData = [];
        foreach ($multipleSelectResponses as $response) {
            $optionResponses = [];
            foreach ($response['option'] as $option) {
                $optionResponses[] = new SubmittedSurveyOptionResponse([
                    'option_question_id' => $response['option_question_ids'],
                    'option_id' => $option['id'],
                    'text_response' => $option['text_response'],
                ]);
            }
            $multipleSelectResponsesData = array_merge($multipleSelectResponsesData, $optionResponses);
        }

        return $multipleSelectResponsesData;
    }

    private function _prepareChooseQuestionsResponses($chooseResponses)
    {
        $chooseResponsesData = [];
        foreach ($chooseResponses as $response) {
            $chooseResponsesData[] = new SubmittedSurveyOptionResponse([
                'option_question_id' => $response['option_question_id'],
                'option_id' => $response['option_id'],
                'text_response' => $response['text_response'],
            ]);
        }

        return $chooseResponsesData;
    }
}
