<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailedSubmittedSurveys extends Model
{
    use CrudTrait;
    use HasFactory;

    // protected $primaryKey = "submitted_survey_id";

    public function submittedSurveyTextResponses()
    {
        return $this->hasMany(SubmittedSurveyTextResponse::class, "submitted_survey_id", "submitted_survey_id");
    }
    public function textQuestionWithResponses()
    {
        return $this->hasMany(TextQuestionWithResponse::class, "submitted_survey_id");
    }

    public function optionQuestionsWithResponse()
    {
        return $this->hasMany(OptionQuestionWithResponse::class, "submitted_survey_id");
    }

    public function chooseQuestions()
    {
        return $this->optionQuestionsWithResponse()->where(["question_type" => 'choose']);
    }

    public function multipleSelectQuestions()
    {
        // return $this->hasMany(OptionQuestionWithResponse::class,  "submitted_survey_id", "survey_id");
        // ->where(["question_type" => 'multiple']);
        // ->where(["question_type" => 'multiple']);
        return $this->optionQuestionsWithResponse()->where(["question_type" => 'multiple']);
        // $multipleSelectQuestions = $this->optionQuestionsWithResponse()->where(["question_type" => 'multiple']);
        // return $this->FunctionName($multipleSelectQuestions);
    }
}
