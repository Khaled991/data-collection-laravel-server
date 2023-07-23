<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OptionQuestionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "title" => $this->title,
            "description" => $this->description,
            "question_type" => $this->question_type,
            "is_other_option_enabled" => $this->is_other_option_enabled,
            "is_other_option_text_enabled" => $this->is_other_option_text_enabled,
            "options" => OptionResource::collection($this->options),
        ];
    }
}
