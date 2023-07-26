<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitManySurveysRequest;
use App\Http\Requests\SubmitSurveyRequest;
use App\Models\SubmittedSurvey;
use App\Models\SubmittedSurveyOptionResponse;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class SubmittedSurveyController extends Controller
{
    public function storeMany(SubmitManySurveysRequest $request)
    {
        foreach ($request['data'] as $data) {
            $surveyToSubmit = ["user_id" => $request->input("user_id"), ...$data];
            $this->store(new SubmitSurveyRequest($surveyToSubmit));
        }
        return $request->all();
    }
    public function store(SubmitSurveyRequest $request)
    {
        $requestData = $request->all();
        $user_id =  $request->input("user_id");

        $submittedSurvey = SubmittedSurvey::create([
            'survey_id' => $requestData['survey_id'],
            'user_id' => $user_id,
        ]);

        $chooseResponses = $requestData['choose_questions_responses'];
        $multipleSelectResponses = $requestData['multiple_select_questions_responses'];

        $chooseResponsesData = $this->_prepareChooseQuestionsResponses($chooseResponses);
        $multipleSelectResponsesData = $this->_prepareMultipleSelectQuestionsResponses($multipleSelectResponses);

        $submittedSurvey->surveyOptionResponses()->saveMany([...$chooseResponsesData, ...$multipleSelectResponsesData]);

        $textResponses = $requestData['text_questions_responses'];
        $submittedSurvey->submittedSurveyTextResponses()->createMany($textResponses);
        return response(null, Response::HTTP_CREATED);
    }


    private function _prepareMultipleSelectQuestionsResponses($multipleSelectResponses)
    {
        $multipleSelectResponsesData = [];
        foreach ($multipleSelectResponses as $response) {
            $optionResponses = [];
            foreach ($response['option'] as $option) {
                $optionResponses[] = new SubmittedSurveyOptionResponse([
                    'option_question_id' => $response['option_question_id'],
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
