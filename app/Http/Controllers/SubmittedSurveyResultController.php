<?php

namespace App\Http\Controllers;

use App\Http\Resources\DetailedSubmittedSurveysResource;
use App\Models\DetailedSubmittedSurveys;

class SubmittedSurveyResultController extends Controller
{
    public function submittedSurveyResult($id)
    {
        $survey = DetailedSubmittedSurveys::find($id);
        $data = new DetailedSubmittedSurveysResource($survey);
        $jsonString =  $data->toJson();
        $arrayData = json_decode($jsonString, true);
        return view('show_result', ['data' => $arrayData]);
    }
}
