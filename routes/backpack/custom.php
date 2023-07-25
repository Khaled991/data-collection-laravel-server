<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('user', 'UserCrudController');
    Route::crud('region', 'RegionCrudController');
    Route::crud('city', 'CityCrudController');
    Route::crud('organization', 'OrganizationCrudController');
    Route::crud('village', 'VillageCrudController');
    Route::crud('survey', 'SurveyCrudController');
    Route::crud('option-question', 'OptionQuestionCrudController');
    Route::crud('text-question', 'TextQuestionCrudController');
    Route::crud('option', 'OptionCrudController');
    Route::crud('detailed-submitted-surveys', 'DetailedSubmittedSurveysCrudController');
}); // this should be the absolute last line of this file