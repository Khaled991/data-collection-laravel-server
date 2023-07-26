<?php

namespace App\Http\Controllers;

use App\Http\Resources\DetailedSubmittedSurveysResource;
use App\Models\DetailedSubmittedSurveys;

class SubmittedSurveyResultController extends Controller
{
    public function submittedSurveyResult($id)
    {

        $survey =  DetailedSubmittedSurveys::all();
        return DetailedSubmittedSurveysResource::collection($survey);

        $data = [
            'title' => 'عنوان الاستبيان',
            'name' => 'اسم المعبئ',
            'email' => 'email@example.com',
            'region' => 'الحسكة',
            'city' => 'دير الزور',
            'village' => 'الرقة',
            'organization' => 'اسم المنظمة',
            'textQuestions' => [
                [
                    'questionTitle' => 'عنوان السؤال',
                    'question' => 'تفاصيل السؤال؟',
                    'answer' => 'الرد على السؤال',
                ],
                [
                    'questionTitle' => 'عنوان السؤال',
                    'question' => 'تفاصيل السؤال؟',
                    'answer' => 'الرد على السؤال',
                ],
                [
                    'questionTitle' => 'عنوان السؤال',
                    'question' => 'تفاصيل السؤال؟',
                    'answer' => 'الرد على السؤال',
                ],
            ],
            'multipleChoiceQuestions' => [
                [
                    'questionTitle' => 'عنوان السؤال',
                    'question' => 'تفاصيل السؤال؟',
                    'options' => [
                        'الخيار 1',
                        'الخيار 2',
                        'الخيار 3',
                    ],
                    'answer' => 'الرد على السؤال',
                    'clarification' => 'التوضيح',
                ],
                [
                    'questionTitle' => 'عنوان السؤال',
                    'question' => 'تفاصيل السؤال؟',
                    'options' => [
                        'الخيار 1',
                        'الخيار 2',
                        'الخيار 3',
                    ],
                    'answer' => 'الرد على السؤال',
                    'clarification' => 'التوضيح',
                ],
                [
                    'questionTitle' => 'عنوان السؤال',
                    'question' => 'تفاصيل السؤال؟',
                    'options' => [
                        'الخيار 1',
                        'الخيار 2',
                        'الخيار 3',
                    ],
                    'answer' => 'الرد على السؤال',
                    'clarification' => 'التوضيح',
                ],
            ],
            'multipleAnswersQuestions' => [
                [
                    'questionTitle' => 'عنوان السؤال',
                    'question' => 'تفاصيل السؤال؟',
                    'answers' => [
                        'الرد على السؤال',
                        'الرد على السؤال',
                    ],
                    'clarification' => 'التوضيح',
                ],
                [
                    'questionTitle' => 'عنوان السؤال',
                    'question' => 'تفاصيل السؤال؟',
                    'answers' => [
                        'الرد على السؤال',
                        'الرد على السؤال',
                        'الرد على السؤال',
                        'الرد على السؤال',
                    ],
                    'clarification' => 'التوضيح',
                ],
            ],
        ];
        return view('pdf.questionnaire', $data);

        // $pdf = PDF::loadView('pdf.questionnaire', $data);

        // return $pdf->stream('questionnaire.pdf');
    }
}
