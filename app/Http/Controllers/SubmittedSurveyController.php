<?php

namespace App\Http\Controllers;

use App\Models\SubmittedSurvey;
use Illuminate\Http\Client\Request;
use Symfony\Component\HttpFoundation\Response;

class SubmittedSurveyController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $submitted_survey = SubmittedSurvey::create($request->all());

        return response($submitted_survey, Response::HTTP_CREATED);
    }
}
