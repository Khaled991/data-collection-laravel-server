<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('survey_other_option_responses', function (Blueprint $table) {

            $table->dropConstrainedForeignId('option_question_id');
            $table->dropConstrainedForeignId('submitted_survey_id');
            $table->dropColumn('other_text_response');

            $table->string('text_response');
            $table->foreignId('survey_option_response_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('survey_other_option_responses', function (Blueprint $table) {
            $table->foreignId('option_question_id')->constrained();
            $table->foreignId('submitted_survey_id')->constrained();
            $table->string('other_text_response')->nullable();

            $table->dropColumn('text_response');
            $table->dropConstrainedForeignId('survey_option_response_id');
        });
    }
};
