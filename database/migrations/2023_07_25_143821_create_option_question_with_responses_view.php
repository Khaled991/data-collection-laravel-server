<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement(
            "
            IF OBJECT_ID('option_question_with_responses', 'V') IS NOT NULL
                DROP VIEW option_question_with_responses;
            "
        );
        DB::statement(
            "
            CREATE VIEW option_question_with_responses AS
                SELECT oq.id, oq.title AS question, oq.question_type ,o.text AS chosen_option, ssor.text_response, ssor.submitted_survey_id
                FROM detailed_submitted_surveys dss
                JOIN submitted_survey_option_responses ssor
                    ON dss.id = ssor.submitted_survey_id
                JOIN options o
                    ON ssor.option_id = o.id
                JOIN option_questions oq
                    ON o.option_question_id= oq.id
            "
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW option_question_with_responses;");
    }
};
