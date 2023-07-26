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
            "textQuestions" => $this->textQuestionWithResponses,
        ];
    }
}
