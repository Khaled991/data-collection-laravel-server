<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailedSubmittedSurveys extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $primaryKey = "submitted_survey_id";

    public function submittedSurveyTextResponses()
    {
        return $this->hasMany(SubmittedSurveyTextResponse::class, "submitted_survey_id", "submitted_survey_id");
    }
}
