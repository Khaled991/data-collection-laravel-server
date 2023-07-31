<?php

namespace App\Http\Controllers;

use App\Http\Resources\SurveyQuestionsResource;
use App\Models\ActiveSurvey;
use App\Models\Survey;
use Illuminate\Support\Facades\Auth;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ActiveSurvey::where(['user_id' => Auth::id()])
            ->get(
                ['id', 'title', 'created_at']
            );
    }

    /**
     * Display a listing of the resource.
     */
    public function show($id)
    {
        return ActiveSurvey::where(['user_id' => Auth::id(), 'id' => $id])
            ->first(
                ['id', 'title', 'description', 'user_name', 'organization', 'region', 'city', 'village', 'created_at']
            );
    }

    /**
     * Display a listing of the resource.
     */
    public function showQuestions($surveyId)
    {
        $survey = Survey::find($surveyId);

        return new SurveyQuestionsResource($survey);
    }
}
