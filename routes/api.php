<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SubmittedSurveyController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('sign-in', [AuthController::class, 'signIn']);

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('survey', [SurveyController::class, 'index']);
    Route::get('/survey-question/{surveyId}', [SurveyController::class, 'showQuestions']);
    Route::post('submitted-survey-surveys', [SubmittedSurveyController::class, 'store']);
    Route::get('user/{id}', [UserController::class, 'show']);
});
