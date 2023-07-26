<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DetailedSubmittedSurveysResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "title" => $this->title,
            "name" => $this->created_by,
            "email" => $this->email,
            "region" => $this->region,
            "city" => $this->city,
            "village" => $this->village,
            "organization" => $this->organization,
            "textQuestions" => TextQuestionWithResponseResource::collection($this->textQuestionWithResponses),
            "choose_questions" => ChooseQuestionResource::collection($this->chooseQuestions),
            "multiple_answers_questions" => $this->_prepareMultipleAnswersQuestions($this->multipleSelectQuestions),
        ];
    }

    private function _prepareMultipleAnswersQuestions($multiple_answers_questions): array
    {
        $transformedData = [];

        foreach ($multiple_answers_questions as $item) {
            // Check if the question already exists in the transformed data
            $existingQuestionKey = null;
            foreach ($transformedData as $key => $transformedItem) {
                if ($transformedItem['question'] === $item['question']) {
                    $existingQuestionKey = $key;
                    break;
                }
            }

            // Create a new answer entry for the current item
            $answerEntry = [
                'chosen_answer' => $item['chosen_option'],
                'text_response' => $item['text_response'],
            ];

            // If the question doesn't exist in the transformed data, create a new entry
            if ($existingQuestionKey === null) {
                $transformedData[] = [
                    'question' => $item['question'],
                    'answers' => [$answerEntry],
                ];
            } else {
                // If the question already exists, add the answer to its existing answers
                $transformedData[$existingQuestionKey]['answers'][] = $answerEntry;
            }
        }

        return $transformedData;
    }
}
