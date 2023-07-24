<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmittedSurvey extends Model
{
    use HasFactory;
    protected $table = 'submitted_surveys';

    protected $guarded = ['id'];

    public function submittedSurveyTextResponses()
    {
        return $this->hasMany(SubmittedSurveyTextResponse::class);
    }

    public function surveyOptionResponses()
    {
        return $this->hasMany(SurveyOptionResponse::class);
    }
}
