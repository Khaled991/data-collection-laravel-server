<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SurveyQuestionsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "option_questions" => OptionQuestionResource::collection($this->optionQuestions),
            "text_questions" => TextQuestionResource::collection($this->textQuestions),
        ];
    }
}
