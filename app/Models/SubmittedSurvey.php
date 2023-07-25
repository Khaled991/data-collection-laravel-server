<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmittedSurvey extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $table = 'submitted_surveys';

    protected $guarded = ['id'];

    public function surveyOptionResponses()
    {
        return $this->hasMany(SubmittedSurveyOptionResponse::class);
    }

    public function submittedSurveyTextResponses()
    {
        return $this->hasOne(SubmittedSurveyTextResponse::class);
    }
}
