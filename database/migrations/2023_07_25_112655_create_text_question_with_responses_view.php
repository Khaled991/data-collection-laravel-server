<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement(
            "
            IF OBJECT_ID('text_question_with_responses', 'V') IS NOT NULL
                DROP VIEW text_question_with_responses;
            "
        );
        DB::statement(
            "
            CREATE VIEW text_question_with_responses AS
                SELECT tq.id, tq.text AS question, sstr.text_response AS response, dss.id AS submitted_survey_id
                FROM detailed_submitted_surveys dss
                JOIN submitted_survey_text_responses sstr
                    ON dss.id = sstr.submitted_survey_id
                JOIN text_questions tq
                    ON sstr.text_question_id = tq.id
            "
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW text_question_with_responses;");
    }
};
